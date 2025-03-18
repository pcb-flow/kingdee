<?php

namespace PcbFlow\Kingdee\Enums;

class MfgScheduleEnum
{
    const PENDING = '1';
    const SEMI_SCHEDULED = '2';
    const SCHEDULED = '3';

    /**
     * @param string $value
     * @return string
     */
    public static function getDescription($value)
    {
        switch ($value) {
            case self::PENDING:
                return '未排产';
            case self::SEMI_SCHEDULED:
                return '部分排产';
            case self::SCHEDULED:
                return '全部排产';
            default:
                return '未知';
        }
    }
}
