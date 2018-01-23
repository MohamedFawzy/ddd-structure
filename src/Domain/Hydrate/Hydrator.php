<?php

namespace Domain\Driven\Design\Domain\Hydrate;
use Domain\Driven\Design\Domain\Entity\Entity;

/**
 * Class Hydrator
 * @package Domain\Driven\Design\Domain\Hydrate
 */

abstract class Hydrator
{

    /**
     * @param \StdClass $class
     * @return Entity
     */
    abstract function hydrate(\StdClass $class): Entity;

}