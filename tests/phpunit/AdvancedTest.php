<?php

namespace tests\phpunit;

use App\Advanced;
use App\resources\Apple;
use PHPUnit\Framework\TestCase;

class AdvancedTest extends TestCase
{
    public function testCatchApple()
    {
        $adv = new Advanced();

        $mock = $this->createMock(Apple::class);

        $return = 'test';

        $mock
            ->expects($this->once())
            ->method('catchApple')
            ->willReturn($return);

        $adv->setApple($mock);
        $result = $adv->catchApple();

        $this->assertEquals($result, $return);
    }
}
