<?php

namespace PcbFlow\Kingdee\Services;

use PcbFlow\Kingdee\Models\Customer;

class CustomerService extends AbstractEntityService
{
    /**
     * @return \PcbFlow\Kingdee\Models\Customer
     */
    protected function newModel()
    {
        return new Customer();
    }
}
