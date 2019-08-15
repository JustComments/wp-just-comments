<?php

/**
 * Class Just_Comments_Admin
 */
class Just_Comments_Admin {

	protected $comments_link = 'https://just-comments.com/account.html#moderation';

	/**
	 * Just_Comments_Admin constructor.
	 */
	function __construct() {
		add_action( 'admin_menu', array( $this, 'add_menu_page' ) );
		add_action( 'admin_menu', array( $this, 'replace_comments_menu_item' ), 100 );
	}

	/**
	 * Add plugin settings menu item
	 */
	public function add_menu_page() {
		add_options_page(
			"Just Comments settings",
			"JustComments",
			'manage_options',
			"just-comments",
			array( $this, 'add_admin_page' )
		);
	}

	/**
	 * Add plugin settings page
	 */
	public function add_admin_page() {
		include_once JUST_COMMENTS_DIR . '/admin/admin-page.php';
	}

	/**
	 * Change comments link in admin menu
	 */
	function replace_comments_menu_item() {
		global $menu;
		foreach ( $menu as $index => $item ) {
			if ( isset( $item[2] ) && 'edit-comments.php' === $item[2] ) {
				$menu[ $index ][2] = $this->comments_link;
			}
		}
	}
}
