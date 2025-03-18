<?php

namespace PcbFlow\Kingdee\Models;

abstract class AbstractModel
{
    /**
     * @return string
     */
    public function getIdName()
    {
        return 'id';
    }

    /**
     * @return bool
     */
    public function isIntId()
    {
        return true;
    }

    /**
     * @return array
     */
    abstract public function getMappings();

    /**
     * @return array
     */
    public function getAttributes()
    {
        $mappings = $this->getMappings();

        return array_column($mappings, 'attribute');
    }

    /**
     * @return array
     */
    public function getColumnMappings()
    {
        $mappings = $this->getMappings();

        return array_column($mappings, 'column', 'attribute');
    }

    /**
     * @return array
     */
    public function getFieldMappings()
    {
        $mappings = $this->getMappings();

        return array_column($mappings, 'field', 'attribute');
    }
}
