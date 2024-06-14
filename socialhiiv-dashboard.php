<?php
/**
 * Plugin Name: Socialhiiv Dashboard
 * Version: 1.0
 * Description: Social Media Controller
 * Author: Abubakar Wazih Tushar @esferasoft
 * Requires at least: 5.6
 * Tested up to: 6.5.4
 * Requires PHP: 7.4
 *
 * Text Domain: hiive
 * Domain Path: /languages/
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}


if ( ! function_exists( 'hiive_social') ) {
	function hiive_social() {
		defined( 'HIIVE_VER' )		|| define( 'HIIVE_VER', '1.0' );
		defined( 'HIIVE_FILE' )		|| define( 'HIIVE_FILE', __FILE__ );
		defined( 'HIIVE_DIR' )		|| define( 'HIIVE_DIR', dirname( HIIVE_FILE ) );
		defined( 'HIIVE_DIRNAME' )	|| define( 'HIIVE_DIRNAME', 'socialhiiv-dashboard-1' );
		defined( 'HIIVE_URL' )		|| define( 'HIIVE_URL', plugin_dir_url( HIIVE_FILE ) );
		defined( 'HIIVE_PATH' )		|| define( 'HIIVE_PATH', plugin_dir_path( HIIVE_FILE ) );
		defined( 'HIIVE_ASSETS_DIR' )	|| define( 'HIIVE_ASSETS_DIR', trailingslashit( HIIVE_DIR ) . 'assets' );
		defined( 'HIIVE_ASSETS_URL' )	|| define( 'HIIVE_ASSETS_URL', esc_url( trailingslashit( plugins_url( '/assets/', HIIVE_FILE ) ) ) );


        define('PLUGIN_ROOT_PATH', plugin_dir_path( __FILE__ ));
        define('FACEBOOK_REDIRECT_URL', "https://socialhiiv.lv/user/dashboard");
        define('IMG_DIR', HIIVE_URL . "assets/img");
		
		# load text domain
		add_action( 'plugins_loaded', function() {
			load_plugin_textdomain( 'hiive', false, dirname( plugin_basename( HIIVE_FILE ) ) . '/languages/' );
		});
		// var_dump( HIIVE_PATH );
		# load class
        require_once HIIVE_PATH . 'includes/facebook/auth/class-facebook-auth.php';
        require_once HIIVE_PATH . 'includes/db_handler/class-user-data-store.php';
		require HIIVE_PATH . 'router.php';
		require HIIVE_PATH . 'social-handle-ajax-request.php';
	}
}
hiive_social();
