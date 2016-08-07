<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       http://stephanetauziede.com
 * @since      1.0.0
 *
 * @package    Wp_Startup_Press_Room
 * @subpackage Wp_Startup_Press_Room/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Wp_Startup_Press_Room
 * @subpackage Wp_Startup_Press_Room/includes
 * @author     Stephane Tauziede <stauziede@gmail.com>
 */
class Wp_Startup_Press_Room_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'wp-startup-press-room',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
