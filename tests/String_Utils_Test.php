<?php

use PHPUnit\Framework\TestCase;
use PHPUnit_Examples\Math;
use PHPUnit_Examples\String_Utils;

class String_Utils_Test extends TestCase {
	
	/**
	 * Testing of the create tel link function
	 *
	 * @dataProvider create_tel_link_provider
	 *
	 * @return void
	 */
	public function test_create_tel_link( $phone_number, $result ) {
		$this->assertEquals( $result, String_Utils::create_tel_link( $phone_number ) );
	}

	/**
	 * Provider for the create tel link test
	 *
	 * @return void
	 */
	public function create_tel_link_provider() {
		return [
			[
				'070 - 012 034 05',
				'tel:07001203405'
			],
			[
				'070-01 20 34 05',
				'tel:07001203405'
			],
			[
				'+46 70 - 012 03 405',
				'tel:+467001203405'
			]
		];
	}

}
