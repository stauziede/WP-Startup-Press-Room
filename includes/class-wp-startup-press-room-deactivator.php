<?php

/**
 * Fired during plugin deactivation
 *
 * @link       http://stephanetauziede.com
 * @since      1.0.0
 *
 * @package    Wp_Startup_Press_Room
 * @subpackage Wp_Startup_Press_Room/includes
 */

/**
 * Fired during plugin deactivation.
 *
 * This class defines all code necessary to run during the plugin's deactivation.
 *
 * @since      1.0.0
 * @package    Wp_Startup_Press_Room
 * @subpackage Wp_Startup_Press_Room/includes
 * @author     Stephane Tauziede <stauziede@gmail.com>
 */
class Wp_Startup_Press_Room_Deactivator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function deactivate() {
        flush_rewrite_rules();
	}

}
