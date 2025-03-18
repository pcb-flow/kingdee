<?php

namespace PcbFlow\Kingdee\Models;

use PcbFlow\Kingdee\Contracts\BillModel;

class Miscellaneous extends AbstractBillModel implements BillModel
{
    const FORM_NAME = 'STK_Miscellaneous';
    const ENTRY_NAME = 'FEntity';

    /**
     * @var array
     */
    protected static $billMappings = [
        [
            'attribute' => 'id',
            'column' => 'FId',
            'field' => 'FId',
            'comment' => '单据内码',
        ],
        [
            'attribute' => 'bill_number',
            'column' => 'FBillNo',
            'field' => 'FBillNo',
            'comment' => '单据编号',
        ],
        [
            'attribute' => 'bill_type_id',
            'column' => 'FBillTypeId',
            'field' => 'FBillTypeId',
            'comment' => '单据类型',
        ],
        [
            'attribute' => 'bill_type_number',
            'column' => 'FBillTypeId.FNumber',
            'field' => 'FBillTypeId.FNumber',
            'comment' => '单据类型',
        ],
        [
            'attribute' => 'bill_type_name',
            'column' => 'FBillTypeId.FName',
            'field' => 'FBillTypeId.FName',
            'comment' => '单据类型',
        ],
        [
            'attribute' => 'stock_org_id',
            'column' => 'FStockOrgId',
            'field' => 'FStockOrgId',
            'comment' => '库存组织',
        ],
        [
            'attribute' => 'stock_org_number',
            'column' => 'FStockOrgId.FNumber',
            'field' => 'FStockOrgId.FNumber',
            'comment' => '库存组织',
        ],
        [
            'attribute' => 'stock_org_name',
            'column' => 'FStockOrgId.FName',
            'field' => 'FStockOrgId.FName',
            'comment' => '库存组织',
        ],
        [
            'attribute' => 'stock_direct',
            'column' => 'FStockDirect',
            'field' => 'FStockDirect',
            'comment' => '库存方向',
        ],
        [
            'attribute' => 'date',
            'column' => 'FDate',
            'field' => 'FDate',
            'comment' => '日期',
        ],
        [
            'attribute' => 'owner_type_id_head',
            'column' => 'FOwnerTypeIdHead',
            'field' => 'FOwnerTypeIdHead',
            'comment' => '货主类型',
        ],
        [
            'attribute' => 'owner_id_head',
            'column' => 'FOwnerIdHead',
            'field' => 'FOwnerIdHead',
            'comment' => '货主',
        ],
        [
            'attribute' => 'owner_number_head',
            'column' => 'FOwnerIdHead.FNumber',
            'field' => 'FOwnerIdHead.FNumber',
            'comment' => '货主',
        ],
        [
            'attribute' => 'owner_name_head',
            'column' => 'FOwnerIdHead.FName',
            'field' => 'FOwnerIdHead.FName',
            'comment' => '货主',
        ],
        [
            'attribute' => 'document_status',
            'column' => 'FDocumentStatus',
            'field' => 'FDocumentStatus',
            'comment' => '单据状态',
        ],
        [
            'attribute' => 'note',
            'column' => 'FNote',
            'field' => 'FNote',
            'comment' => '备注',
        ],
        [
            'attribute' => 'creator_id',
            'column' => 'FCreatorId',
            'field' => 'FCreatorId',
            'comment' => '创建人',
        ],
        [
            'attribute' => 'creator_name',
            'column' => 'FCreatorId.FName',
            'field' => 'FCreatorId.FName',
            'comment' => '创建人',
        ],
        [
            'attribute' => 'create_date',
            'column' => 'FCreateDate',
            'field' => 'FCreateDate',
            'comment' => '创建日期',
        ],
    ];

