<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://ridwan-arifandi
 * @since      1.0.0
 *
 * @package    Ordv_Wa_Automator
 * @subpackage Ordv_Wa_Automator/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Ordv_Wa_Automator
 * @subpackage Ordv_Wa_Automator/includes
 * @author     Ridwan Arifandi <orangerdigiart@gmail.com>
 */
class Ordv_Wa_Automator_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'ordv-wa-automator',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
