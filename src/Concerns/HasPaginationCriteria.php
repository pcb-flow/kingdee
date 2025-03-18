<?php

namespace PcbFlow\Kingdee\Concerns;

trait HasPaginationCriteria
{
    /**
     * @var int
     */
    public $page = 1;

    /**
     * @var int
     */
    public $perPage = 20;

    /**
     * @param int $page
     * @param int $perPage
     * @return $this
     */
    public function forPage($page = 1, $perPage = 20)
    {
        $this->setPage($page);

        $this->setPerPage($perPage);

        return $this;
    }

    /**
     * @param int $value
     * @return $this
     */
    public function setPage($value)
    {
        $this->page = max(0, (int) $value);

        return $this;
    }

    /**
     * @param int $value
     * @return $this
     */
    public function setPerPage($value)
    {
        $this->perPage = max(0, (int) $value);

        return $this;
    }

    /**
     * @return int
     */
    public function getPage()
    {
        return $this->page;
    }

    /**
     * @return int
     */
    public function getPerPage()
    {
        return $this->perPage;
    }

    /**
     * @return int
     */
    public function getOffset()
    {
        return ($this->page - 1) * $this->perPage;
    }
}
