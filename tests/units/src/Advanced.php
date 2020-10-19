<?php

namespace tests\units\app;

include_once(__DIR__ . '/../../../src/Advanced.php');
include_once(__DIR__ . '/../../../src/resources/Apple.php');

use App\resources\Apple;
use mageekguy\atoum;
use App\Advanced as Adv;

class Advanced extends atoum\test
{
    public function testCatchApple()
    {
        $adv = new Adv();

        $mock = $this->newMockInstance(Apple::class);

        $this
            ->given($adv)
            ->and($mock)
            ->and($adv->setApple($mock))
            ->then
                ->mock($mock)
                    ->call('catchApple')->withArguments()->once()
        ;

        $adv->catchApple();
    }
}
