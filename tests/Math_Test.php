<?php

use PHPUnit\Framework\TestCase;
use PHPUnit_Examples\Math;

class Math_Test extends TestCase {
	
	/**
	 * Testing of the add function
	 *
	 * @dataProvider add_provider
	 *
	 * @return void
	 */
	public function test_add( $number1, $number2, $sum ) {
		$this->assertEquals( $sum, Math::add( $number1, $number2 ) );
	}

	/**
	 * Testing of the subtract function
	 *
	 * @dataProvider subtract_provider
	 *
	 * @return void
	 */
	public function test_subtract( $number1, $number2, $sum ) {
		$this->assertEquals( $sum, Math::subtract( $number1, $number2 ) );
	}

	/**
	 * Testing of the factor function
	 *
	 * @dataProvider factor_provider
	 *
	 * @return void
	 */
	public function test_factor( $number1, $number2, $sum ) {
		$this->assertEquals( $sum, Math::factor( $number1, $number2 ) );
	}

	/**
	 * Provider for the add test
	 *
	 * @return array
	 */
	public function add_provider() {
		return [
			[
				5,
				3,
				8
			],
			[
				15,
				20,
				35
			],
		];
	}

	/**
	 * Provider for the subtract test
	 *
	 * @return array
	 */
	public function subtract_provider() {
		return [
			[
				5,
				3,
				2
			],
			[
				3,
				5,
				-2
			],
		];
	}

	/**
	 * Provider for the factor test
	 *
	 * @return array
	 */
	public function factor_provider() {
		return [
			[
				5,
				3,
				15
			],
			[
				3,
				5,
				15
			],
		];
	}

}
