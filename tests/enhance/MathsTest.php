<?php

namespace tests\enhance;

use App\Enhance\Assert;
use App\Enhance\Core;
use App\Enhance\TestFixture;
use App\HelloWorld;
use App\Maths;

include_once(__DIR__ . '/../../src/Enhance/EnhanceTestFramework.php');
include_once(__DIR__ . '/../../src/Maths.php');

class MathsTest extends TestFixture
{
    public function additionTest()
    {
        $target = Core::getCodeCoverageWrapper(Maths::class);

        $results = $target->addition(2, 3);

        Assert::areIdentical($results, 5);
    }

    public function subtractionTest()
    {
        $target = Core::getCodeCoverageWrapper(Maths::class);

        $results = $target->subtraction(5, 3);

        Assert::areIdentical($results, 2);
    }

    public function multiplicationTest()
    {
        $target = Core::getCodeCoverageWrapper(Maths::class);

        $results = $target->multiplication(2, 3);

        Assert::areIdentical($results, 6);
    }

    public function divisionTest()
    {
        $target = Core::getCodeCoverageWrapper(Maths::class);

        $results = $target->division(20, 5);

        Assert::areIdentical($results, 4);
    }
}

Core::runTests();
