<?php

namespace PcbFlow\Kingdee\Services;

use PcbFlow\Kingdee\Models\Inventory;

class InventoryService extends AbstractEntityService
{
    /**
     * @return \PcbFlow\Kingdee\Models\Inventory
     */
    protected function newModel()
    {
        return new Inventory();
    }
}
