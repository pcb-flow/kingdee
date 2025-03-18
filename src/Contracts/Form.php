<?php

namespace PcbFlow\Kingdee\Contracts;

interface Form
{
    /**
     * @return string
     */
    public function getFormName();

    /**
     * @return array
     */
    public function getFormData();
}
