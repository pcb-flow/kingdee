<?php

namespace PcbFlow\Kingdee\Contracts;

interface Model
{
    /**
     * @return string
     */
    public function getFormName();

    /**
     * @return string
     */
    public function getIdName();

    /**
     * @return bool
     */
    public function isIntId();

    /**
     * @return array
     */
    public function getAttributes();

    /**
     * @return array
     */
    public function getColumnMappings();

    /**
     * @return array
     */
    public function getFieldMappings();
}
