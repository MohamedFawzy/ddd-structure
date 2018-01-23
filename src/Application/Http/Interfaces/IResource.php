<?php

namespace Domain\Driven\Design\Application\Http\Interfaces;
use Domain\Driven\Design\Domain\Entity\Entity;

/**
 * Interface for manage resources used in HTTP app layer
 * Interface IResource
 * @package Domain\Driven\Design\Application\Interfaces
 */
interface IResource
{


    /**
     * find object by id
     * @param int $id
     * @return Entity
     */
    public function find(int $id): Entity;

    /**
     * find all objects using pagination
     * @param $start
     * @param $end
     * @param $filter
     * @return Entity
     */
    public function findAll(int $start, int $end, $filter): Entity;


    /**
     * create object
     * @param $object
     * @return Entity
     */
    public function create($object): Entity;


    /**
     * update object
     * @param int $id
     * @return Entity
     */
    public function update(int $id): Entity;


    /**
     * remove object
     * @param int $id
     * @return boolean
     */
    public function delete(int $id): bool;


}