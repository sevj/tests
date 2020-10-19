<?php

namespace tests\enhance;

use App\Enhance\Assert;
use App\Enhance\Core;
use App\Enhance\TestFixture;
use App\HelloWorld;

include_once(__DIR__ . '/../../src/Enhance/EnhanceTestFramework.php');
include_once(__DIR__ . '/../../src/HelloWorld.php');

class HelloWorldTest extends TestFixture
{
    public function sayTest()
    {
        $target = Core::getCodeCoverageWrapper(HelloWorld::class);

        $results = $target->say();

        Assert::areIdentical($results, 'Hello World');
    }
}

Core::runTests();
