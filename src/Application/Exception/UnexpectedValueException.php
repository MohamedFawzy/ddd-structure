<?php

namespace Domain\Driven\Design\Application\Exception;

/**
 * Class UnexpectedValueException
 * @package Domain\Driven\Design\Application\Exception
 */
class UnexpectedValueException extends \UnexpectedValueException implements IException
{
    /**
     * @var string
     */
    public $message;

    public function setMessage(string $message)
    {
        $this->message = $message;
    }

}