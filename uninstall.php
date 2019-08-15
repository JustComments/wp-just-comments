<?php

if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
	exit();
}

/**
 * Delete plugin settings
 */
if ( ! function_exists( 'justcom_comments_delete_plugin' ) ) {
	function justcom_comments_delete_plugin() {
		delete_option( 'just-comments_settings' );
	}

	justcom_comments_delete_plugin();
}
