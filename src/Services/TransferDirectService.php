<?php

namespace PcbFlow\Kingdee\Services;

use PcbFlow\Kingdee\Models\TransferDirect;

class TransferDirectService extends AbstractBillService
{
    /**
     * @return \PcbFlow\Kingdee\Models\TransferDirect
     */
    protected function newBillModel()
    {
        return new TransferDirect();
    }
}
