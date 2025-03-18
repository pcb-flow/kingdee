<?php

namespace PcbFlow\Kingdee\Enums;

class UserTypeEnum
{
    const INTERNAL = '1';
    const EXTERNAL = '2';

    /**
     * @param string $value
     * @return string
     */
    public static function getDescription($value)
    {
        switch ($value) {
            case self::INTERNAL:
                return '内部';
            case self::EXTERNAL:
                return '外部';
            default:
                return '未知';
        }
    }
}
