<?php

namespace PHPUnit_Examples;

/**
 * Math things
 */
class String_Utils {

	/**
	 * Create tel link from the provided phone number
	 *
	 * @return string
	 */
	public static function create_tel_link( string $phone_number ) {
		$phone_number = preg_replace( '/[^\d\+]/', '', $phone_number );

		return 'tel:' . $phone_number;
	}
}
