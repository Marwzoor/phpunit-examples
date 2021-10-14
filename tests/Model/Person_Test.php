<?php

use PHPUnit\Framework\TestCase;
use PHPUnit_Examples\Model\Person;

class Person_Test extends TestCase {
	
	/**
	 * Testing of the add function
	 *
	 * @dataProvider name_provider
	 *
	 * @return void
	 */
	public function test_get_name( $name ) {
		$person = new Person( $name );

		$this->assertEquals( $name, $person->get_name() );
	}

	/**
	 * Testing of the add function
	 *
	 * @dataProvider name_provider
	 *
	 * @return void
	 */
	public function test_set_name( $name ) {
		$person = new Person( 'RANDOM NAME' );

		$person->set_name( $name );

		$this->assertEquals( $name, $person->get_name() );
	}

	/**
	 * Provider for the get name test
	 *
	 * @return array
	 */
	public function name_provider() {
		return [
			[
				'Tess T Persson'
			]
		];
	}

}
