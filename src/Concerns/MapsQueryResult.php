<?php

namespace PcbFlow\Kingdee\Concerns;

trait MapsQueryResult
{
    /**
     * @param array $result
     * @param array $attributes
     * @return array
     */
    public function mapQueryResult($result, $attributes)
    {
        $values = array_map(function ($value) {
            return is_string($value) ? trim($value) : $value;
        }, $result);

        return array_combine($attributes, $values);
    }
}
