<?php

namespace Domain\Driven\Design\Application\Exception;
/**
 * Class OutOfRangeException
 * @package Domain\Driven\Design\Application\Exception
 */

class OutOfRangeException extends \OutOfRangeException implements IException
{

    public $message;

    public function setMessage(string $message)
    {
        $this->message = $message;
    }


}