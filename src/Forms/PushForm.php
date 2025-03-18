<?php

namespace PcbFlow\Kingdee\Forms;

use PcbFlow\Kingdee\Contracts\Form;

class PushForm implements Form
{
    /**
     * @var \PcbFlow\Kingdee\Contracts\Model
     */
    protected $model;

    /**
     * @var array
     */
    protected $data;

    /**
     * @param \PcbFlow\Kingdee\Contracts\Model $model
     * @param array $data
     */
    public function __construct($model, $data)
    {
        $this->model = $model;

        $this->data = $data;
    }

    /**
     * @return string
     */
    public function getFormName()
    {
        return $this->model->getFormName();
    }

    /**
     * @return array
     */
    public function getFormData()
    {
        return [
            'Ids' => implode(',', $data['ids'] ?? []),
            'Numbers' => $data['numbers'] ?? [],
            'EntryIds' => implode(',', $data['entry_ids'] ?? []),
            'RuleId' => $data['rule_id'] ?? '',
            'TargetBillTypeId' => $data['target_bill_type_id'] ?? '',
            'TargetOrgId' => $data['target_org_id'] ?? 0,
            'TargetFormName' => $data['target_form_id'] ?? '',
            'IsEnableDefaultRule' => $data['is_enable_default_rule'] ?? false,
            'IsDraftWhenSaveFail' => $data['is_draft_when_save_fail'] ?? true,
            'CustomParams' => $data['custom_params'] ?? [],
        ];
    }
}
