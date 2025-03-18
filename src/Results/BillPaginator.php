<?php

namespace PcbFlow\Kingdee\Results;

use PcbFlow\Kingdee\Concerns\MapsQueryResult;
use PcbFlow\Kingdee\Contracts\Arrayable;
use PcbFlow\Kingdee\Contracts\Paginator;
use PcbFlow\Kingdee\Query\Criteria;

class BillPaginator extends AbstractPaginator implements Arrayable, Paginator
{
    use MapsQueryResult;

    /**
     * @param \PcbFlow\Kingdee\Contracts\BillModel $model
     * @param \PcbFlow\Kingdee\Query\Criteria|null $criteria
     * @param int $total
     * @param array $results
     */
    public function __construct($model, $criteria, $total, $results)
    {
        $criteria = Criteria::make($criteria);

        $this->perPage = $criteria->getPerPage();

        $this->page = $criteria->getPage();

        $this->total = (int) $total;

        $this->items = !empty($results) ? $this->mapQueryResults($model, $results) : [];
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
}
