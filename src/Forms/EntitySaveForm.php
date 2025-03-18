<?php

namespace PcbFlow\Kingdee\Forms;

use PcbFlow\Kingdee\Concerns\MapsFieldData;
use PcbFlow\Kingdee\Contracts\Form;

class EntitySaveForm implements Form
{
    use MapsFieldData;

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
        $fieldMappings = $this->model->getFieldMappings();

        $modelData = $this->mapFieldData($this->data, $fieldMappings);

        return ['Model' => $modelData];
    }
}
