<?php

/**
 * caught my eye Google Analytics for YouTube Tracking
 *
 * @link              https://github.com/marklchaves/cme-ga4yt
 * @since             0.0.1
 * @package           Cme_Ga4yt
 *
 * @wordpress-plugin
 * Plugin Name:       cme Google Analytics for YouTube Tracking
 * Plugin URI:        https://github.com/marklchaves/ashtabula
 * Description:       Google Analytics for YouTube Tracking
 * Version:           0.0.1
 * Author:            caught my eye
 * Author URI:        https://www.caughtmyeye.cc
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       cme-ga4yt
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
    die;
}

define( 'CME_GA4YT_PLUGIN_NAME', 'cme-ga4yt' );
define( 'CME_GA4YT_PLUGIN_VERSION', '1.0.0' );

/**
 * Helper function.
 */
function cme_ga4yt_get_user_id() {
    $current_user = wp_get_current_user();
    if ( ! ( $current_user instanceof WP_User ) ) {
      return;
    }
    $user_ID = $current_user->ID;
    return $user_ID;
}

/**
 * Enqueue Scripts
 */

function enqueue_cme_ga4yt_javascript()
{	
	// Add the cme-ga4yt JS library to footer section.
    wp_register_script( CME_GA4YT_PLUGIN_NAME, plugin_dir_url( __FILE__ ) . 'public/js/' . CME_GA4YT_PLUGIN_NAME . '.js', '', CME_GA4YT_PLUGIN_VERSION, true ); 

    wp_enqueue_script( CME_GA4YT_PLUGIN_NAME );

    // Prep for user ID tracking
    $user_ID = cme_ga4yt_get_user_id();
    $script  =  <<<EOT
let cmeGa4ytUserId = $user_ID;
EOT;

    wp_add_inline_script(CME_GA4YT_PLUGIN_NAME, $script, 'before');

}
add_action( 'wp_enqueue_scripts', 'enqueue_cme_ga4yt_javascript' );
