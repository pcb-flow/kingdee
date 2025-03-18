<?php

namespace PcbFlow\Kingdee\Results;

use PcbFlow\Kingdee\Concerns\MapsQueryResult;
use PcbFlow\Kingdee\Contracts\Arrayable;

class Bill implements Arrayable
{
    use MapsQueryResult;

    /**
     * @var array
     */
    protected $bill = [];

    /**
     * @var array
     */
    protected $entries = [];

    /**
     * @var string
     */
    protected $entryKey = 'entries';

    /**
     * @param \PcbFlow\Kingdee\Contracts\BillModel $model
     * @param array $results
     */
    public function __construct($model, $results)
    {
        if (!empty($results)) {
            $results = $this->mapQueryResults($model, $results);

            $this->bill = $this->truncateBill($model, $results);

            $this->entries = $this->truncateEntries($model, $results);
        }
    }

    /**
     * @param \PcbFlow\Kingdee\Contracts\BillModel $model
     * @param array $results
     * @return array
     */
    protected function mapQueryResults($model, $results)
    {
        $attributes = $model->getAttributes();

        return array_map(function ($result) use ($attributes) {
            return $this->mapQueryResult($result, $attributes);
        }, $results);
    }

    /**
     * @param \PcbFlow\Kingdee\Contracts\BillModel $model
     * @param array $results
     * @return array
     */
    protected function truncateBill($model, $results)
    {
        $mappings = $model->getBillColumnMappings();

        return array_intersect_key($results[0], $mappings);
    }

    /**
     * @param \PcbFlow\Kingdee\Contracts\BillModel $model
     * @param array $results
     * @return array
     */
    protected function truncateEntries($model, $results)
    {
        $mappings = $model->getEntryColumnMappings();

        return array_map(function ($result) use ($mappings) {
            return array_intersect_key($result, $mappings);
        }, $results);
    }

    /**
     * @return bool
     */
    public function isEmpty()
    {
        return empty($this->bill);
    }

    /**
     * @return array
     */
    public function toArray()
    {
        if (empty($this->bill)) {
            return [];
        }

        return array_merge($this->bill, [
            $this->entryKey => $this->entries
        ]);
    }

    /**
     * @param string $key
     * @return mixed
     */
    public function __get($key)
    {
        if (isset($this->bill[$key])) {
            return $this->bill[$key];
        }

        return null;
    }
}
