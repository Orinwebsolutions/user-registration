<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://www.linkedin.com/in/amila-priyankara-523b64120/
 * @since      1.0.0
 *
 * @package    Wp_Login_Regis
 * @subpackage Wp_Login_Regis/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Wp_Login_Regis
 * @subpackage Wp_Login_Regis/includes
 * @author     Amila Priyanakara <amilapriyankara16@gmail.com>
 */
class Wp_Login_Regis_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'wp-login-regis',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
