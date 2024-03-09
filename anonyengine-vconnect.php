<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://github.com/MakiOmar
 * @since             1.0.0
 * @package           Anonyengine_Vconnect
 *
 * @wordpress-plugin
 * Plugin Name:       AnonyEnging Vconnect
 * Plugin URI:        https://makiomar.com
 * Description:       Create Vconnect Meetings.
 * Version:           1.0.0
 * Author:            Mohammad Omar
 * Author URI:        https://github.com/MakiOmar/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       anonyengine-vconnect
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
define( 'ANONYENGINE_VCONNECT_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-anonyengine-vconnect-activator.php
 */
function activate_anonyengine_vconnect() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-anonyengine-vconnect-activator.php';
	Anonyengine_Vconnect_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-anonyengine-vconnect-deactivator.php
 */
function deactivate_anonyengine_vconnect() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-anonyengine-vconnect-deactivator.php';
	Anonyengine_Vconnect_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_anonyengine_vconnect' );
register_deactivation_hook( __FILE__, 'deactivate_anonyengine_vconnect' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-anonyengine-vconnect.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_anonyengine_vconnect() {

	$plugin = new Anonyengine_Vconnect();
	$plugin->run();

}
run_anonyengine_vconnect();
