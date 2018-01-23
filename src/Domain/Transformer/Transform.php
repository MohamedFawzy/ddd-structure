<?php

namespace Domain\Driven\Design\Domain\Transformer;

use Domain\Driven\Design\Domain\Entity\Entity;

/**
 * transform data from object return in infrastructure to entity then bypass to service layer
 * Class Transform
 * @package Domain\Driven\Design\Domain\Transformer
 */
abstract class Transform
{

    abstract public function transform(\StdClass $class): Entity;

}