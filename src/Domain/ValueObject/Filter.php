<?php

namespace Domain\Driven\Design\Domain\ValueObject;
use Domain\Driven\Design\Domain\ValueObject\Abstracts\ValueObject;

/**
 * Class Filter
 * @package Domain\Driven\Design\Domain\ValueObject
 * filter query or http response or result
 */
class Filter extends ValueObject
{

    /**
     * @var string
     */
    private $field_name;
    /**
     * @var string
     */
    private $order;

    /**
     * Filter constructor.
     * @param string $field_name
     * @param string $order
     */
    public function __construct(?string $field_name=null ,string $order=null)
    {
        $this->field_name = $field_name;
        $this->order      = $order;
    }

    /**
     * @return string
     */
    public function getFieldName()
    {
        return $this->field_name;
    }

    /**
     * @return string
     */
    public function getOrder()
    {
        return $this->order;
    }

}