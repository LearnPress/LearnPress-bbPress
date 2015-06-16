<?php
/*
Plugin Name: LearnPress bbPress Integration
Plugin URI: http://thimpress.com/learnpress
Description: Using the forum for courses provided by bbPress
Author: thimpress
Version: beta
Author URI: http://thimpress.com
Tags: learnpress, lms
*/

if ( !defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
define( 'LPR_BBP_PATH', dirname( __FILE__ ) );
/**
 * Register bbPress addon
 */
function learn_press_register_bbpress() {
    require_once( LPR_BBP_PATH . '/init.php' );
}

add_action( 'learn_press_register_add_ons', 'learn_press_register_bbpress' );