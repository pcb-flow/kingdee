<?php

namespace PcbFlow\Kingdee\Enums;

class MfgPickEnum
{
    const PENDING = '1';
    const SEMI_PICKED = '2';
    const PICKED = '3';
    const ULTRA_PICKED = '4';

    /**
     * @param string $value
     * @return string
     */
    public static function getDescription($value)
    {
        switch ($value) {
            case self::PENDING:
                return '未领料';
            case self::SEMI_PICKED:
                return '部分领料';
            case self::PICKED:
                return '全部领料';
            case self::ULTRA_PICKED:
                return '超额领料';
            default:
                return '未知';
        }
    }
}
