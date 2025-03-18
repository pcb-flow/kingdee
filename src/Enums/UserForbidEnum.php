<?php

namespace PcbFlow\Kingdee\Enums;

class UserForbidEnum
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
            case self::NO:
                return '否';
            case self::YES:
                return '是';
            default:
                return '未知';
        }
    }
}
