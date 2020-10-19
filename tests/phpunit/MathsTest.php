<?php

namespace tests\phpunit;

use PHPUnit\Framework\TestCase;

class MathsTest extends TestCase
{
    public function testAddition()
    {
        $maths = new \App\Maths();

        $this->assertEquals(5, $maths->addition(2, 3));
    }

    public function testSubtraction()
    {
        $maths = new \App\Maths();

        $this->assertEquals(7, $maths->subtraction(10, 3));
    }

    public function testMultiplication()
    {
        $maths = new \App\Maths();

        $this->assertEquals(30, $maths->multiplication(10, 3));
    }

    public function testDivision()
    {
        $maths = new \App\Maths();

        $this->assertEquals(4, $maths->division(12, 3));
    }
}
