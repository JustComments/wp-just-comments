<?php

/**
 * Class Just_Comments_Settings
 */
class Just_Comments_Settings extends WordPress_SimpleSettings {

	/**
	 * @var string
	 */
	public $prefix = 'just-comments';

	/**
	 * Just_Comments_Settings constructor.
	 */
	public function __construct() {
		parent::__construct();
	}

}
