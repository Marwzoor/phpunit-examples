<?php

namespace PHPUnit_Examples;

/**
 * Math things
 */
class Math {

	/**
	 * Add two numbers
	 *
	 * @param int $number1
	 * @param int $number2
	 *
	 * @return int
	 */
	public static function add( int $number1, int $number2 ) {
		return $number1 + $number2;
	}

	/**
	 * Subtract two numbers
	 *
	 * @param int $number1
	 * @param int $number2
	 *
	 * @return int
	 */
	public static function subtract( int $number1, int $number2 ) {
		return $number1 - $number2;
	}

	/**
	 * Factor two numbers
	 *
	 * @param int $number1
	 * @param int $number2
	 *
	 * @return int
	 */
	public static function factor( int $number1, int $number2 ) {
		return $number1 * $number2;
	}

}
