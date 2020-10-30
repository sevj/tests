<?php


namespace Tests\unit;


use App\Advanced;
use App\HelloWorld;
use App\resources\Apple;
use Codeception\Stub\Expected;

class HelloWorldTest extends \Codeception\Test\Unit
{
    public function testValidation()
    {
        $hw = new HelloWorld();

        $this->assertEquals('Hello World', $hw->say());
    }
}
