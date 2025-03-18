<?php

namespace PcbFlow\Kingdee\Services;

use PcbFlow\Kingdee\Forms\AuditForm;
use PcbFlow\Kingdee\Forms\BillCountForm;
use PcbFlow\Kingdee\Forms\BillFindForm;
use PcbFlow\Kingdee\Forms\BillPaginateForm;
use PcbFlow\Kingdee\Forms\BillSearchForm;
use PcbFlow\Kingdee\Forms\BillSaveForm;
use PcbFlow\Kingdee\Forms\DeleteForm;
use PcbFlow\Kingdee\Forms\EntryCountForm;
use PcbFlow\Kingdee\Forms\EntryFindForm;
use PcbFlow\Kingdee\Forms\EntryPaginateForm;
use PcbFlow\Kingdee\Forms\EntrySearchForm;
use PcbFlow\Kingdee\Forms\PushForm;
use PcbFlow\Kingdee\Forms\SubmitForm;
use PcbFlow\Kingdee\Forms\UnauditForm;
use PcbFlow\Kingdee\Results\Bill;
use PcbFlow\Kingdee\Results\BillCollection;
use PcbFlow\Kingdee\Results\BillPaginator;
use PcbFlow\Kingdee\Results\Entry;
use PcbFlow\Kingdee\Results\EntryCollection;
use PcbFlow\Kingdee\Results\EntryPaginator;
use PcbFlow\Kingdee\Results\SuccessResult;

abstract class AbstractBillService extends AbstractService
{
    /**
     * @return \PcbFlow\Kingdee\Contracts\BillModel
     */
    abstract protected function newBillModel();

    /**
     * @param \PcbFlow\Kingdee\Query\Criteria|null $criteria
     * @return \PcbFlow\Kingdee\Results\BillCollection
     * @throws \PcbFlow\Kingdee\Exceptions\ApiException
     */
    public function get($criteria = null)
    {
        $model = $this->newBillModel();

        $form = new BillSearchForm($model, $criteria);

        $results = $this->executeQuery($form);

        return new BillCollection($model, $results);
    }

    /**
     * @param \PcbFlow\Kingdee\Query\Criteria|null $criteria
     * @return \PcbFlow\Kingdee\Results\EntryCollection
     * @throws \PcbFlow\Kingdee\Exceptions\ApiException
     */
    public function getEntries($criteria = null)
    {
        $model = $this->newBillModel();

        $form = new EntrySearchForm($model, $criteria);

        $results = $this->executeQuery($form);

        return new EntryCollection($model, $results);
    }

    /**
     * @param \PcbFlow\Kingdee\Query\Criteria|null $criteria
     * @return \PcbFlow\Kingdee\Results\Bill
     * @throws \PcbFlow\Kingdee\Exceptions\ApiException
     */
    public function find($criteria = null)
    {
        $model = $this->newBillModel();

        $form = new BillFindForm($model, $criteria);

        $results = $this->executeQuery($form);

        return new Bill($model, $results);
    }

    /**
     * @param \PcbFlow\Kingdee\Query\Criteria|null $criteria
     * @return \PcbFlow\Kingdee\Results\Entry
     * @throws \PcbFlow\Kingdee\Exceptions\ApiException
     */
    public function findEntry($criteria = null)
    {
        $model = $this->newBillModel();

        $form = new EntryFindForm($model, $criteria);

        $results = $this->executeQuery($form);

        return new Entry($model, $results);
    }

    /**
     * @param \PcbFlow\Kingdee\Query\Criteria|null $criteria
     * @return \PcbFlow\Kingdee\Results\BillPaginator
     * @throws \PcbFlow\Kingdee\Exceptions\ApiException
     */
    public function paginate($criteria = null)
    {
        $model = $this->newBillModel();

        $total = $this->executeCount(new BillCountForm($model, $criteria));

        $results = $total > 0 ? $this->executeQuery(new BillPaginateForm($model, $criteria)) : [];

        return new BillPaginator($model, $criteria, $total, $results);
    }

    /**
     * @param \PcbFlow\Kingdee\Query\Criteria|null $criteria
     * @return \PcbFlow\Kingdee\Results\EntryPaginator
     * @throws \PcbFlow\Kingdee\Exceptions\ApiException
     */
    public function paginateEntries($criteria = null)
    {
        $model = $this->newBillModel();

        $total = $this->executeCount(new EntryCountForm($model, $criteria));

        $results = $total > 0 ? $this->executeQuery(new EntryPaginateForm($model, $criteria)) : [];

        return new EntryPaginator($model, $criteria, $total, $results);
    }

    /**
     * @param array $data
     * @return \PcbFlow\Kingdee\Results\SuccessResult
     * @throws \PcbFlow\Kingdee\Exceptions\ApiException
     */
    public function draft($data)
    {
        $model = $this->newBillModel();

        $form = new BillSaveForm($model, $data);

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
        $model = $this->newBillModel();

        $form = new BillSaveForm($model, $data);

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
        $model = $this->newBillModel();

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
        $model = $this->newBillModel();

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
        $model = $this->newBillModel();

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
        $model = $this->newBillModel();

        $form = new DeleteForm($model, $data);

        $results = $this->executeDelete($form);

        return new SuccessResult($results);
    }

    /**
     * @param array $data
     * @return \PcbFlow\Kingdee\Results\SuccessResult
     * @throws \PcbFlow\Kingdee\Exceptions\ApiException
     */
    public function push($data)
    {
        $model = $this->newBillModel();

        $form = new PushForm($model, $data);

        $results = $this->executePush($form);

        return new SuccessResult($results);
    }
}
