<?php

namespace PcbFlow\Kingdee\Services;

use PcbFlow\Kingdee\Models\MisDelivery;

class MisDeliveryService extends AbstractBillService
{
    /**
     * @return \PcbFlow\Kingdee\Models\MisDelivery
     */
    protected function newBillModel()
    {
        return new MisDelivery();
    }
}
