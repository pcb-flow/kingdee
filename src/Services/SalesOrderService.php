<?php

namespace PcbFlow\Kingdee\Services;

use PcbFlow\Kingdee\Models\SalesOrder;

class SalesOrderService extends AbstractBillService
{
    /**
     * @return \PcbFlow\Kingdee\Models\SalesOrder
     */
    protected function newBillModel()
    {
        return new SalesOrder();
    }
}
