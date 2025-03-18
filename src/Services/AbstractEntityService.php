<?php

namespace PcbFlow\Kingdee\Services;

use PcbFlow\Kingdee\Forms\AuditForm;
use PcbFlow\Kingdee\Forms\DeleteForm;
use PcbFlow\Kingdee\Forms\EntityCountForm;
use PcbFlow\Kingdee\Forms\EntityFindForm;
use PcbFlow\Kingdee\Forms\EntityPaginateForm;
use PcbFlow\Kingdee\Forms\EntitySearchForm;
use PcbFlow\Kingdee\Forms\EntitySaveForm;
use PcbFlow\Kingdee\Forms\SubmitForm;
use PcbFlow\Kingdee\Forms\UnauditForm;
use PcbFlow\Kingdee\Results\Entity;
use PcbFlow\Kingdee\Results\EntityCollection;
use PcbFlow\Kingdee\Results\EntityPaginator;
use PcbFlow\Kingdee\Results\SuccessResult;

abstract class AbstractEntityService extends AbstractService
{
    /**
     * @return \PcbFlow\Kingdee\Contracts\Model
     */
    abstract protected function newModel();

    /**
     * @param \PcbFlow\Kingdee\Query\Criteria|null $criteria
     * @return \PcbFlow\Kingdee\Results\EntityCollection
     * @throws \PcbFlow\Kingdee\Exceptions\ApiException
     */
    public function get($criteria = null)
    {
        $model = $this->newModel();

        $form = new EntitySearchForm($model, $criteria);

        $results = $this->executeQuery($form);

        return new EntityCollection($model, $results);
    }

    /**
     * @param \PcbFlow\Kingdee\Query\Criteria|null $criteria
     * @return \PcbFlow\Kingdee\Results\Entity
     * @throws \PcbFlow\Kingdee\Exceptions\ApiException
     */
    public function find($criteria = null)
    {
        $model = $this->newModel();

        $form = new EntityFindForm($model, $criteria);

        $results = $this->executeQuery($form);

        return new Entity($model, $results);
    }

    /**
     * @param \PcbFlow\Kingdee\Query\Criteria|null $criteria
     * @return \PcbFlow\Kingdee\Results\EntityPaginator
     * @throws \PcbFlow\Kingdee\Exceptions\ApiException
     */
    public function paginate($criteria = null)
    {
        $model = $this->newModel();

        $total = $this->executeCount(new EntityCountForm($model, $criteria));

        $results = $total > 0 ? $this->executeQuery(new EntityPaginateForm($model, $criteria)) : [];

        return new EntityPaginator($model, $criteria, $total, $results);
    }

    /**
     * @param array $data
     * @return \PcbFlow\Kingdee\Results\SuccessResult
     * @throws \PcbFlow\Kingdee\Exceptions\ApiException
     */
    public function draft($data)
    {
        $model = $this->newModel();

        $form = new EntitySaveForm($model, $data);

        $results = $this->executeDraft($form);

        return new SuccessResult($results);
    }

    /**
     * @param array $data
     * @return \PcbFlow\Kingdee\Results\SuccessResult
     * @throws \PcbFlow\Kingdee\Exceptions\ApiException
     */
    public function save($data)
    {
        $model = $this->newModel();

        $form = new EntitySaveForm($model, $data);

        $results = $this->executeSave($form);

        return new SuccessResult($results);
    }

    /**
     * @param array $data
     * @return \PcbFlow\Kingdee\Results\SuccessResult
     * @throws \PcbFlow\Kingdee\Exceptions\ApiException
     */
    public function submit($data)
    {
        $model = $this->newModel();

        $form = new SubmitForm($model, $data);

        $results = $this->executeSubmit($form);

        return new SuccessResult($results);
    }

    /**
     * @param array $data
     * @return \PcbFlow\Kingdee\Results\SuccessResult
     * @throws \PcbFlow\Kingdee\Exceptions\ApiException
     */
    public function audit($data)
    {
        $model = $this->newModel();

        $form = new AuditForm($model, $data);

        $results = $this->executeAudit($form);

        return new SuccessResult($results);
    }

    /**
     * @param array $data
     * @return \PcbFlow\Kingdee\Results\SuccessResult
     * @throws \PcbFlow\Kingdee\Exceptions\ApiException
     */
    public function unaudit($data)
    {
        $model = $this->newModel();

        $form = new UnauditForm($model, $data);

        $results = $this->executeUnaudit($form);

        return new SuccessResult($results);
    }

    /**
     * @param array $data
     * @return \PcbFlow\Kingdee\Results\SuccessResult
     * @throws \PcbFlow\Kingdee\Exceptions\ApiException
     */
    public function delete($data)
    {
        $model = $this->newModel();

        $form = new DeleteForm($model, $data);

        $results = $this->executeDelete($form);

        return new SuccessResult($results);
    }
}
