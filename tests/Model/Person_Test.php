<?php

use PHPUnit\Framework\TestCase;
use PHPUnit_Examples\Model\Person;

class Person_Test extends TestCase {
	
	/**
	 * Testing of the add function
	 *
	 * @dataProvider get_name_provider
	 *
	 * @return void
	 */
	public function test_get_name( $name ) {
		$person = new Person( $name );

		$this->assertEquals( $name, $person->get_name() );
	}

	/**
	 * Provider for the get name test
	 *
	 * @return array
	 */
	public function get_name_provider() {
		return [
			[
				'Tess T Persson'
			]
		];
	}

}
