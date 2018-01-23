<?php

use PHPUnit\Framework\TestCase;
use Domain\Driven\Design\tests\Application\Service\ExampleService;


class ExampleServiceTest extends TestCase
{

    public function testFoo()
    {
        $this->assertEquals(5,5);
    }


    public function testServiceLocator()
    {
        $paging = new \Domain\Driven\Design\Domain\ValueObject\Paging(10,20);
        $filters = new \Domain\Driven\Design\Domain\ValueObject\Filter('name', 'desc');
        $exampleService = new ExampleService(new ExampleRepository(new ExampleModel($paging, $filters)));
        var_dump($exampleService);
    }

}