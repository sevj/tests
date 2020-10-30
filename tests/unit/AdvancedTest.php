<?php


namespace Tests\unit;


use App\Advanced;
use App\resources\Apple;
use Codeception\Stub\Expected;

class AdvancedTest extends \Codeception\Test\Unit
{
    public function testValidation()
    {
        $apple = $this->make(Apple::class, [
            'catchApple' => Expected::once('Catched')
        ]);
        $advanced = new Advanced();
        $advanced->setApple($apple);

        $this->assertEquals('Catched', $advanced->catchApple());
    }
}
