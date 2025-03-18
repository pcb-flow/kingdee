<?php

namespace PcbFlow\Kingdee\Concerns;

trait HasCursorCriteria
{
    /**
     * @var int
     */
    public $startRow = 0;

    /**
     * @var int
     */
    public $limit = 0;

    /**
     * @param int $limit
     * @param int $startRow
     * @return $this
     */
    public function forCursor($limit = 0, $startRow = 0)
    {
        $this->setStartRow($startRow);

        $this->setLimit($limit);

        return $this;
    }

    /**
     * @param int $value
     * @return $this
     */
    public function setStartRow($value)
    {
        $this->startRow = max(0, (int) $value);

        return $this;
    }

    /**
     * @param int $value
     * @return $this
     */
    public function setLimit($value)
    {
        $this->limit = max(0, (int) $value);

        return $this;
    }

    /**
     * @return int
     */
    public function getStartRow()
    {
        return $this->startRow;
    }

    /**
     * @return int
     */
    public function getLimit()
    {
        return $this->limit;
    }
}
