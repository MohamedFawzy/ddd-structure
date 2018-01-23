<?php

use Domain\Driven\Design\Domain\Repository\Abstracts\Repository;
use Domain\Driven\Design\Domain\Repository\Interfaces\IRepository;
use Domain\Driven\Design\Domain\Entity\Entity;

/**
 * Class ExampleRepository
 */
class ExampleRepository extends Repository implements IRepository
{
    public function find(int $id): Entity
    {
        // TODO: Implement find() method.
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