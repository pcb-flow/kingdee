<?php

namespace PcbFlow\Kingdee\Enums;

class MfgStatusEnum
{
    const PLANNED = '1';
    const PLAN_CONFIRMED = '2';
    const SCHEDULED = '3';
    const STARTED = '4';
    const COMPLETED = '5';
    const CLOSED = '6';
    const SETTLED = '7';

    /**
     * @param string $value
     * @return string
     */
    public static function getDescription($value)
    {
        switch ($value) {
            case self::PLANNED:
                return '计划';
            case self::PLAN_CONFIRMED:
                return '计划确认';
            case self::SCHEDULED:
                return '下达';
            case self::STARTED:
                return '开工';
            case self::COMPLETED:
                return '完工';
            case self::CLOSED:
                return '结案';
            case self::SETTLED:
                return '结算';
            default:
                return '未知';
        }
    }
}
