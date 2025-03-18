<?php

namespace PcbFlow\Kingdee\Models;

use PcbFlow\Kingdee\Contracts\BillModel;

class DeliveryNotice extends AbstractBillModel implements BillModel
{
    const FORM_NAME = 'SAL_DeliveryNotice';
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
            'attribute' => 'date',
            'column' => 'FDate',
            'field' => 'FDate',
            'comment' => '日期',
        ],
        [
            'attribute' => 'sales_org_id',
            'column' => 'FSaleOrgId',
            'field' => 'FSaleOrgId',
            'comment' => '销售组织',
        ],
        [
            'attribute' => 'sales_org_number',
            'column' => 'FSaleOrgId.FNumber',
            'field' => 'FSaleOrgId.FNumber',
            'comment' => '销售组织',
        ],
        [
            'attribute' => 'sales_org_name',
            'column' => 'FSaleOrgId.FName',
            'field' => 'FSaleOrgId.FName',
            'comment' => '销售组织',
        ],
        [
            'attribute' => 'customer_id',
            'column' => 'FCustomerId',
            'field' => 'FCustomerId',
            'comment' => '客户',
        ],
        [
            'attribute' => 'customer_number',
            'column' => 'FCustomerId.FNumber',
            'field' => 'FCustomerId.FNumber',
            'comment' => '客户',
        ],
        [
            'attribute' => 'customer_name',
            'column' => 'FCustomerId.FName',
            'field' => 'FCustomerId.FName',
            'comment' => '客户',
        ],
        [
            'attribute' => 'business_type',
            'column' => 'FBussinessType',
            'field' => 'FBussinessType',
            'comment' => '业务类型',
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
            'comment' => '数量',
        ],
        [
            'attribute' => 'stock_id',
            'column' => 'FStockId',
            'field' => 'FStockId',
            'comment' => '出货仓库',
        ],
        [
            'attribute' => 'stock_number',
            'column' => 'FStockId.FNumber',
            'field' => 'FStockId.FNumber',
            'comment' => '出货仓库',
        ],
        [
            'attribute' => 'stock_name',
            'column' => 'FStockId.FName',
            'field' => 'FStockId.FName',
            'comment' => '出货仓库',
        ],
        [
            'attribute' => 'stock_loc_id',
            'column' => 'FStockLocId',
            'field' => 'FStockLocId',
            'comment' => '出货仓位',
        ],
        [
            'attribute' => 'stock_loc_f100001',
            'column' => 'FStockLocId.FF100001',
            'field' => 'FStockLocId.FStockLocId__FF100001',
            'comment' => '出货仓位',
        ],
        [
            'attribute' => 'stock_loc_f100001_number',
            'column' => 'FStockLocId.FF100001.FNumber',
            'field' => 'FStockLocId.FStockLocId__FF100001.FNumber',
            'comment' => '出货仓位',
        ],
        [
            'attribute' => 'stock_loc_f100001_name',
            'column' => 'FStockLocId.FF100001.FName',
            'field' => 'FStockLocId.FStockLocId__FF100001.FName',
            'comment' => '出货仓位',
        ],
        [
            'attribute' => 'stock_loc_f100002',
            'column' => 'FStockLocId.FF100002',
            'field' => 'FStockLocId.FStockLocId__FF100002',
            'comment' => '出货仓位',
        ],
        [
            'attribute' => 'stock_loc_f100002_number',
            'column' => 'FStockLocId.FF100002.FNumber',
            'field' => 'FStockLocId.FStockLocId__FF100002.FNumber',
            'comment' => '出货仓位',
        ],
        [
            'attribute' => 'stock_loc_f100002_name',
            'column' => 'FStockLocId.FF100002.FName',
            'field' => 'FStockLocId.FStockLocId__FF100002.FName',
            'comment' => '出货仓位',
        ],
        [
            'attribute' => 'bom_id',
            'column' => 'FBomId',
            'field' => 'FBomId',
            'comment' => 'BOM版本',
        ],
        [
            'attribute' => 'bom_number',
            'column' => 'FBomId.FNumber',
            'field' => 'FBomId.FNumber',
            'comment' => 'BOM版本',
        ],
        [
            'attribute' => 'bom_name',
            'column' => 'FBomId.FName',
            'field' => 'FBomId.FName',
            'comment' => 'BOM版本',
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
            'attribute' => 'order_number',
            'column' => 'FOrderNo',
            'field' => 'FOrderNo',
            'comment' => '订单单号',
        ],
        [
            'attribute' => 'order_seq',
            'column' => 'FOrderSeq',
            'field' => 'FOrderSeq',
            'comment' => '订单行号',
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
