<?php

namespace PcbFlow\Kingdee\Models;

use PcbFlow\Kingdee\Contracts\BillModel;

class SalesOrder extends AbstractBillModel implements BillModel
{
    const FORM_NAME = 'SAL_SaleOrder';
    const ENTRY_NAME = 'FSaleOrderEntry';

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
            'attribute' => 'document_status',
            'column' => 'FDocumentStatus',
            'field' => 'FDocumentStatus',
            'comment' => '单据状态',
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
            'column' => 'FCustId',
            'field' => 'FCustId',
            'comment' => '客户',
        ],
        [
            'attribute' => 'customer_number',
            'column' => 'FCustId.FNumber',
            'field' => 'FCustId.FNumber',
            'comment' => '客户',
        ],
        [
            'attribute' => 'customer_name',
            'column' => 'FCustId.FName',
            'field' => 'FCustId.FName',
            'comment' => '客户',
        ],
        [
            'attribute' => 'receive_id',
            'column' => 'FReceiveId',
            'field' => 'FReceiveId',
            'comment' => '收货方',
        ],
        [
            'attribute' => 'receive_number',
            'column' => 'FReceiveId.FNumber',
            'field' => 'FReceiveId.FNumber',
            'comment' => '收货方',
        ],
        [
            'attribute' => 'receive_name',
            'column' => 'FReceiveId.FName',
            'field' => 'FReceiveId.FName',
            'comment' => '收货方',
        ],
        [
            'attribute' => 'head_loc_id',
            'column' => 'FHeadLocId',
            'field' => 'FHeadLocId',
            'comment' => '交货地点',
        ],
        [
            'attribute' => 'head_loc_number',
            'column' => 'FHeadLocId.FNumber',
            'field' => 'FHeadLocId.FNumber',
            'comment' => '交货地点',
        ],
        [
            'attribute' => 'head_loc_name',
            'column' => 'FHeadLocId.FName',
            'field' => 'FHeadLocId.FName',
            'comment' => '交货地点',
        ],
        [
            'attribute' => 'sales_man_id',
            'column' => 'FSalerId',
            'field' => 'FSalerId',
            'comment' => '销售员',
        ],
        [
            'attribute' => 'sales_man_number',
            'column' => 'FSalerId.FNumber',
            'field' => 'FSalerId.FNumber',
            'comment' => '销售员',
        ],
        [
            'attribute' => 'sales_man_name',
            'column' => 'FSalerId.FName',
            'field' => 'FSalerId.FName',
            'comment' => '销售员',
        ],
        [
            'attribute' => 'receive_address',
            'column' => 'FReceiveAddress',
            'field' => 'FReceiveAddress',
            'comment' => '收货方地址',
        ],
        [
            'attribute' => 'link_man',
            'column' => 'FLinkMan',
            'field' => 'FLinkMan',
            'comment' => '收货人姓名',
        ],
        [
            'attribute' => 'link_phone',
            'column' => 'FLinkPhone',
            'field' => 'FLinkPhone',
            'comment' => '收货人电话',
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
        [
            'attribute' => 'note',
            'column' => 'FNote',
            'field' => 'FNote',
            'comment' => '备注',
        ],
    ];

    /**
     * @var array
     */
    protected static $entryMappings = [
        [
            'attribute' => 'entry_id',
            'column' => 'FSaleOrderEntry_FEntryId',
            'field' => 'FEntryId',
            'comment' => '分录内码',
        ],
        [
            'attribute' => 'seq',
            'column' => 'FSaleOrderEntry_FSeq',
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
            'comment' => '销售数量',
        ],
        [
            'attribute' => 'base_unit_qty',
            'column' => 'FBaseUnitQty',
            'field' => 'FBaseUnitQty',
            'comment' => '基本单位销售数量',
        ],
        [
            'attribute' => 'delivery_date',
            'column' => 'FDeliveryDate',
            'field' => 'FDeliveryDate',
            'comment' => '要货日期',
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
            'attribute' => 'delivery_status',
            'column' => 'FDeliveryStatus',
            'field' => 'FDeliveryStatus',
            'comment' => '发货状态',
        ],
        [
            'attribute' => 'can_out_qty',
            'column' => 'FCanOutQty',
            'field' => 'FCanOutQty',
            'comment' => '可出数量',
        ],
        [
            'attribute' => 'base_can_out_qty',
            'column' => 'FBaseCanOutQty',
            'field' => 'FBaseCanOutQty',
            'comment' => '基本单位可出数量',
        ],
        [
            'attribute' => 'remain_out_qty',
            'column' => 'FRemainOutQty',
            'field' => 'FRemainOutQty',
            'comment' => '剩余未出数量',
        ],
        [
            'attribute' => 'base_remain_out_qty',
            'column' => 'FBaseRemainOutQty',
            'field' => 'FBaseRemainOutQty',
            'comment' => '基本单位剩余未出数量',
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
