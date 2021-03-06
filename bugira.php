<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://www.bugira.com
 * @since             1.0.0
 * @package           Bugira
 *
 * @wordpress-plugin
 * Plugin Name:       Bugira
 * Plugin URI:        https://github.com/bugiratracker/bugira_wp_plugin
 * Description:       Let your users send you bugreports with ease. Get the most information about the bug without asking extra questions ‐ everything to reproduce an issue is collected automatically.
 * Version:           1.0.4
 * Author:            Bugira.com
 * Author URI:        https://www.bugira.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       bugira
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'BUGIRA_VERSION', '1.0.4' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-bugira-activator.php
 */
function activate_bugira() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-bugira-activator.php';
	Bugira_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-bugira-deactivator.php
 */
function deactivate_bugira() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-bugira-deactivator.php';
	Bugira_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_bugira' );
register_deactivation_hook( __FILE__, 'deactivate_bugira' );


function plugin_add_settings_link( $links ) {
    $settings_link = '<a href="options-general.php?page=bugira">' . __( 'Settings' ) . '</a>';
    array_push( $links, $settings_link );
    return $links;
}

$plugin = plugin_basename( __FILE__ );
add_filter( "plugin_action_links_$plugin", 'plugin_add_settings_link' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-bugira.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_bugira() {

	$plugin = new Bugira();
	$plugin->run();

}
run_bugira();
