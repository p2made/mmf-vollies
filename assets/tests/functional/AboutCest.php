<?php
namespace static\tests\functional;

use static\tests\FunctionalTester;

class AboutCest
{
	public function checkAbout(FunctionalTester $I)
	{
		$I->amOnRoute('site/about');
		$I->see('About', 'h1');
	}
}
