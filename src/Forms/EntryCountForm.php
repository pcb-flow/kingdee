<?php

namespace PcbFlow\Kingdee\Forms;

use PcbFlow\Kingdee\Contracts\Form;
use PcbFlow\Kingdee\Query\Criteria;

class EntryCountForm implements Form
{
    /**
     * @var \PcbFlow\Kingdee\Contracts\BillModel
     */
    protected $model;

    /**
     * @var \PcbFlow\Kingdee\Query\Criteria
     */
    protected $criteria;

    /**
     * @param \PcbFlow\Kingdee\Contracts\BillModel $model
     * @param \PcbFlow\Kingdee\Query\Criteria|null $criteria
     */
    public function __construct($model, $criteria)
    {
        $this->model = $model;

        $entryIdName = $this->model->getEntryIdName();

        $this->criteria = Criteria::make($criteria)->addFilterGreater($entryIdName, 0);
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
            'FieldKeys' => 'COUNT(1)',
            'FilterString' => $this->criteria->getFilterString($columnMappings),
            'OrderString' => '',
            'StartRow' => 0,
            'Limit' => 0,
        ];
    }
}
