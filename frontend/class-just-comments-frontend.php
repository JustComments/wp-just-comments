<?php

/**
 * Class Just_Comments_Frontend
 */
class Just_Comments_Frontend {

	protected $comments_template_path = JUST_COMMENTS_DIR . '/frontend/comments-template.php';

	/**
	 * Just_Comments_Frontend constructor.
	 */
	public function __construct() {
		add_filter( 'comments_template', array( $this, 'comments_template' ), 100 );
	}

	/**
	 * @param $comment_template string
	 *
	 * @return string
	 */
	public function comments_template( $comment_template ) {
		$settings = Just_Comments_Plugin::get_settings();
		$html     = $settings->get_setting( 'html' );
		if ( empty( $html ) ) {
			return $comment_template;
		}

		return $this->comments_template_path;
	}
}
