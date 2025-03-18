<?php

namespace PcbFlow\Kingdee\Concerns;

use PcbFlow\Kingdee\Query\SortDirection;

trait HasSortCriteria
{
    /**
     * @var string
     */
    protected $sortBy = '';

    /**
     * @var string
     */
    protected $sortDirection = '';

    /**
     * @param string $attribute
     * @return $this
     */
    public function setSortAsc($attribute)
    {
        $this->sortBy = $attribute;

        $this->sortDirection = SortDirection::ASC;

        return $this;
    }

    /**
     * @param string $attribute
     * @return $this
     */
    public function setSortDesc($attribute)
    {
        $this->sortBy = $attribute;

        $this->sortDirection = SortDirection::DESC;

        return $this;
    }

    /**
     * @param array $columnMappings
     * @return string
     */
    public function getSortString($columnMappings)
    {
        if (!$this->sortBy) {
            return '';
        }

        $column = $columnMappings[$this->sortBy] ?? null;

        if (!$column) {
            return '';
        }

        return "{$column} {$this->sortDirection}";
    }
}
