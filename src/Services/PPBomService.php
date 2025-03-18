<?php

namespace PcbFlow\Kingdee\Services;

use PcbFlow\Kingdee\Models\PPBom;

class PPBomService extends AbstractBillService
{
    /**
     * @return \PcbFlow\Kingdee\Models\PPBom
     */
    protected function newBillModel()
    {
        return new PPBom();
    }
}
