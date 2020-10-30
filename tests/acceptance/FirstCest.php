<?php

class FirstCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
        $I->amOnUrl('http://0.0.0.0:7777/');
        $I->seeElement('#firstname');
        $I->seeElement('#lastname');
        $I->seeInTitle('Focking page de test');

        $I->fillField('firstname', 'robert');
        $I->fillField('lastname', 'polson');
        $I->click('Envoyer');

        $I->see('robert - polson');
    }
}
