<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    Plugin_Haikufish
 * @subpackage Plugin_Haikufish/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Plugin_Haikufish
 * @subpackage Plugin_Haikufish/public
 * @author     Your Name <email@example.com>
 */
class Plugin_Haikufish_Public {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_haikufish    The ID of this plugin.
	 */
	private $plugin_haikufish;

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
	 * @param      string    $plugin_haikufish       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_haikufish, $version ) {

		$this->plugin_haikufish = $plugin_haikufish;
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
		 * defined in Plugin_Haikufish_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Plugin_Haikufish_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_haikufish, plugin_dir_url( __FILE__ ) . 'css/plugin-haikufish-public.css', array(), $this->version, 'all' );

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
		 * defined in Plugin_Haikufish_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Plugin_Haikufish_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_haikufish, plugin_dir_url( __FILE__ ) . 'js/plugin-haikufish-public.js', array( 'jquery' ), $this->version, false );

	}

}
