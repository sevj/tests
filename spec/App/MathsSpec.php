<?php

namespace spec\App;

use App\Maths;
use PhpSpec\ObjectBehavior;

class MathsSpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->shouldHaveType(Maths::class);
    }

    public function it_can_make_addition()
    {
        $this->addition(1, 3)->shouldReturn(4);
    }

    public function it_can_make_subtraction()
    {
        $this->subtraction(4, 1)->shouldReturn(3);
    }

    public function it_can_make_multiplication()
    {
        $this->multiplication(4, 5)->shouldReturn(20);
    }

    public function it_can_make_division()
    {
        $this->division(20, 4)->shouldReturn(5);
    }
}
