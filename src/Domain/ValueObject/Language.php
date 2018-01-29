<?php

namespace Domain\Driven\Design\Domain\ValueObject;
use Domain\Driven\Design\Domain\ValueObject\Abstracts\ValueObject;

/**
 * Class Language
 * @package Domain\Driven\Design\Domain\ValueObject
 */

class Language extends ValueObject
{

    /**
     * @var string
     * language name
     */
    private $name="english";

    /**
     * @var shortcut for language
     */
    private $synonym="en";


    public function __construct(string  $name, string  $synonym)
    {
        $this->name    = $name;
        $this->synonym = $synonym;
    }


    public function getName():string
    {
        return $this->name;
    }

    /**
     * get synonym
     * @return string
     */
    public function getSynonym(): string
    {
        return $this->synonym;
    }

}