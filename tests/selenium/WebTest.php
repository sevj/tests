<?php

namespace Tests\selenium;

use PHPUnit\Extensions\Selenium2TestCase;

class WebTest extends Selenium2TestCase
{
    protected function setUp(): void
    {
        $this->setBrowser('chrome');
        $this->setBrowserUrl('http://www.example.com/');
        $this->setDesiredCapabilities(['chromeOptions' => ['w3c' => false]]);
    }

    public function testPage()
    {
        $this->url('http://localhost:7777');
        $this->assertEquals('Focking page de test', $this->title());

        $this->byId('firstname')->value('robert');
        $this->byId('lastname')->value('polson');
        $this->byId('submit')->click();

        $this->assertEquals('robert - polson', $this->byId('result')->text());
    }
}
