<?php
use Domain\Driven\Design\Infrastructure\Abstracts\AbstractModel;
use Domain\Driven\Design\Infrastructure\Interfaces\IModel;
use Domain\Driven\Design\Domain\Entity\Entity;

class ExampleModel extends AbstractModel implements IModel
{
    public function find(int $id)
    {
        // TODO: Implement find() method.
    }

    public function findAll(int $start, int $end, $filter)
    {
        // TODO: Implement findAll() method.
    }

    public function create($object)
    {
        // TODO: Implement create() method.
    }

    public function change(int $id)
    {
        // TODO: Implement change() method.
    }

    public function remove(int $id)
    {
        // TODO: Implement remove() method.
    }
    

}