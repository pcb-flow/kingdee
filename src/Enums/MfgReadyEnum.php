<?php

namespace PcbFlow\Kingdee\Enums;

class MfgReadyEnum
{
    const NO = 'A';
    const YES = 'B';

    /**
     * @param string $value
     * @return string
     */
    public static function getDescription($value)
    {
        switch ($value) {
            case self::YES:
                return '符合';
            case self::NO:
                return '不符';
            default:
                return '未知';
        }
    }
}
