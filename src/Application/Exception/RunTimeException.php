<?php

namespace Domain\Driven\Design\Application\Exception;

/**
 * Class RunTimeException
 * @package Domain\Driven\Design\Application\Exception
 */
class RunTimeException extends \RuntimeException implements IException
{
    public $message;

    public function setMessage(string $message)
    {
        $this->message = $message;
    }

}