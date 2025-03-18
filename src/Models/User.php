<?php

namespace PcbFlow\Kingdee\Models;

use PcbFlow\Kingdee\Contracts\Model;

class User extends AbstractModel implements Model
{
    const FORM_NAME = 'SEC_User';

    /**
     * @var array
     */
    protected static $mappings = [
        [
            'attribute' => 'id',
            'column' => 'FUserId',
            'field' => 'FUserId',
            'comment' => '单据内码',
        ],
        [
            'attribute' => 'name',
            'column' => 'FName',
            'field' => 'FName',
            'comment' => '用户名',
        ],
        [
            'attribute' => 'forbid_status',
            'column' => 'FForbidStatus',
            'field' => 'FForbidStatus',
            'comment' => '禁用状态',
        ],
        [
            'attribute' => 'user_type',
            'column' => 'FUserType',
            'field' => 'FUserType',
            'comment' => '用户类型',
        ],
    ];

    /**
     * @return string
     */
    public function getFormName()
    {
        return self::FORM_NAME;
    }

    /**
     * @return array
     */
    public function getMappings()
    {
        return static::$mappings;
    }
}
