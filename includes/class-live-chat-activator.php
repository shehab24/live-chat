<?php

/**
 * Fired during plugin activation
 *
 * @link       https://shehab24.github.io/portfolio/
 * @since      1.0.0
 *
 * @package    Live_Chat
 * @subpackage Live_Chat/includes
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    Live_Chat
 * @subpackage Live_Chat/includes
 * @author     Shehab Mahamud <mdshehab204@gmail.com>
 */

require_once LC_PLUGIN_DIR_PATH . 'includes/constants.php';

class Live_Chat_Activator
{

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function activate()
	{

		global $wpdb;
		$charset_collate = $wpdb->get_charset_collate();
		require_once ABSPATH . 'wp-admin/includes/upgrade.php';



		$sql = "CREATE TABLE IF NOT EXISTS " . LC_LIVE_CHAT_TABLE . " (
			`Id` INT NOT NULL AUTO_INCREMENT,
			`admin_msg` LONGTEXT NOT NULL,
			`clients_msg` LONGTEXT NOT NULL,
			`date` TIMESTAMP NOT NULL,
			PRIMARY KEY (`Id`)
		) ENGINE = InnoDB $charset_collate";


		dbDelta($sql);

	}

}