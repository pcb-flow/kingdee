<?php

namespace PcbFlow\Kingdee\Models;

use PcbFlow\Kingdee\Contracts\Model;

class Customer extends AbstractModel implements Model
{
    const FORM_NAME = 'BD_Customer';

    /**
     * @var array
     */
    protected static $mappings = [
        [
            'attribute' => 'id',
            'column' => 'FCustId',
            'field' => 'FCustId',
            'comment' => '单据内码',
        ],
        [
            'attribute' => 'number',
            'column' => 'FNumber',
            'field' => 'FNumber',
            'comment' => '客户编码',
        ],
        [
            'attribute' => 'name',
            'column' => 'FName',
            'field' => 'FName',
            'comment' => '客户名称',
        ],
        [
            'attribute' => 'create_org_id',
            'column' => 'FCreateOrgId',
            'field' => 'FCreateOrgId',
            'comment' => '创建组织',
        ],
        [
            'attribute' => 'create_org_number',
            'column' => 'FCreateOrgId.FNumber',
            'field' => 'FCreateOrgId.FNumber',
            'comment' => '创建组织',
        ],
        [
            'attribute' => 'create_org_name',
            'column' => 'FCreateOrgId.FName',
            'field' => 'FCreateOrgId.FName',
            'comment' => '创建组织',
        ],
        [
            'attribute' => 'trading_curr_id',
            'column' => 'FTradingCurrId',
            'field' => 'FTradingCurrId',
            'comment' => '结算币别',
        ],
        [
            'attribute' => 'trading_curr_number',
            'column' => 'FTradingCurrId.FNumber',
            'field' => 'FTradingCurrId.FNumber',
            'comment' => '结算币别',
        ],
        [
            'attribute' => 'trading_curr_name',
            'column' => 'FTradingCurrId.FName',
            'field' => 'FTradingCurrId.FName',
            'comment' => '结算币别',
        ],
        [
            'attribute' => 'seller_id',
            'column' => 'FSeller',
            'field' => 'FSeller',
            'comment' => '销售员',
        ],
        [
            'attribute' => 'seller_number',
            'column' => 'FSeller.FNumber',
            'field' => 'FSeller.FNumber',
            'comment' => '销售员',
        ],
        [
            'attribute' => 'seller_name',
            'column' => 'FSeller.FName',
            'field' => 'FSeller.FName',
            'comment' => '销售员',
        ],
        [
            'attribute' => 'settle_type_id',
            'column' => 'FSettleTypeId',
            'field' => 'FSettleTypeId',
            'comment' => '结算方式',
        ],
        [
            'attribute' => 'settle_type_number',
            'column' => 'FSettleTypeId.FNumber',
            'field' => 'FSettleTypeId.FNumber',
            'comment' => '结算方式',
        ],
        [
            'attribute' => 'settle_type_name',
            'column' => 'FSettleTypeId.FName',
            'field' => 'FSettleTypeId.FName',
            'comment' => '结算方式',
        ],
        [
            'attribute' => 'rec_condition_id',
            'column' => 'FRecConditionId',
            'field' => 'FRecConditionId',
            'comment' => '收款条件',
        ],
        [
            'attribute' => 'rec_condition_number',
            'column' => 'FRecConditionId.FNumber',
            'field' => 'FRecConditionId.FNumber',
            'comment' => '收款条件',
        ],
        [
            'attribute' => 'rec_condition_name',
            'column' => 'FRecConditionId.FName',
            'field' => 'FRecConditionId.FName',
            'comment' => '收款条件',
        ],
    ];

    /**
     * @return string
     */
    public function getFormName()
    {
        return self::FORM_NAME;
    }

    /**
     * @return array
     */
    public function getMappings()
    {
        return static::$mappings;
    }
}
