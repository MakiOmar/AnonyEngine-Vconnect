<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://github.com/MakiOmar
 * @since      1.0.0
 *
 * @package    Anonyengine_Vconnect
 * @subpackage Anonyengine_Vconnect/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Anonyengine_Vconnect
 * @subpackage Anonyengine_Vconnect/includes
 * @author     Mohammad Omar <maki3omar@gmail.com>
 */
class Anonyengine_Vconnect_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'anonyengine-vconnect',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);
	}
}
