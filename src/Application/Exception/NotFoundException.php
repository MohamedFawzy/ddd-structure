<?php

namespace Domain\Driven\Design\Application\Exception;
/**
 * Class NotFoundException
 * @package Domain\Driven\Design\Application\Exception
 */

class NotFoundException extends \RuntimeException implements IException
{
    public $message;

    public function setMessage(string $message)
    {
        $this->message = $message;
    }

}