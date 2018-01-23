<?php
use Domain\Driven\Design\Infrastructure\Abstracts\AbstractModel;
use Domain\Driven\Design\Infrastructure\Interfaces\IModel;
use Domain\Driven\Design\Domain\Entity\Entity;

class ExampleModel extends AbstractModel implements IModel
{
    public function find(int $id): Entity
    {
        dd($id);
    }

    public function findAll(int $start, int $end, $filter): Entity
    {
        // TODO: Implement findAll() method.
    }

    public function create($object): Entity
    {
        // TODO: Implement create() method.
    }

    public function update(int $id): Entity
    {
        // TODO: Implement update() method.
    }

    public function delete(int $id): bool
    {
        // TODO: Implement delete() method.
    }


}