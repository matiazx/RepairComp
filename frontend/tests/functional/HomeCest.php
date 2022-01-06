<?php

namespace frontend\tests\functional;

use frontend\tests\FunctionalTester;

class HomeCest
{
    public function checkOpen(FunctionalTester $I)
    {
       $I->amOnPage(['site/index']);
       // $I->see('My Application');
       // $I->seeLink('Dispositivo');
       // $I->click('Dispositivo');
        //$I->see('This is the About page.');
    }
}