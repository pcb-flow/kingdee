<?php

namespace PcbFlow\Kingdee\Enums;

class DeliveryStatusEnum
{
    const PENDING = 'A';
    const SEMI_DELIVERED = 'B';
    const DELIVERED = 'C';

    /**
     * @param string $value
     * @return string
     */
    public static function getDescription($value)
    {
        switch ($value) {
            case self::PENDING:
                return '未发货';
            case self::SEMI_DELIVERED:
                return '部分发货';
            case self::DELIVERED:
                return '已发货';
            default:
                return '未知';
        }
    }
}
