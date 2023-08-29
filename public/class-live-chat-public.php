<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       https://shehab24.github.io/portfolio/
 * @since      1.0.0
 *
 * @package    Live_Chat
 * @subpackage Live_Chat/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Live_Chat
 * @subpackage Live_Chat/public
 * @author     Shehab Mahamud <mdshehab204@gmail.com>
 */
class Live_Chat_Public {

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
	 * @param      string    $plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

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

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/live-chat-public.css', array(), $this->version, 'all' );
		wp_enqueue_style( 'public-bootstrap-min-css', plugin_dir_url( __FILE__ ) . 'css/bootstrap.min.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

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
		wp_localize_script('your-public-script', 'ajax_obj', array(
            'ajax_url' => admin_url('admin-ajax.php'),
            // Add more localized data here as needed
        ));

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/live-chat-public.js', array( 'jquery' ), $this->version, false );
	

	}

	public function show_chat_option_on_frontend(){
     
		require_once plugin_dir_path(dirname(__FILE__)) . 'public/partials/live-chat-public-display.php';

	}

	public function save_public_chating_user_into_database(){
		global $wpdb ;
		$user_name = isset($_POST['user_name']) ? $_POST['user_name'] : "";
		$user_email = isset($_POST['user_email']) ? $_POST['user_email'] : "";
		$date = current_time( 'Y-m-d H:i:s' );

		$data = array(
			'name'=>$user_name ,
			'email'=>$user_email ,
			 'date'    =>$date
		 );
 
		 $success = $wpdb->insert( LC_CHAT_USER_LIST_TABLE, $data );
 
		 echo $success ;


		die();
	}

}
