<?php

namespace PcbFlow\Kingdee\Forms;

use PcbFlow\Kingdee\Contracts\Form;

class DeleteForm implements Form
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
            'Ids' => implode(',', $this->data['ids'] ?? []),
            'Numbers' => $this->data['numbers'] ?? [],
        ];
    }
}
