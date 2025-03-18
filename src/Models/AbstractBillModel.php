<?php

namespace PcbFlow\Kingdee\Models;

abstract class AbstractBillModel extends AbstractModel
{
    /**
     * @return string
     */
    public function getEntryIdName()
    {
        return 'entry_id';
    }

    /**
     * @return array
     */
    abstract public function getBillMappings();

    /**
     * @return array
     */
    abstract public function getEntryMappings();

    /**
     * @return array
     */
    public function getMappings()
    {
        return array_merge(
            $this->getBillMappings(),
            $this->getEntryMappings()
        );
    }

    /**
     * @return array
     */
    public function getBillAttributes()
    {
        $mappings = $this->getBillMappings();

        return array_column($mappings, 'attribute');
    }

    /**
     * @return array
     */
    public function getEntryAttributes()
    {
        $mappings = $this->getEntryMappings();

        return array_column($mappings, 'attribute');
    }

    /**
     * @return array
     */
    public function getBillColumnMappings()
    {
        $mappings = $this->getBillMappings();

        return array_column($mappings, 'column', 'attribute');
    }

    /**
     * @return array
     */
    public function getEntryColumnMappings()
    {
        $mappings = $this->getEntryMappings();

        return array_column($mappings, 'column', 'attribute');
    }

    /**
     * @return array
     */
    public function getBillFieldMappings()
    {
        $mappings = $this->getBillMappings();

        return array_column($mappings, 'field', 'attribute');
    }

    /**
     * @return array
     */
    public function getEntryFieldMappings()
    {
        $mappings = $this->getEntryMappings();

        return array_column($mappings, 'field', 'attribute');
    }
}
