<?php

namespace PcbFlow\Kingdee\Results;

use PcbFlow\Kingdee\Contracts\Arrayable;

class SuccessResult implements Arrayable
{
    /**
     * @var array
     */
    protected $items = [];

    /**
     * @param array $results
     */
    public function __construct($results)
    {
        if (!empty($results)) {
            $this->items = $this->mapSuccessResults($results);
        }
    }

    /**
     * @param array $results
     * @return array
     */
    protected function mapSuccessResults($results)
    {
        return array_map(function ($result) {
            return [
                'id' => $result['Id'] ?? 0,
                'number' => $result['Number'] ?? '',
            ];
        }, $results);
    }

    /**
     * @return bool
     */
    public function isEmpty()
    {
        return empty($this->items);
    }

    /**
     * @return bool
     */
    public function hasEmptyId()
    {
        return array_reduce($this->items, function ($carry, $item) {
            return $carry || empty($item['id'] ?? 0);
        }, false);
    }

    /**
     * @return bool
     */
    public function hasEmptyNumber()
    {
        return array_reduce($this->items, function ($carry, $item) {
            return $carry || empty($item['number'] ?? '');
        }, false);
    }

    /**
     * @return array
     */
    public function getIds()
    {
        return array_map(function ($item) {
            return $item['id'];
        }, $this->items);
    }

    /**
     * @return array
     */
    public function getNumbers()
    {
        return array_map(function ($item) {
            return $item['number'];
        }, $this->items);
    }

    /**
     * @return array
     */
    public function toArray()
    {
        return $this->items;
    }
}
