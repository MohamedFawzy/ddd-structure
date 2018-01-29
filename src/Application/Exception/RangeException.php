<?php

namespace Domain\Driven\Design\Application\Exception;
/**
 * Class RangeException
 * @package Domain\Driven\Design\Application\Exception
 */

class RangeException extends \RangeException implements IException
{

    public $message;

    public function setMessage(string $message)
    {
        $this->message = $message;
    }

}