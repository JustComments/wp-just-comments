<?php

/**
 * Class Just_Comments_Plugin
 */
class Just_Comments_Plugin {

	/**
	 * @var Just_Comments_Settings
	 */
	private static $settings = null;

	public function __construct() {
		add_action( 'init', array( $this, 'init' ) );

		self::$settings = new Just_Comments_Settings();

		if ( is_admin() ) {
			new Just_Comments_Admin();
		} else {
			new Just_Comments_Frontend();
		}
	}

	public function init() {
		// load i18n
		load_plugin_textdomain(
			'just-comments',
			false,
			dirname( plugin_basename( JUST_COMMENTS_FILE ) ) . '/languages'
		);
	}

	/**
	 * @return Just_Comments_Settings
	 */
	public static function get_settings() {
		return self::$settings;
	}
}
