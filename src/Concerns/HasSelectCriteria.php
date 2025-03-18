<?php

namespace PcbFlow\Kingdee\Concerns;

trait HasSelectCriteria
{
    /**
     * @param array $columnMappings
     * @return string
     */
    public function getSelectString($columnMappings)
    {
        return implode(',', array_values($columnMappings));
    }
}
