<?php

namespace Domain\Driven\Design\Domain\Transformer;

use Domain\Driven\Design\Application\Exception\InvalidArgumentException;
use Domain\Driven\Design\Domain\Entity\Entity;

/**
 * transform data from object return in infrastructure to entity then bypass to service layer
 * Class Transform
 * @package Domain\Driven\Design\Domain\Transformer
 */
abstract class Transform
{

    protected $object;

    public function __construct($object)
    {
        if(!is_object($object)){
            throw new InvalidArgumentException("transformer parameter must be an object");
        }

        $this->object = $object;
    }

    abstract public function transform(): Entity;

}