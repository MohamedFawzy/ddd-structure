<?php

namespace Domain\Driven\Design\Application\Service\Abstracts;
use Domain\Driven\Design\Domain\Repository\Interfaces\IRepository;
/**
 * Class Service
 * @package Domain\Driven\Design\Application\Service\Abstracts
 */
class Service
{
    /**
     * @var IRepository
     */
    protected $repository;

    public function __construct(IRepository $repository)
    {
        $this->repository = $repository;
    }

}