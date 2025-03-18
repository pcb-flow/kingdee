<?php

namespace PcbFlow\Kingdee\Contracts;

interface Paginator
{
    /**
     * @return array
     */
    public function getItems();

    /**
     * @return int
     */
    public function getPerPage();

    /**
     * @return int
     */
    public function getPage();

    /**
     * @return int
     */
    public function getTotal();
}
