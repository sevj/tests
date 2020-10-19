<?php

namespace tests\phpunit;

use PHPUnit\Framework\TestCase;

class HelloWorldTest extends TestCase
{
    public function testHelloWorld()
    {
        $hw = new \App\HelloWorld();

        $this->assertEquals('Hello World', $hw->say());
    }
}
