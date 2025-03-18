<?php

namespace PcbFlow\Kingdee\Models;

use PcbFlow\Kingdee\Contracts\BillModel;

class MfgOrder extends AbstractBillModel implements BillModel
{
    const FORM_NAME = 'PRD_MO';
    const ENTRY_NAME = 'FTreeEntity';

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
            'attribute' => 'prd_org_id',
            'column' => 'FPrdOrgId',
            'field' => 'FPrdOrgId',
            'comment' => '生产组织',
        ],
        [
            'attribute' => 'prd_org_number',
            'column' => 'FPrdOrgId.FNumber',
            'field' => 'FPrdOrgId.FNumber',
            'comment' => '生产组织',
        ],
        [
            'attribute' => 'prd_org_name',
            'column' => 'FPrdOrgId.FName',
            'field' => 'FPrdOrgId.FName',
            'comment' => '生产组织',
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
            'attribute' => 'is_rework',
            'column' => 'FIsRework',
            'field' => 'FIsRework',
            'comment' => '是否返工',
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
        [
            'attribute' => 'customer_name',
            'column' => 'F_ORA_MulLangText',
            'field' => 'F_ORA_MulLangText',
            'comment' => '客户名称',
        ],
        [
            'attribute' => 'salesman_name',
            'column' => 'F_ORA_MulLangText1',
            'field' => 'F_ORA_MulLangText1',
            'comment' => '销售员名称',
        ],
        [
            'attribute' => 'kitting_remark',
            'column' => 'F_ORA_Remarks',
            'field' => 'F_ORA_Remarks',
            'comment' => '齐套备注',
        ],
    ];

    /**
     * @var array
     */
    protected static $entryMappings = [
        [
            'attribute' => 'entry_id',
            'column' => 'FTreeEntity_FEntryId',
            'field' => 'FEntryId',
            'comment' => '分录内码',
        ],
        [
            'attribute' => 'seq',
            'column' => 'FTreeEntity_FSeq',
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
            'attribute' => 'status',
            'column' => 'FStatus',
            'field' => 'FStatus',
            'comment' => '业务状态',
        ],
        [
            'attribute' => 'sales_order_number',
            'column' => 'FSaleOrderNo',
            'field' => 'FSaleOrderNo',
            'comment' => '需求单据',
        ],
        [
            'attribute' => 'sales_order_seq',
            'column' => 'FSaleOrderEntrySeq',
            'field' => 'FSaleOrderEntrySeq',
            'comment' => '需求单据行号',
        ],
        [
            'attribute' => 'schedule_status',
            'column' => 'FScheduleStatus',
            'field' => 'FScheduleStatus',
            'comment' => '排产状态',
        ],
        [
            'attribute' => 'pick_mtrl_status',
            'column' => 'FPickMtrlStatus',
            'field' => 'FPickMtrlStatus',
            'comment' => '领料状态',
        ],
        [
            'attribute' => 'sourcing_options',
            'column' => 'F_ORA_Combo',
            'field' => 'F_ORA_Combo',
            'comment' => '供料方式',
        ],
        [
            'attribute' => 'ready_status',
            'column' => 'FBillStatus1',
            'field' => 'FBillStatus1',
            'comment' => '符合投产状态',
        ],
        [
            'attribute' => 'kitting_status',
            'column' => 'FBillStatus3',
            'field' => 'FBillStatus3',
            'comment' => '物料齐套状态',
        ],
        [
            'attribute' => 'smt_start_qty',
            'column' => 'F_ORA_Qty',
            'field' => 'F_ORA_Qty',
            'comment' => 'SMT开工数量',
        ],
        [
            'attribute' => 'smt_test_qty',
            'column' => 'F_ORA_Qty1',
            'field' => 'F_ORA_Qty1',
            'comment' => 'SMT检测数量',
        ],
        [
            'attribute' => 'smt_end_qty',
            'column' => 'F_ORA_Qty2',
            'field' => 'F_ORA_Qty2',
            'comment' => 'SMT结束数量',
        ],
        [
            'attribute' => 'dip_start_qty',
            'column' => 'F_ORA_Qty3',
            'field' => 'F_ORA_Qty3',
            'comment' => 'DIP开工数量',
        ],
        [
            'attribute' => 'pkg_start_qty',
            'column' => 'F_ORA_Qty4',
            'field' => 'F_ORA_Qty4',
            'comment' => '包装接收数量',
        ],
        [
            'attribute' => 'defect_qty',
            'column' => 'F_ORA_Qty5',
            'field' => 'F_ORA_Qty5',
            'comment' => '不良数量',
        ],
        [
            'attribute' => 'fail_qty',
            'column' => 'F_ORA_Qty6',
            'field' => 'F_ORA_Qty6',
            'comment' => '报废数量',
        ],
        [
            'attribute' => 'ready_date',
            'column' => 'F_ORA_Datetime',
            'field' => 'F_ORA_Datetime',
            'comment' => '符合投产时间',
        ],
        [
            'attribute' => 'smt_count',
            'column' => 'F_ORA_BaseProperty2',
            'field' => 'F_ORA_BaseProperty2',
            'comment' => 'SMT焊点数',
        ],
        [
            'attribute' => 'dip_count',
            'column' => 'F_ORA_BaseProperty3',
            'field' => 'F_ORA_BaseProperty3',
            'comment' => 'DIP焊点数',
        ],
        [
            'attribute' => 'smt_start_date',
            'column' => 'F_ORA_Datetime2',
            'field' => 'F_ORA_Datetime2',
            'comment' => 'SMT开工时间',
        ],
        [
            'attribute' => 'smt_test_date',
            'column' => 'F_ORA_Datetime3',
            'field' => 'F_ORA_Datetime3',
            'comment' => 'SMT检测时间',
        ],
        [
            'attribute' => 'smt_end_date',
            'column' => 'F_ORA_Datetime6',
            'field' => 'F_ORA_Datetime6',
            'comment' => 'SMT结束时间',
        ],
        [
            'attribute' => 'dip_start_date',
            'column' => 'F_ORA_Datetime1',
            'field' => 'F_ORA_Datetime1',
            'comment' => 'DIP开工时间',
        ],
        [
            'attribute' => 'pkg_start_date',
            'column' => 'F_ORA_Datetime4',
            'field' => 'F_ORA_Datetime4',
            'comment' => '包装接收时间',
        ],
        [
            'attribute' => 'delivery_date',
            'column' => 'F_ORA_Datetime5',
            'field' => 'F_ORA_Datetime5',
            'comment' => '要货日期',
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
