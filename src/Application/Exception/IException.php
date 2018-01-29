<?php

namespace Domain\Driven\Design\Application\Exception;

/**
 * Interface IException
 * @package Domain\Driven\Design\Application\Exception
 */
interface IException
{
    /**
     * set exception message
     * @param string $message
     * @return string
     */
    public function setMessage(string $message);

}