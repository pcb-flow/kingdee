<?php

namespace PcbFlow\Kingdee\Concerns;

use Carbon\Carbon;
use PcbFlow\Kingdee\Flex\DestStockLocation;
use PcbFlow\Kingdee\Flex\SrcStockLocation;
use PcbFlow\Kingdee\Flex\StockLocation;
use PcbFlow\Kingdee\Query\CompareOperator;
use PcbFlow\Kingdee\Query\DateRange;

trait HasFilterCriteria
{
    /**
     * @var array
     */
    protected $filters = [];

    /**
     * @param string $attribute
     * @param mixed $value
     * @return $this
     */
    public function addFilterEqual($attribute, $value)
    {
        $this->filters[] = [
            'attribute' => $attribute,
            'operator' => CompareOperator::EQUAL,
            'value' => $value,
        ];

        return $this;
    }

    /**
     * @param string $attribute
     * @param mixed $value
     * @return $this
     */
    public function addFilterNotEqual($attribute, $value)
    {
        $this->filters[] = [
            'attribute' => $attribute,
            'operator' => CompareOperator::NOT_EQUAL,
            'value' => $value,
        ];

        return $this;
    }

    /**
     * @param string $attribute
     * @param mixed $value
     * @return $this
     */
    public function addFilterGreater($attribute, $value)
    {
        $this->filters[] = [
            'attribute' => $attribute,
            'operator' => CompareOperator::GREATER,
            'value' => $value,
        ];

        return $this;
    }

    /**
     * @param string $attribute
     * @param mixed $value
     * @return $this
     */
    public function addFilterGreaterEqual($attribute, $value)
    {
        $this->filters[] = [
            'attribute' => $attribute,
            'operator' => CompareOperator::GREATER_EQUAL,
            'value' => $value,
        ];

        return $this;
    }

    /**
     * @param string $attribute
     * @param mixed $value
     * @return $this
     */
    public function addFilterLess($attribute, $value)
    {
        $this->filters[] = [
            'attribute' => $attribute,
            'operator' => CompareOperator::LESS,
            'value' => $value,
        ];

        return $this;
    }

    /**
     * @param string $attribute
     * @param mixed $value
     * @return $this
     */
    public function addFilterLessEqual($attribute, $value)
    {
        $this->filters[] = [
            'attribute' => $attribute,
            'operator' => CompareOperator::LESS_EQUAL,
            'value' => $value,
        ];

        return $this;
    }

    /**
     * @param string $attribute
     * @param mixed $value
     * @return $this
     */
    public function addFilterLike($attribute, $value)
    {
        $this->filters[] = [
            'attribute' => $attribute,
            'operator' => CompareOperator::LIKE,
            'value' => $value,
        ];

        return $this;
    }

    /**
     * @param string $attribute
     * @param array $value
     * @return $this
     */
    public function addFilterIn($attribute, $value)
    {
        $this->filters[] = [
            'attribute' => $attribute,
            'operator' => CompareOperator::IN,
            'value' => $value,
        ];

        return $this;
    }

    /**
     * @param string $attribute
     * @param array $value
     * @return $this
     */
    public function addFilterNotIn($attribute, $value)
    {
        $this->filters[] = [
            'attribute' => $attribute,
            'operator' => CompareOperator::NOT_IN,
            'value' => $value,
        ];

        return $this;
    }

    /**
     * @param string $attribute
     * @return $this
     */
    public function addFilterTrue($attribute)
    {
        $this->filters[] = [
            'attribute' => $attribute,
            'operator' => CompareOperator::TRUE,
            'value' => null,
        ];

        return $this;
    }

    /**
     * @param string $attribute
     * @return $this
     */
    public function addFilterFalse($attribute)
    {
        $this->filters[] = [
            'attribute' => $attribute,
            'operator' => CompareOperator::FALSE,
            'value' => null,
        ];

        return $this;
    }

    /**
     * @param string $attribute
     * @return $this
     */
    public function addFilterIsNull($attribute)
    {
        $this->filters[] = [
            'attribute' => $attribute,
            'operator' => CompareOperator::IS_NULL,
            'value' => null,
        ];

        return $this;
    }

    /**
     * @param string $attribute
     * @return $this
     */
    public function addFilterIsNotNull($attribute)
    {
        $this->filters[] = [
            'attribute' => $attribute,
            'operator' => CompareOperator::IS_NOT_NULL,
            'value' => null,
        ];

        return $this;
    }

