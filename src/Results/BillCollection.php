<?php

namespace PcbFlow\Kingdee\Results;

use PcbFlow\Kingdee\Concerns\MapsQueryResult;
use PcbFlow\Kingdee\Contracts\Arrayable;

class BillCollection implements Arrayable
{
    use MapsQueryResult;

    /**
     * @var array
     */
    protected $items = [];

    /**
     * @param \PcbFlow\Kingdee\Contracts\BillModel $model
     * @param array $results
     */
    public function __construct($model, $results)
    {
        if (!empty($results)) {
            $this->items = $this->mapQueryResults($model, $results);
        }
    }

    /**
     * @param \PcbFlow\Kingdee\Contracts\BillModel $model
     * @param array $results
     * @return array
     */
    protected function mapQueryResults($model, $results)
    {
        $attributes = $model->getBillAttributes();

        return array_map(function ($result) use ($attributes) {
            return $this->mapQueryResult($result, $attributes);
        }, $results);
    }

    /**
     * @return array
     */
    public function toArray()
    {
        return $this->items;
    }
}
