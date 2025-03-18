<?php

namespace PcbFlow\Kingdee\Services;

use PcbFlow\Kingdee\Models\ReturnMtrl;

class ReturnMtrlService extends AbstractBillService
{
    /**
     * @return \PcbFlow\Kingdee\Models\ReturnMtrl
     */
    protected function newBillModel()
    {
        return new ReturnMtrl();
    }
}
