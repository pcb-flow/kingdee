<?php

namespace PcbFlow\Kingdee\Results;

abstract class AbstractPaginator
{
    /**
     * @var array
     */
    protected $items = [];

    /**
     * @var int
     */
    protected $perPage;

    /**
     * @var int
     */
    protected $page;

    /**
     * @var int
     */
    protected $total;

    /**
     * @return array
     */
    public function getItems()
    {
        return $this->items;
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
    public function getPage()
    {
        return $this->page;
    }

    /**
     * @return int
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * @return array
     */
    public function toArray()
    {
        return [
            'data' => $this->getItems(),
            'per_page' => $this->getPerPage(),
            'page' => $this->getPage(),
            'total' => $this->getTotal(),
        ];
    }
}
