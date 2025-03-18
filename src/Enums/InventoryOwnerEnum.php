<?php

namespace PcbFlow\Kingdee\Enums;

class InventoryOwnerEnum
{
    const OWNERORG = 'BD_OwnerOrg';
    const CUSTOMER = 'BD_Customer';

    /**
     * @param string $value
     * @return string
     */
    public static function getDescription($value)
    {
        switch ($value) {
            case self::OWNERORG:
                return '业务组织';
            case self::CUSTOMER:
                return '客户';
            default:
                return '未知';
        }
    }
}
