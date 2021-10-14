<?php

namespace PHPUnit_Examples\Model;

/**
 * Person model
 */
class Person {

	/**
	 * Name of the person
	 *
	 * @var string
	 */
	private $name;

	/**
	 * Constructor
	 *
	 * @param string $name
	 */
	public function __construct( string $name ) {
		$this->name = $name;
	}

	/**
	 * Get name
	 *
	 * @return string
	 */
	public function get_name() {
		return $this->name;
	}

	/**
	 * Set name
	 *
	 * @return void
	 */
	public function set_name( string $name ) {
		$this->name = $name;
	}

}
