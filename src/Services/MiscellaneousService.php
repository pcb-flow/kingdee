<?php

namespace PcbFlow\Kingdee\Services;

use PcbFlow\Kingdee\Models\Miscellaneous;

class MiscellaneousService extends AbstractBillService
{
    /**
     * @return \PcbFlow\Kingdee\Models\Miscellaneous
     */
    protected function newBillModel()
    {
        return new Miscellaneous();
    }
}
