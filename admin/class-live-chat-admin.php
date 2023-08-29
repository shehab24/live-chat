<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://shehab24.github.io/portfolio/
 * @since      1.0.0
 *
 * @package    Live_Chat
 * @subpackage Live_Chat/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Live_Chat
 * @subpackage Live_Chat/admin
 * @author     Shehab Mahamud <mdshehab204@gmail.com>
 */
require_once plugin_dir_path(dirname(__FILE__)) . 'includes/constants.php';

class Live_Chat_Admin
{

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct($plugin_name, $version)
	{

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles()
	{

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Live_Chat_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Live_Chat_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style($this->plugin_name, plugin_dir_url(__FILE__) . 'css/live-chat-admin.css', array(), $this->version, 'all');
		wp_enqueue_style('bootstrap-min-css', plugin_dir_url(__FILE__) . 'css/bootstrap.min.css', array(), $this->version, 'all');

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts()
	{

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Live_Chat_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Live_Chat_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script($this->plugin_name, plugin_dir_url(__FILE__) . 'js/live-chat-admin.js', array('jquery'), $this->version, false);

	}

	public function lc_admin_menu_setup()
	{
		add_menu_page(
			'Live Chat',
			'Live Chat',
			'manage_options',
			'live-chat-real-time',
			array($this, 'lc_menu_page_dashboard'),
			'dashicons-tagcloud',
			6
		);

		add_submenu_page(
			'live-chat-real-time',
			'Dashboard',
			'Dashboard',
			'manage_options',
			'live-chat-real-time',
			array($this, 'lc_menu_page_dashboard'),

		);
		add_submenu_page(
			'live-chat-real-time',
			'Settings',
			'Settings',
			'manage_options',
			'lc-setting',
			array($this, 'lc_settings_submenu'),

		);


	}



	public function lc_menu_page_dashboard()
	{

		require_once plugin_dir_path(dirname(__FILE__)) . 'admin/partials/live-chat-admin-display.php';
		

	}

	public function lc_settings_submenu()
	{
		echo "<h1>This is submenu dashboard</h1>";

	}

	public function save_msg_into_database_from_admin(){
	

		global $wpdb ;

		$admin_send_input = isset($_POST['admin_send_input']) ? $_POST['admin_send_input'] : "";
		$date = current_time( 'Y-m-d H:i:s' );


		$data = array(
           'admin_msg'=>$admin_send_input ,
		    'date'    =>$date
		);

		$success = $wpdb->insert( LC_LIVE_CHAT_TABLE, $data );

		echo $success ;
		die() ;
	}

	

}