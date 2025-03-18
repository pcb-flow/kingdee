<?php

namespace PcbFlow\Kingdee;

use GuzzleHttp\Client as HttpClient;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\GuzzleException;
use PcbFlow\Kingdee\Exceptions\ApiException;
use Psr\SimpleCache\CacheInterface;
use Symfony\Component\Cache\Adapter\FilesystemAdapter;
use Symfony\Component\Cache\Psr16Cache;

class Client
{
    /**
     * @var array
     */
    protected $config;

    /**
     * @var \Psr\SimpleCache\CacheInterface
     */
    protected $cache;

    /**
     * @var \GuzzleHttp\ClientInterface
     */
    protected $http;

    /**
     * @param array $config
     */
    public function __construct($config)
    {
        $this->config = array_merge([
            'base_uri' => '',
            'db_id' => '',
            'app_id' => '',
            'app_secret' => '',
            'locale_id' => 2052,
            'version' => '',
            'cache_prefix' => '',
            'session_lifetime' => 3600,
        ], $config);
    }

    /**
     * @param string $name
     * @param mixed $default
     * @return mixed
     */
    public function getConfig($name, $default = null)
    {
        return isset($this->config[$name]) ? $this->config[$name] : $default;
    }

    /**
     * @return \Psr\SimpleCache\CacheInterface
     */
    public function getCache()
    {
        if ($this->cache instanceof CacheInterface) {
            return $this->cache;
        }

        $prefix = $this->getConfig('cache_prefix');

        $pool = new FilesystemAdapter($prefix);

        $this->cache = new Psr16Cache($pool);

        return $this->cache;
    }

    /**
     * @param \Psr\SimpleCache\CacheInterface $cache
     * @return void
     */
    public function setCache($cache)
    {
        $this->cache = $cache;
    }

    /**
     * @return \GuzzleHttp\ClientInterface
     */
    public function getHttp()
    {
        if ($this->http instanceof ClientInterface) {
            return $this->http;
        }

        $this->http = new HttpClient();

        return $this->http;
    }

    /**
     * @param \GuzzleHttp\ClientInterface $http
     * @return void
     */
    public function setHttp($http)
    {
        $this->http = $http;
    }

    /**
     * @param string $method
     * @param string $uri
     * @param array $options
     * @return array
     * @throws \PcbFlow\Kingdee\Exceptions\ApiException
     */
    public function sendHttp($method, $uri, $options = [])
    {
        try {
            $response = $this->getHttp()->request($method, $uri, $options);
        } catch (GuzzleException $e) {
            throw new ApiException($e->getMessage(), 0, $e);
        }

        return json_decode($response->getBody()->getContents(), true);
    }

    /**
     * @param string $username
     * @return string
     * @throws \PcbFlow\Kingdee\Exceptions\ApiException
     */
    public function ensureSessionId($username)
    {
        $cacheKey = $this->getSessionCacheKey($username);

        $sessionId = $this->getCache()->get($cacheKey);

        if ($sessionId) {
            return $sessionId;
        }

        $sessionId = $this->fetchSessionId($username);

        $sessionLifetime = $this->getConfig('session_lifetime') - 30;

        $this->getCache()->set($cacheKey, $sessionId, $sessionLifetime);

        return $sessionId;
    }

    /**
     * @param string $username
     * @return string
     */
    protected function getSessionCacheKey($username)
    {
        $prefix = $this->getConfig('cache_prefix');

        $appId = $this->getConfig('app_id');

        return $prefix . 'kingdee_session.' . md5(json_encode([$appId, $username]));
    }

    /**
     * @param string $username
     * @return string
     * @throws \PcbFlow\Kingdee\Exceptions\ApiException
     */
    protected function fetchSessionId($username)
    {
        $responseData = $this->sendHttp('POST', ApiPath::LOGIN, [
            'base_uri' => $this->getConfig('base_uri'),
            'headers' => [
                'Content-Type' => 'application/json',
                'Accept' => 'application/json',
            ],
            'json' => [
                'format' => 1,
                'useragent' => 'ApiClient',
                'parameters' => [
                    $this->getConfig('db_id'),
                    $username,
                    $this->getConfig('app_id'),
                    $this->getConfig('app_secret'),
                    $this->getConfig('locale_id'),
                ],
                'timestamp' => date('Y-m-d H:i:s'),
                'v' => $this->getConfig('version'),
            ]
        ]);

        if (!isset($responseData['LoginResultType'])) {
            throw new ApiException('Invalid response format: LoginResultType is missing');
        }

        if ($responseData['LoginResultType'] !== 1) {
            throw new ApiException($responseData['Message'] ?? 'Fetch session id failed');
        }

        if (!isset($responseData['KDSVCSessionId'])) {
            throw new ApiException('Invalid response format: KDSVCSessionId is missing');
        }

        return $responseData['KDSVCSessionId'];
    }
}
