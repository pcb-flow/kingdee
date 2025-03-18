<?php

namespace PcbFlow\Kingdee\Enums;

class TransferDirectEnum
{
    const GENERAL = 'GENERAL';
    const RETURN = 'RETURN';

    /**
     * @param string $value
     * @return string
     */
    public static function getDescription($value)
    {
        switch ($value) {
            case self::GENERAL:
                return '普通';
            case self::RETURN:
                return '退货';
            default:
                return '未知';
        }
    }
}
