<?php

namespace Domain\Driven\Design\Application\Exception;

/**
 * Class InvalidArgumentException
 * @package Domain\Driven\Design\Application\Exception
 */
class InvalidArgumentException extends \InvalidArgumentException implements IException
{
    public $message;

    public function setMessage(string $message)
    {
        $this->message = $message;
    }

}