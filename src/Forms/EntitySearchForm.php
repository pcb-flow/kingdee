<?php

namespace PcbFlow\Kingdee\Forms;

use PcbFlow\Kingdee\Contracts\Form;
use PcbFlow\Kingdee\Query\Criteria;

class EntitySearchForm implements Form
{
    /**
     * @var \PcbFlow\Kingdee\Contracts\Model
     */
    protected $model;

    /**
     * @var \PcbFlow\Kingdee\Query\Criteria
     */
    protected $criteria;

    /**
     * @param \PcbFlow\Kingdee\Contracts\Model $model
     * @param \PcbFlow\Kingdee\Query\Criteria|null $criteria
     */
    public function __construct($model, $criteria)
    {
        $this->model = $model;

        $this->criteria = Criteria::make($criteria);
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
        $formName = $this->model->getFormName();

        $columnMappings = $this->model->getColumnMappings();

        return [
            'FormId' => $formName,
            'FieldKeys' => $this->criteria->getSelectString($columnMappings),
            'FilterString' => $this->criteria->getFilterString($columnMappings),
            'OrderString' => $this->criteria->getSortString($columnMappings),
            'StartRow' => $this->criteria->getStartRow(),
            'Limit' => $this->criteria->getLimit(),
        ];
    }
}
