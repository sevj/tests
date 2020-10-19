<?php

namespace tests\units\app;

include_once(__DIR__ . '/../../../src/Maths.php');

use mageekguy\atoum;
use App\Maths as M;

class Maths extends atoum\test
{
    public function testAddition()
    {
        $maths = new M();

        $this->integer($maths->addition(1, 2))->isEqualTo(3);
    }

    public function testSubtraction()
    {
        $maths = new M();

        $this->integer($maths->subtraction(3, 2))->isEqualTo(1);
    }

    public function testMultiplication()
    {
        $maths = new M();

        $this->integer($maths->multiplication(4, 5))->isEqualTo(20);
    }

    public function testDivision()
    {
        $maths = new M();

        $this->integer($maths->division(20, 5))->isEqualTo(4);
    }
}
