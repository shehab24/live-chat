<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://shehab24.github.io/portfolio/
 * @since             1.0.0
 * @package           Live_Chat
 *
 * @wordpress-plugin
 * Plugin Name:       Live chat
 * Plugin URI:        https://wordpress.org/plugins/search/live-chat/
 * Description:       You can chat with your customer with this plugin
 * Version:           1.0.0
 * Author:            Shehab Mahamud
 * Author URI:        https://shehab24.github.io/portfolio/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       live-chat
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
define('LIVE_CHAT_VERSION', '1.0.0');

if (!defined('LC_PLUGIN_URL')) {
	define('LC_PLUGIN_URL', plugin_dir_url(__FILE__));
}

if (!defined('LC_PLUGIN_DIR_PATH')) {
	define('LC_PLUGIN_DIR_PATH', plugin_dir_path(__FILE__));
}


/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-live-chat-activator.php
 */
function activate_live_chat()
{
	require_once plugin_dir_path(__FILE__) . 'includes/class-live-chat-activator.php';
	Live_Chat_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-live-chat-deactivator.php
 */
function deactivate_live_chat()
{
	require_once plugin_dir_path(__FILE__) . 'includes/class-live-chat-deactivator.php';
	Live_Chat_Deactivator::deactivate();
}

register_activation_hook(__FILE__, 'activate_live_chat');
register_deactivation_hook(__FILE__, 'deactivate_live_chat');

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path(__FILE__) . 'includes/class-live-chat.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_live_chat()
{

	$plugin = new Live_Chat();
	$plugin->run();

}
run_live_chat();