<?php

namespace Domain\Driven\Design\Domain\Entity;
/**
 * Class Entity
 * @package Domain\Driven\Design\Domain\Entity
 */
abstract class Entity
{
    /**
     * convert object to array
     * @return mixed
     */
    abstract function toArray(): array;

}