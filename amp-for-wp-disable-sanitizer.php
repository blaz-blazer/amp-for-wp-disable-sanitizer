<?php

/**
 * @link              http://wordpress.org/plugins/rate-my-post/
 * @since             2.0.0
 * @package           Rate my Post
 *
 * @wordpress-plugin
 * Plugin Name: 	  	AMP for WP - Disable Sanitizer
 * Description:       Disables sanitizer in AMP for WP plugin which is required to use Rate my Post on AMP pages
 * Version:           1.0
 * Author:            Blaz K.
 * Author URI:        https://blazzdev.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

add_action('init', 'amp_new_class_sanitizer');
function amp_new_class_sanitizer() {
    require_once plugin_dir_path(__FILE__) .'/class-amp-blacklist.php';
}

add_filter('amp_content_sanitizers','amp_custom_blacklist', 100);
function amp_custom_blacklist( $data ){
 unset($data['AMP_Blacklist_Sanitizer']);
 $data[ 'AMP_New_Blacklist' ] = array();
 return $data;
}
