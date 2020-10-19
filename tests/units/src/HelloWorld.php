<?php

namespace tests\units\app;

include_once(__DIR__ . '/../../../src/HelloWorld.php');

use mageekguy\atoum;
use App\HelloWorld as HW;

class HelloWorld extends atoum\test
{
    public function testSay()
    {
        $helloWorld = new HW();

        $this->string($helloWorld->say())->isEqualTo('Hello World');
    }
}
