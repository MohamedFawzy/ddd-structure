<?php

namespace Domain\Driven\Design\Application\Exception;
/**
 * Class LengthException
 * @package Domain\Driven\Design\Application\Exception
 */

class LengthException extends \LengthException implements IException
{

    public $message;

    public function setMessage(string $message)
    {
        $this->message = $message;
    }


}