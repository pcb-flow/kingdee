<?php

namespace PcbFlow\Kingdee\Flex;

class StockLocation
{
    /**
     * @var string
     */
    protected static $prefix = 'stock_loc';

    /**
     * @var array
     */
    protected static $flexIds = [
        'f100001',
        'f100002',
    ];

    /**
     * @param string $string
     * @return array
     */
    public static function parseNumberToArray($string)
    {
        return static::parseToArray($string, 'number');
    }

    /**
     * @param string $string
     * @return array
     */
    public static function parseNameToArray($string)
    {
        return static::parseToArray($string, 'name');
    }

    /**
     * @param string $string
     * @param string $suffix
     * @return array
     */
    protected static function parseToArray($string, $suffix)
    {
        if (empty($string)) {
            return [];
        }

        $values = explode('.', $string);

        return array_reduce(static::$flexIds, function ($result, $flexId) use (&$values, $suffix) {
            $key = static::buildKey($flexId, $suffix);
            $value = array_shift($values) ?? null;
            $result[$key] = $value;
            return $result;
        }, []);
    }

    /**
     * @param array $array
     * @return string
     */
    public static function formatNameFromArray($array)
    {
        return static::formatFromArray($array, 'name');
    }

    /**
     * @param array $array
     * @return string
     */
    public static function formatNumberFromArray($array)
    {
        return static::formatFromArray($array, 'number');
    }

    /**
     * @param array $array
     * @param string $suffix
     * @return string
     */
    protected static function formatFromArray($array, $suffix)
    {
        $values = array_map(function ($flexId) use ($array, $suffix) {
            $key = static::buildKey($flexId, $suffix);
            return $array[$key] ?? null;
        }, static::$flexIds);

        return implode('.', array_filter($values));
    }

    /**
     * @param string $flexId
     * @param string $suffix
     * @return string
     */
    protected static function buildKey($flexId, $suffix = 'number')
    {
        return static::$prefix . '_' . $flexId . '_' . $suffix;
    }
}
