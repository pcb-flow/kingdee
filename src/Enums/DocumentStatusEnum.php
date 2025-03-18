<?php

namespace PcbFlow\Kingdee\Enums;

class DocumentStatusEnum
{
    const DRAFT = 'Z';
    const CREATED = 'A';
    const WAITING_APPROVAL = 'B';
    const APPROVED = 'C';
    const WAITING_REAPPROVAL = 'D';

    /**
     * @param string $value
     * @return string
     */
    public static function getDescription($value)
    {
        switch ($value) {
            case self::DRAFT:
                return '暂存';
            case self::CREATED:
                return '创建';
            case self::WAITING_APPROVAL:
                return '待审核';
            case self::APPROVED:
                return '已审核';
            case self::WAITING_REAPPROVAL:
                return '重新审核';
            default:
                return '未知';
        }
    }
}
