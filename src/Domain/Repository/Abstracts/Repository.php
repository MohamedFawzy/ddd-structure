<?php

namespace Domain\Driven\Design\Domain\Repository\Abstracts;

use Domain\Driven\Design\Infrastructure\Interfaces\IModel;

class Repository
{

    protected $model;

    /**
     * Repository constructor.
     * @param IModel $IModel
     */
    public function __construct(IModel $IModel)
    {
        $this->model = $IModel;
    }

}