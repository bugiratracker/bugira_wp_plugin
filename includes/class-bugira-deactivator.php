<?php

/**
 * Fired during plugin deactivation
 *
 * @link       https://www.bugira.com
 * @since      1.0.0
 *
 * @package    Bugira
 * @subpackage Bugira/includes
 */

/**
 * Fired during plugin deactivation.
 *
 * This class defines all code necessary to run during the plugin's deactivation.
 *
 * @since      1.0.0
 * @package    Bugira
 * @subpackage Bugira/includes
 * @author     Mikhail Kozlov <mkozlov@bugira.com>
 */
class Bugira_Deactivator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function deactivate() {

	    // do a bit of clean up
	    try {
            delete_option('bugira_api_key');
        }catch (Exception $e){
	        // well/
        }
	}

}
