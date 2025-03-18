<?php

namespace PcbFlow\Kingdee\Models;

use PcbFlow\Kingdee\Contracts\BillModel;

class ReturnMtrl extends AbstractBillModel implements BillModel
{
    const FORM_NAME = 'PRD_ReturnMtrl';
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
            'column' => 'FBillType',
            'field' => 'FBillType',
            'comment' => '单据类型',
        ],
        [
            'attribute' => 'bill_type_number',
            'column' => 'FBillType.FNumber',
            'field' => 'FBillType.FNumber',
            'comment' => '单据类型',
        ],
        [
            'attribute' => 'bill_type_name',
            'column' => 'FBillType.FName',
            'field' => 'FBillType.FName',
            'comment' => '单据类型',
        ],
        [
            'attribute' => 'date',
            'column' => 'FDate',
            'field' => 'FDate',
            'comment' => '日期',
        ],
        [
            'attribute' => 'document_status',
            'column' => 'FDocumentStatus',
            'field' => 'FDocumentStatus',
            'comment' => '单据状态',
        ],
        [
            'attribute' => 'stock_org_id',
            'column' => 'FStockOrgId',
            'field' => 'FStockOrgId',
            'comment' => '生产组织',
        ],
        [
            'attribute' => 'stock_org_number',
            'column' => 'FStockOrgId.FNumber',
            'field' => 'FStockOrgId.FNumber',
            'comment' => '生产组织',
        ],
        [
            'attribute' => 'stock_org_name',
            'column' => 'FStockOrgId.FName',
            'field' => 'FStockOrgId.FName',
            'comment' => '生产组织',
        ],
        [
            'attribute' => 'note',
            'column' => 'FDescription',
            'field' => 'FDescription',
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
            'attribute' => 'app_qty',
            'column' => 'FAppQty',
            'field' => 'FAppQty',
            'comment' => '申请数量',
        ],
        [
            'attribute' => 'qty',
            'column' => 'FQty',
            'field' => 'FQty',
            'comment' => '实退数量',
        ],
        [
            'attribute' => 'return_type',
            'column' => 'FReturnType',
            'field' => 'FReturnType',
            'comment' => '退料类型',
        ],
        [
            'attribute' => 'stock_id',
            'column' => 'FStockId',
            'field' => 'FStockId',
            'comment' => '仓库',
        ],
        [
            'attribute' => 'stock_number',
            'column' => 'FStockId.FNumber',
            'field' => 'FStockId.FNumber',
            'comment' => '仓库',
        ],
        [
            'attribute' => 'stock_name',
            'column' => 'FStockId.FName',
            'field' => 'FStockId.FName',
            'comment' => '仓库',
        ],
        [
            'attribute' => 'stock_loc_id',
            'column' => 'FStockLocId',
            'field' => 'FStockLocId',
            'comment' => '仓位',
        ],
        [
            'attribute' => 'stock_loc_f100001',
            'column' => 'FStockLocId.FF100001',
            'field' => 'FStockLocId.FStockLocId__FF100001',
            'comment' => '仓位',
        ],
        [
            'attribute' => 'stock_loc_f100001_number',
            'column' => 'FStockLocId.FF100001.FNumber',
            'field' => 'FStockLocId.FStockLocId__FF100001.FNumber',
            'comment' => '仓位',
        ],
        [
            'attribute' => 'stock_loc_f100001_name',
            'column' => 'FStockLocId.FF100001.FName',
            'field' => 'FStockLocId.FStockLocId__FF100001.FName',
            'comment' => '仓位',
        ],
        [
            'attribute' => 'stock_loc_f100002',
            'column' => 'FStockLocId.FF100002',
            'field' => 'FStockLocId.FStockLocId__FF100002',
            'comment' => '仓位',
        ],
        [
            'attribute' => 'stock_loc_f100002_number',
            'column' => 'FStockLocId.FF100002.FNumber',
            'field' => 'FStockLocId.FStockLocId__FF100002.FNumber',
            'comment' => '仓位',
        ],
        [
            'attribute' => 'stock_loc_f100002_name',
            'column' => 'FStockLocId.FF100002.FName',
            'field' => 'FStockLocId.FStockLocId__FF100002.FName',
            'comment' => '仓位',
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
            'column' => 'FSrcBillType',
            'field' => 'FSrcBillType',
            'comment' => '系统源单',
        ],
        [
            'attribute' => 'src_bill_id',
            'column' => 'FEntrySrcInterId',
            'field' => 'FEntrySrcInterId',
            'comment' => '系统源单',
        ],
        [
            'attribute' => 'src_bill_entry_id',
            'column' => 'FEntrySrcEnteryId',
            'field' => 'FEntrySrcEnteryId',
            'comment' => '系统源单',
        ],
        [
            'attribute' => 'src_bill_number',
            'column' => 'FSrcBillNo',
            'field' => 'FSrcBillNo',
            'comment' => '系统源单',
        ],
        [
            'attribute' => 'src_bill_seq',
            'column' => 'FEntrySrcEntrySeq',
            'field' => 'FEntrySrcEntrySeq',
            'comment' => '系统源单',
        ],
        [
            'attribute' => 'ppbom_number',
            'column' => 'FPPBomBillNo',
            'field' => 'FPPBomBillNo',
            'comment' => '用料清单',
        ],
        [
            'attribute' => 'ppbom_entry_id',
            'column' => 'FPPBomEntryId',
            'field' => 'FPPBomEntryId',
            'comment' => '用料清单',
        ],
        [
            'attribute' => 'req_bill_id',
            'column' => 'FReqBillId',
            'field' => 'FReqBillId',
            'comment' => '需求单据',
        ],
        [
            'attribute' => 'req_bill_entry_id',
            'column' => 'FReqEntryId',
            'field' => 'FReqEntryId',
            'comment' => '需求单据',
        ],
        [
            'attribute' => 'req_bill_number',
            'column' => 'FReqBillNo',
            'field' => 'FReqBillNo',
            'comment' => '需求单据',
        ],
        [
            'attribute' => 'req_bill_seq',
            'column' => 'FReqEntrySeq',
            'field' => 'FReqEntrySeq',
            'comment' => '需求单据',
        ],
        [
            'attribute' => 'mfg_order_id',
            'column' => 'FMoId',
            'field' => 'FMoId',
            'comment' => '生产订单',
        ],
        [
            'attribute' => 'mfg_order_entry_id',
            'column' => 'FMoEntryId',
            'field' => 'FMoEntryId',
            'comment' => '生产订单',
        ],
        [
            'attribute' => 'mfg_order_number',
            'column' => 'FMoBillNo',
            'field' => 'FMoBillNo',
            'comment' => '生产订单',
        ],
        [
            'attribute' => 'mfg_order_seq',
            'column' => 'FMoEntrySeq',
            'field' => 'FMoEntrySeq',
            'comment' => '生产订单',
        ],
        [
            'attribute' => 'base_unit_id',
            'column' => 'FBaseUnitId',
            'field' => 'FBaseUnitId',
            'comment' => '单位',
        ],
        [
            'attribute' => 'base_unit_number',
            'column' => 'FBaseUnitId.FNumber',
            'field' => 'FBaseUnitId.FNumber',
            'comment' => '单位',
        ],
        [
            'attribute' => 'base_unit_name',
            'column' => 'FBaseUnitId.FName',
            'field' => 'FBaseUnitId.FName',
            'comment' => '单位',
        ],
        [
            'attribute' => 'base_app_qty',
            'column' => 'FBaseAppQty',
            'field' => 'FBaseAppQty',
            'comment' => '基本单位申请数量',
        ],
        [
            'attribute' => 'base_qty',
            'column' => 'FBaseQty',
            'field' => 'FBaseQty',
            'comment' => '基本单位实退数量',
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
