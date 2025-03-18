<?php

namespace PcbFlow\Kingdee\Services;

use PcbFlow\Kingdee\Models\DeliveryNotice;

class DeliveryNoticeService extends AbstractBillService
{
    /**
     * @return \PcbFlow\Kingdee\Models\DeliveryNotice
     */
    protected function newBillModel()
    {
        return new DeliveryNotice();
    }
}
