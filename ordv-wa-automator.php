<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://ridwan-arifandi
 * @since             1.0.0
 * @package           Ordv_Wa_Automator
 *
 * @wordpress-plugin
 * Plugin Name:       Whatsapp Automator
 * Plugin URI:        https://ridwan-arifandi
 * Description:       Create automation based on WhatsApp Event with Thrive Automator
 * Version:           1.0.0
 * Author:            Ridwan Arifandi
 * Author URI:        https://ridwan-arifandi
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       ordv-wa-automator
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if (!defined('WPINC')) {
  die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define('ORDV_WA_AUTOMATOR_VERSION', '1.0.0');
define('ORDV_WA_AUTOMATOR_PLUGIN_DIR', plugin_dir_path(__FILE__));
define('ORDV_WA_AUTOMATOR_PLUGIN_URL', plugin_dir_url(__FILE__));

/**
 * Load all the composer dependencies
 */
require_once plugin_dir_path(__FILE__) . 'vendor/autoload.php';

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-ordv-wa-automator-activator.php
 */
function activate_ordv_wa_automator()
{
  require_once plugin_dir_path(__FILE__) . 'includes/class-ordv-wa-automator-activator.php';
  Ordv_Wa_Automator_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-ordv-wa-automator-deactivator.php
 */
function deactivate_ordv_wa_automator()
{
  require_once plugin_dir_path(__FILE__) . 'includes/class-ordv-wa-automator-deactivator.php';
  Ordv_Wa_Automator_Deactivator::deactivate();
}

register_activation_hook(__FILE__, 'activate_ordv_wa_automator');
register_deactivation_hook(__FILE__, 'deactivate_ordv_wa_automator');

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path(__FILE__) . 'includes/class-ordv-wa-automator.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_ordv_wa_automator()
{

  $plugin = new Ordv_Wa_Automator();
  $plugin->run();
}
run_ordv_wa_automator();