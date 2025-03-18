<?php

namespace PcbFlow\Kingdee\Services;

use PcbFlow\Kingdee\Models\PickMtrl;

class PickMtrlService extends AbstractBillService
{
    /**
     * @return \PcbFlow\Kingdee\Models\PickMtrl
     */
    protected function newBillModel()
    {
        return new PickMtrl();
    }
}
