<?php

namespace Domain\Driven\Design\Infrastructure\Abstracts;

use Domain\Driven\Design\Domain\ValueObject\Filter;
use Domain\Driven\Design\Domain\ValueObject\Paging;

class AbstractModel
{
    /**
     * @var Paging
     */
    protected $paging;
    /**
     * @var Filter
     */
    protected $filter;

    /**
     * AbstractModel constructor.
     * @param Paging $paging
     * @param Filter $filter
     */
    public function __construct(Paging $paging, Filter $filter)
    {
        $this->paging = $paging;
        $this->filter = $filter;
    }

}