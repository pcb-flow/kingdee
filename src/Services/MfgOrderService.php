<?php

namespace PcbFlow\Kingdee\Services;

use PcbFlow\Kingdee\Models\MfgOrder;

class MfgOrderService extends AbstractBillService
{
    /**
     * @return \PcbFlow\Kingdee\Models\MfgOrder
     */
    protected function newBillModel()
    {
        return new MfgOrder();
    }
}
