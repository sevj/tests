<?php

namespace Tests\unit;

use App\Maths;

class MathsTest extends \Codeception\Test\Unit
{
    public function testAddition()
    {
        $maths = new Maths();

        $this->assertEquals(4, $maths->addition(3, 1));
    }
}
