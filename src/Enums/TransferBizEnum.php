<?php

namespace PcbFlow\Kingdee\Enums;

class TransferBizEnum
{
    const INNER_ORG = 'InnerOrgTransfer';
    const OVER_ORG = 'OverOrgTransfer';

    /**
     * @param string $value
     * @return string
     */
    public static function getDescription($value)
    {
        switch ($value) {
            case self::INNER_ORG:
                return '组织内调拨';
            case self::OVER_ORG:
                return '跨组织调拨';
            default:
                return '未知';
        }
    }
}
