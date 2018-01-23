<?php

namespace Domain\Driven\Design\tests\Application\Service;
use Domain\Driven\Design\Application\Service\Abstracts\Service;
use Domain\Driven\Design\Application\Service\Interfaces\IService;
use Domain\Driven\Design\Domain\Entity\Entity;

class ExampleService extends Service implements IService
{
    public function find(int $id): Entity
    {
        return $this->repository->find($id);
    }

    public function findAll(int $start, int $end, $filter): Entity
    {
        return $this->repository->findAll($start, $end, $filter);
    }

    public function create($object): Entity
    {
        return $this->repository->create($object);
    }

    public function update(int $id): Entity
    {
        return $this->repository->update($id);
    }

    public function delete(int $id): bool
    {
        return $this->repository->delete($id);
    }


}