    /**
     * @param string $attribute
     * @param string $value
     * @return $this
     */
    public function addFilterDate($attribute, $value)
    {
        $this->filters[] = [
            'attribute' => $attribute,
            'operator' => CompareOperator::DATE,
            'value' => $value,
        ];

        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addFilterStockLocNumber($value)
    {
        $numbers = StockLocation::parseNumberToArray($value);

        foreach ($numbers as $attribute => $number) {
            $this->addFilterEqual($attribute, $number);
        }

        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addFilterStockLocName($value)
    {
        $names = StockLocation::parseNameToArray($value);

        foreach ($names as $attribute => $name) {
            $this->addFilterEqual($attribute, $name);
        }

        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addFilterSrcStockLocNumber($value)
    {
        $numbers = SrcStockLocation::parseNumberToArray($value);

        foreach ($numbers as $attribute => $number) {
            $this->addFilterEqual($attribute, $number);
        }

        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addFilterSrcStockLocName($value)
    {
        $names = SrcStockLocation::parseNameToArray($value);

        foreach ($names as $attribute => $name) {
            $this->addFilterEqual($attribute, $name);
        }

        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addFilterDestStockLocNumber($value)
    {
        $numbers = DestStockLocation::parseNumberToArray($value);

        foreach ($numbers as $attribute => $number) {
            $this->addFilterEqual($attribute, $number);
        }

        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function addFilterDestStockLocName($value)
    {
        $names = DestStockLocation::parseNameToArray($value);

        foreach ($names as $attribute => $name) {
            $this->addFilterEqual($attribute, $name);
        }

        return $this;
    }

    /**
     * @param array $columnMappings
     * @return string
     */
    public function getFilterString($columnMappings)
    {
        if (empty($this->filters)) {
            return '';
        }

        $filters = array_filter(array_map(function ($filter) use ($columnMappings) {
            if (!isset($columnMappings[$filter['attribute']])) {
                return null;
            }

            return $this->buildCondition(
                $columnMappings[$filter['attribute']],
                $filter['operator'],
                $filter['value']
            );
        }, $this->filters));

        return implode(' AND ', $filters);
    }

    /**
     * @param string $column
     * @param string $operator
     * @param mixed $value
     * @return string
     */
    protected function buildCondition($column, $operator, $value)
    {
        switch ($operator) {
            case CompareOperator::EQUAL:
                return $this->buildEqual($column, $value);

            case CompareOperator::NOT_EQUAL:
                return $this->buildNotEqual($column, $value);

            case CompareOperator::GREATER:
                return $this->buildGreater($column, $value);

            case CompareOperator::GREATER_EQUAL:
                return $this->buildGreaterEqual($column, $value);

            case CompareOperator::LESS:
                return $this->buildLess($column, $value);

            case CompareOperator::LESS_EQUAL:
                return $this->buildLessEqual($column, $value);

            case CompareOperator::LIKE:
                return $this->buildLike($column, $value);

            case CompareOperator::IN:
                return $this->buildIn($column, $value);

            case CompareOperator::NOT_IN:
                return $this->buildNotIn($column, $value);

            case CompareOperator::TRUE:
                return $this->buildTrue($column, $value);

            case CompareOperator::FALSE:
                return $this->buildFalse($column, $value);

            case CompareOperator::IS_NULL:
                return $this->buildIsNull($column, $value);

            case CompareOperator::IS_NOT_NULL:
                return $this->buildIsNotNull($column, $value);

            case CompareOperator::DATE:
                return $this->buildDate($column, $value);

            default:
                return '';
        }
    }

    /**
     * @param string $column
     * @param mixed $value
     * @return string
     */
    protected static function buildEqual($column, $value)
    {
        $value = static::escapeSqlValue($value);

        return " {$column} = {$value} ";
    }

    /**
     * @param string $column
     * @param mixed $value
     * @return string
     */
    protected static function buildNotEqual($column, $value)
    {
        $value = static::escapeSqlValue($value);

        return " {$column} != {$value} ";
    }

    /**
     * @param string $column
     * @param mixed $value
     * @return string
     */
    protected static function buildGreater($column, $value)
    {
        return " {$column} > {$value} ";
    }

    /**
     * @param string $column
     * @param mixed $value
     * @return string
     */
    protected static function buildGreaterEqual($column, $value)
    {
        return " {$column} >= {$value} ";
    }

    /**
     * @param string $column
     * @param mixed $value
     * @return string
     */
    protected static function buildLess($column, $value)
    {
        return " {$column} < {$value} ";
    }

    /**
     * @param string $column
     * @param mixed $value
     * @return string
     */
    protected static function buildLessEqual($column, $value)
    {
        return " {$column} <= {$value} ";
    }

    /**
     * @param string $column
     * @param mixed $value
     * @return string
     */
    protected static function buildLike($column, $value)
    {
        $value = static::escapeLikeValue($value);

        return " {$column} LIKE {$value} ";
    }

    /**
     * @param string $column
     * @param array $value
     * @return string
     */
    protected static function buildIn($column, $value)
    {
        $value = static::escapeSqlValue($value);

        return " {$column} IN {$value} ";
    }

    /**
     * @param string $column
     * @param array $value
     * @return string
     */
    protected static function buildNotIn($column, $value)
    {
        $value = static::escapeSqlValue($value);

        return " {$column} NOT IN {$value} ";
    }

    /**
     * @param string $column
     * @return string
     */
    protected static function buildTrue($column)
    {
        return " {$column} = 1 ";
    }

    /**
     * @param string $column
     * @return string
     */
    protected static function buildFalse($column)
    {
        return " {$column} = 0 ";
    }

    /**
     * @param string $column
     * @return string
     */
    protected static function buildIsNull($column)
    {
        return " {$column} IS NULL ";
    }

    /**
     * @param string $column
     * @return string
     */
    protected static function buildIsNotNull($column)
    {
        return " {$column} IS NOT NULL ";
    }

    /**
     * @param string $column
     * @param string $value
     * @return string
     * @throws \Carbon\Exceptions\InvalidFormatException
     */
    protected static function buildDate($column, $value)
    {
        switch (strtolower($value)) {
            case strtolower(DateRange::TODAY):
                return static::buildDateToday($column);

            case strtolower(DateRange::YESTERDAY):
                return static::buildDateYesterday($column);

            case strtolower(DateRange::THIS_WEEK):
                return static::buildDateThisWeek($column);

            case strtolower(DateRange::LAST_WEEK):
                return static::buildDateLastWeek($column);

            case strtolower(DateRange::THIS_MONTH):
                return static::buildDateThisMonth($column);

            case strtolower(DateRange::LAST_MONTH):
                return static::buildDateLastMonth($column);

            case strtolower(DateRange::RECENT_60_DAYS):
                return static::buildDateRecentDays($column, 60);

            case strtolower(DateRange::RECENT_90_DAYS):
                return static::buildDateRecentDays($column, 90);

            case strtolower(DateRange::RECENT_180_DAYS):
                return static::buildDateRecentDays($column, 180);

            default:
                return static::buildDateEqual($column, $value);
        }
    }

    /**
     * @param string $column
     * @return string
     */
    protected static function buildDateToday($column)
    {
        $start = Carbon::today()->startOfDay();

        $end = Carbon::today()->endOfDay();

        return " {$column} BETWEEN '{$start}' AND '{$end}' ";
    }

    /**
     * @param string $column
     * @return string
     */
    protected static function buildDateYesterday($column)
    {
        $start = Carbon::yesterday()->startOfDay();

        $end = Carbon::yesterday()->endOfDay();

        return " {$column} BETWEEN '{$start}' AND '{$end}' ";
    }

    /**
     * @param string $column
     * @return string
     */
    protected static function buildDateThisWeek($column)
    {
        $start = Carbon::now()->startOfWeek();

        $end = Carbon::now()->endOfWeek();

        return " {$column} BETWEEN '{$start}' AND '{$end}' ";
    }

    /**
     * @param string $column
     * @return string
     */
    protected static function buildDateLastWeek($column)
    {
        $start = Carbon::now()->startOfWeek()->subWeek();

        $end = Carbon::now()->endOfWeek()->subWeek();

        return " {$column} BETWEEN '{$start}' AND '{$end}' ";
    }

    /**
     * @param string $column
     * @return string
     */
    protected static function buildDateThisMonth($column)
    {
        $start = Carbon::now()->startOfMonth();

        $end = Carbon::now()->endOfMonth();

        return " {$column} BETWEEN '{$start}' AND '{$end}' ";
    }

    /**
     * @param string $column
     * @return string
     */
    protected static function buildDateLastMonth($column)
    {
        $start = Carbon::now()->startOfMonth()->subMonth();

        $end = Carbon::now()->endOfMonth()->subMonth();

        return " {$column} BETWEEN '{$start}' AND '{$end}' ";
    }

    /**
     * @param string $column
     * @param int $days
     * @return string
     */
    protected static function buildDateRecentDays($column, $days)
    {
        $start = Carbon::now()->subDays(max($days, 1) - 1)->startOfDay();

        $end = Carbon::now()->endOfDay();

        return " {$column} BETWEEN '{$start}' AND '{$end}' ";
    }

    /**
     * @param string $column
     * @param string $value
     * @return string
     */
    protected static function buildDateEqual($column, $value)
    {
        try {
            $date = Carbon::parse($value);

            $start = $date->copy()->startOfDay();

            $end = $date->copy()->endOfDay();

            return " {$column} BETWEEN '{$start}' AND '{$end}' ";
        } catch (\Exception $e) {
            return '';
        }
    }

    /**
     * @param mixed $value
     * @return string
     */
    protected function escapeLikeValue($value)
    {
        return static::escapeSqlValue($value, true);
    }

    /**
     * @param mixed $value
     * @param bool $isLike
     * @return string
     */
    protected static function escapeSqlValue($value, $isLike = false)
    {
        if (is_array($value)) {
            $escaped = array_map(function ($item) use ($isLike) {
                return static::escapeSingleValue($item, $isLike);
            }, $value);

            return '(' . implode(',', $escaped) . ')';
        }

        return static::escapeSingleValue($value, $isLike);
    }

    /**
     * @param mixed $value
     * @param bool $isLike
     * @return string
     */
    protected static function escapeSingleValue($value, $isLike)
    {
        if (!is_string($value)) {
            return $value;
        }

        $escaped = addcslashes(str_replace("'", "''", $value), "\000\n\r\\\032");

        if ($isLike) {
            return " '%" . $escaped . "%' ESCAPE '\\' ";
        }

        return " '{$escaped}' ";
    }
}
