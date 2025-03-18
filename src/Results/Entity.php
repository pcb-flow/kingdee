<?php

namespace PcbFlow\Kingdee\Results;

use PcbFlow\Kingdee\Concerns\MapsQueryResult;
use PcbFlow\Kingdee\Contracts\Arrayable;

class Entity implements Arrayable
{
    use MapsQueryResult;

    /**
     * @var array
     */
    protected $data = [];

    /**
     * @param \PcbFlow\Kingdee\Contracts\Model $model
     * @param array $results
     */
    public function __construct($model, $results)
    {
        if (!empty($results)) {
            $this->data = $this->mapQueryResult($results[0], $model->getAttributes());
        }
    }

    /**
     * @return bool
     */
    public function isEmpty()
    {
        return empty($this->data);
    }

    /**
     * @return array
     */
    public function toArray()
    {
        return $this->data;
    }

    /**
     * @param string $key
     * @return mixed
     */
    public function __get($key)
    {
        if (isset($this->bill[$key])) {
            return $this->bill[$key];
        }

        return null;
    }
}
