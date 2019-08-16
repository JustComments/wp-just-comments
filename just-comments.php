<?php
/*
 * Plugin Name: JustComments
 * Plugin URI: https://just-comments.com
 * Description: Adds JustComments to your site replacing original WP comments
 * Text Domain: just-comments
 * Version: 1.0.0
 * Author: Oleksii Rudenko
 * Author URI: https://alex-rudenko.com
 * License: MIT
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
require_once( JUST_COMMENTS_DIR . '/frontend/class-just-comments-frontend.php' );
$just_comments = new Just_Comments_Plugin();
