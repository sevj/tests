<?php

namespace tests\enhance;

use App\Advanced;
use App\Enhance\Core;
use App\Enhance\Expect;
use App\Enhance\MockFactory;
use App\Enhance\TestFixture;
use App\resources\Apple;

include_once(__DIR__ . '/../../src/Enhance/EnhanceTestFramework.php');
include_once(__DIR__ . '/../../src/resources/Apple.php');
include_once(__DIR__ . '/../../src/Advanced.php');

class AdvancedTest extends TestFixture
{
    public function verifyWithAMock()
    {
        $mock = MockFactory::createMock(Apple::class);
        $mock->addExpectation(
            Expect::method('catchApple')
                ->returns('Catched')
                ->times(1)
        );
        $target = new Advanced();
        $target->setApple($mock);
        $result = $target->catchApple();
        $mock->verifyExpectations();
    }
}

Core::runTests();