    /**
     * @var array
     */
    protected static $entryMappings = [
        [
            'attribute' => 'entry_id',
            'column' => 'FEntity_FEntryId',
            'field' => 'FEntryId',
            'comment' => '分录内码',
        ],
        [
            'attribute' => 'seq',
            'column' => 'FEntity_FSeq',
            'field' => 'FSeq',
            'comment' => '行号',
        ],
        [
            'attribute' => 'material_id',
            'column' => 'FMaterialId',
            'field' => 'FMaterialId',
            'comment' => '物料',
        ],
        [
            'attribute' => 'material_number',
            'column' => 'FMaterialId.FNumber',
            'field' => 'FMaterialId.FNumber',
            'comment' => '物料',
        ],
        [
            'attribute' => 'material_name',
            'column' => 'FMaterialId.FName',
            'field' => 'FMaterialId.FName',
            'comment' => '物料',
        ],
        [
            'attribute' => 'material_spec',
            'column' => 'FMaterialId.FSpecification',
            'field' => 'FMaterialId.FSpecification',
            'comment' => '规格',
        ],
        [
            'attribute' => 'unit_id',
            'column' => 'FUnitId',
            'field' => 'FUnitId',
            'comment' => '单位',
        ],
        [
            'attribute' => 'unit_number',
            'column' => 'FUnitId.FNumber',
            'field' => 'FUnitId.FNumber',
            'comment' => '单位',
        ],
        [
            'attribute' => 'unit_name',
            'column' => 'FUnitId.FName',
            'field' => 'FUnitId.FName',
            'comment' => '单位',
        ],
        [
            'attribute' => 'qty',
            'column' => 'FQty',
            'field' => 'FQty',
            'comment' => '实收数量',
        ],
        [
            'attribute' => 'stock_id',
            'column' => 'FStockId',
            'field' => 'FStockId',
            'comment' => '收货仓库',
        ],
        [
            'attribute' => 'stock_number',
            'column' => 'FStockId.FNumber',
            'field' => 'FStockId.FNumber',
            'comment' => '收货仓库',
        ],
        [
            'attribute' => 'stock_name',
            'column' => 'FStockId.FName',
            'field' => 'FStockId.FName',
            'comment' => '收货仓库',
        ],
        [
            'attribute' => 'stock_loc_id',
            'column' => 'FStockLocId',
            'field' => 'FStockLocId',
            'comment' => '收货仓位',
        ],
        [
            'attribute' => 'stock_loc_f100001',
            'column' => 'FStockLocId.FF100001',
            'field' => 'FStockLocId.FStockLocId__FF100001',
            'comment' => '收货仓位',
        ],
        [
            'attribute' => 'stock_loc_f100001_number',
            'column' => 'FStockLocId.FF100001.FNumber',
            'field' => 'FStockLocId.FStockLocId__FF100001.FNumber',
            'comment' => '收货仓位',
        ],
        [
            'attribute' => 'stock_loc_f100001_name',
            'column' => 'FStockLocId.FF100001.FName',
            'field' => 'FStockLocId.FStockLocId__FF100001.FName',
            'comment' => '收货仓位',
        ],
        [
            'attribute' => 'stock_loc_f100002',
            'column' => 'FStockLocId.FF100002',
            'field' => 'FStockLocId.FStockLocId__FF100002',
            'comment' => '收货仓位',
        ],
        [
            'attribute' => 'stock_loc_f100002_number',
            'column' => 'FStockLocId.FF100002.FNumber',
            'field' => 'FStockLocId.FStockLocId__FF100002.FNumber',
            'comment' => '收货仓位',
        ],
        [
            'attribute' => 'stock_loc_f100002_name',
            'column' => 'FStockLocId.FF100002.FName',
            'field' => 'FStockLocId.FStockLocId__FF100002.FName',
            'comment' => '收货仓位',
        ],
        [
            'attribute' => 'lot_id',
            'column' => 'FLot',
            'field' => 'FLot',
            'comment' => '批号',
        ],
        [
            'attribute' => 'lot_number',
            'column' => 'FLot.FNumber',
            'field' => 'FLot.FNumber',
            'comment' => '批号',
        ],
        [
            'attribute' => 'lot_name',
            'column' => 'FLot.FName',
            'field' => 'FLot.FName',
            'comment' => '批号',
        ],
        [
            'attribute' => 'src_bill_type',
            'column' => 'FSrcBillTypeId',
            'field' => 'FSrcBillTypeId',
            'comment' => '源单类型',
        ],
        [
            'attribute' => 'src_bill_number',
            'column' => 'FSrcBillNo',
            'field' => 'FSrcBillNo',
            'comment' => '源单单号',
        ],
        [
            'attribute' => 'owner_type_id',
            'column' => 'FOwnerTypeId',
            'field' => 'FOwnerTypeId',
            'comment' => '货主类型',
        ],
        [
            'attribute' => 'owner_id',
            'column' => 'FOwnerId',
            'field' => 'FOwnerId',
            'comment' => '货主',
        ],
        [
            'attribute' => 'owner_number',
            'column' => 'FOwnerId.FNumber',
            'field' => 'FOwnerId.FNumber',
            'comment' => '货主',
        ],
        [
            'attribute' => 'owner_name',
            'column' => 'FOwnerId.FName',
            'field' => 'FOwnerId.FName',
            'comment' => '货主',
        ],
        [
            'attribute' => 'keeper_type_id',
            'column' => 'FKeeperTypeId',
            'field' => 'FKeeperTypeId',
            'comment' => '保管者类型',
        ],
        [
            'attribute' => 'keeper_id',
            'column' => 'FKeeperId',
            'field' => 'FKeeperId',
            'comment' => '保管者',
        ],
        [
            'attribute' => 'keeper_number',
            'column' => 'FKeeperId.FNumber',
            'field' => 'FKeeperId.FNumber',
            'comment' => '保管者',
        ],
        [
            'attribute' => 'keeper_name',
            'column' => 'FKeeperId.FName',
            'field' => 'FKeeperId.FName',
            'comment' => '保管者',
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
     * @return string
     */
    public function getEntryName()
    {
        return self::ENTRY_NAME;
    }

    /**
     * @return array
     */
    public function getBillMappings()
    {
        return static::$billMappings;
    }

    /**
     * @return array
     */
    public function getEntryMappings()
    {
        return static::$entryMappings;
    }
}
