<?php

namespace PcbFlow\Kingdee\Enums;

class ReturnMtrlEnum
{
    const CONFORMING = '1';
    const NON_CONFORMING_INCOMING = '2';
    const NON_CONFORMING_WORK = '3';

    /**
     * @param string $value
     * @return string
     */
    public static function getDescription($value)
    {
        switch ($value) {
            case self::CONFORMING:
                return '良品退料';
            case self::NON_CONFORMING_INCOMING:
                return '来料不良退料';
            case self::NON_CONFORMING_WORK:
                return '作业不良退料';
            default:
                return '未知';
        }
    }
}
