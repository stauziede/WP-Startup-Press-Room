<?php

/**
 * Fired during plugin activation
 *
 * @link       http://stephanetauziede.com
 * @since      1.0.0
 *
 * @package    Wp_Startup_Press_Room
 * @subpackage Wp_Startup_Press_Room/includes
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    Wp_Startup_Press_Room
 * @subpackage Wp_Startup_Press_Room/includes
 * @author     Stephane <stauziede@gmail.com>
 */
class Wp_Startup_Press_Room_Activator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function activate() {
        flush_rewrite_rules();
	}

}
