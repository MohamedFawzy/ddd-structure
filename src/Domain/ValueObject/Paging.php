<?php

namespace Domain\Driven\Design\Domain\ValueObject;
use Domain\Driven\Design\Domain\ValueObject\Abstracts\ValueObject;

/**
 * Class Paging
 * @package Domain\Driven\Design\Domain\ValueObject
 */
class Paging extends ValueObject
{

    /**
     * @var int
     */
    private $start;
    /**
     * @var int
     */
    private $end;

    /**
     * Paging constructor.
     * @param int $start
     * @param int $end
     */
    public function __construct(?int $start=null, ?int $end=null)
    {
        $this->start = $start;
        $this->end   = $end;
    }

    /**
     * get start limit
     * @return int
     */
    public function getStart(): int
    {
        return $this->start;
    }

    /**
     * get end offset
     * @return int
     */
    public function getEnd(): int
    {
        return $this->end;
    }
}