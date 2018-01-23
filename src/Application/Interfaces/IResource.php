<?php

namespace Domain\Driven\Design\Application\Interfaces;
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
    public function find(int $id);

    /**
     * find all objects using pagination
     * @param $start
     * @param $end
     * @return mixed
     */
    public function findAll($start, $end);


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