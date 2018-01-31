<?php

namespace Domain\Driven\Design\Infrastructure\Interfaces;
use Domain\Driven\Design\Domain\Entity\Entity;

/**
 * Interface IModel
 * @package Domain\Driven\Design\Infrastructure\Interfaces
 */
interface IModel
{



    /**
     * find object by id
     * @param int $id
     * @return Entity
     */
    public function find(int $id);

    /**
     * find all objects using pagination
     * @param $start
     * @param $end
     * @param $filter
     * @return Entity
     */
    public function findAll(int $start, int $end, $filter);


    /**
     * create object
     * @param $object
     * @return Entity
     */
    public function create($object);


    /**
     * update object
     * @param int $id
     * @return Entity
     */
    public function update(int $id);


    /**
     * remove object
     * @param int $id
     * @return boolean
     */
    public function delete(int $id);

}