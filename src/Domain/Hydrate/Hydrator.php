<?php

namespace Domain\Driven\Design\Domain\Hydrate;
use Domain\Driven\Design\Application\Exception\InvalidArgumentException;
use Domain\Driven\Design\Domain\Entity\Entity;

/**
 * Class Hydrator
 * @package Domain\Driven\Design\Domain\Hydrate
 */

abstract class Hydrator
{

    /**
     * @var object
     */
    protected $object;

    /**
     * Hydrator constructor.
     * @param $object
     */
    public function __construct($object)
    {
        if(!is_object($object)){
            throw new InvalidArgumentException("Hydrator must be an object");
        }

        $this->object = $object;
    }

    /**
     * Hydrate object
     * @return Entity
     */
    abstract function hydrate(): Entity;

    /**
     * get class name
     * @return string
     */
    public static function getClassName() {
        return get_called_class();
    }

}