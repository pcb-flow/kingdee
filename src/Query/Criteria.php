<?php

namespace PcbFlow\Kingdee\Query;

use PcbFlow\Kingdee\Concerns\HasCursorCriteria;
use PcbFlow\Kingdee\Concerns\HasFilterCriteria;
use PcbFlow\Kingdee\Concerns\HasPaginationCriteria;
use PcbFlow\Kingdee\Concerns\HasSelectCriteria;
use PcbFlow\Kingdee\Concerns\HasSortCriteria;

class Criteria
{
    use HasCursorCriteria;
    use HasFilterCriteria;
    use HasPaginationCriteria;
    use HasSelectCriteria;
    use HasSortCriteria;

    /**
     * @param static|null $criteria
     * @return static
     */
    public static function make($criteria = null)
    {
        if ($criteria instanceof static) {
            return $criteria;
        }

        return new static();
    }
}
