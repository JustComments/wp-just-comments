<?php
/*
 * Plugin Name: JustComments WP
 * Plugin URI: https://just-comments.com
 * Description: Add JustComments to your website using a WP plugin
 * Text Domain: just-comments
 * Version: 1.0.0
 * Author:
 * Author URI:
 * License:
 */

defined( 'ABSPATH' ) || exit;

define( 'JUST_COMMENTS_DIR', dirname( __FILE__ ) );
define( 'JUST_COMMENTS_FILE', __FILE__ );

if ( ! class_exists( 'WordPress_SimpleSettings' ) ) {
	require_once( JUST_COMMENTS_DIR . '/includes/class-wordpress-simple-settings.php' );
}

require_once JUST_COMMENTS_DIR . '/includes/class-just-comments-plugin.php';
require_once( JUST_COMMENTS_DIR . '/includes/class-just-comments-settings.php' );
require_once JUST_COMMENTS_DIR . '/admin/class-just-comments-admin.php';
require_once( JUST_COMMENTS_DIR . '/frontend/class-just-comments-frontend.php' );

$just_comments = new Just_Comments_Plugin();
