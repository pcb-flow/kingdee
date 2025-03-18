<?php

namespace PcbFlow\Kingdee\Services;

use PcbFlow\Kingdee\Models\User;

class UserService extends AbstractEntityService
{
    /**
     * @return \PcbFlow\Kingdee\Models\User
     */
    protected function newModel()
    {
        return new User();
    }
}
