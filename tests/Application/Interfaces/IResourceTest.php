<?php

use Domain\Driven\Design\Application\Http\Interfaces\IResource;


Class ExampleResource implements IResource
{
    public function find(int $id): \Domain\Driven\Design\Domain\Entity\Entity
    {
        // TODO: Implement find() method.
    }

    public function findAll(int $start, int $end, $filter): \Domain\Driven\Design\Domain\Entity\Entity
    {
        // TODO: Implement findAll() method.
    }

    public function create($object): \Domain\Driven\Design\Domain\Entity\Entity
    {
        // TODO: Implement create() method.
    }

    public function update(int $id): \Domain\Driven\Design\Domain\Entity\Entity
    {
        // TODO: Implement update() method.
    }

    public function delete(int $id): bool
    {
        // TODO: Implement delete() method.
    }


}
class IResourceTest extends \PHPUnit\Framework\TestCase
{
    public function testFoo()
    {
        $this->assertEquals(5,5);
    }



}