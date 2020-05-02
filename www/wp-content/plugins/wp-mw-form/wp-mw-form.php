<?php
/**
 * Plugin Name: WP MW Form
 * Plugin URI: https://plugins.2inc.org/wp-mw-form/
 * Description: WP MW Form is shortcode base contact form plugin. This plugin have many features. For example you can use many validation rules, inquiry data saving, and chart aggregation using saved inquiry data.
 * Version: 4.2.0
 * Author: Takashi Kitajima
 * Author URI: https://2inc.org
 * Created : September 25, 2012
 * Modified: October 25, 2019
 * Text Domain: wp-mw-form
 * License: GPLv2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 */
include_once( plugin_dir_path( __FILE__ ) . 'classes/functions.php' );
include_once( plugin_dir_path( __FILE__ ) . 'classes/config.php' );
include_once( plugin_dir_path( __FILE__ ) . 'classes/deprecated.php' );

class MW_WP_Form {

	public function __construct() {
		add_action( 'plugins_loaded', array( $this, '_load_initialize_files' ), 9 );
		add_action( 'plugins_loaded', array( $this, '_initialize' ), 11 );

		register_uninstall_hook( __FILE__ , array( __CLASS__, '_uninstall' ) );
	}

	/**
	 * Load classes
	 *
	 * @return void
	 */
	public function _load_initialize_files() {
		$plugin_dir_path = plugin_dir_path( __FILE__ );
		$includes = array(
			'/classes/abstract',
			'/classes/controllers',
			'/classes/models',
			'/classes/services',
			'/classes/validation-rules',
			'/classes/form-fields'
		);
		foreach ( $includes as $include ) {
			foreach ( glob( $plugin_dir_path . $include . '/*.php' ) as $file ) {
				require_once( $file );
			}
		}
	}

	/**
	 * Load text domain, The starting point of the process
	 *
	 * @return void
	 */
	public function _initialize() {
		load_plugin_textdomain( 'wp-mw-form' );

		add_action( 'after_setup_theme', array( $this, '_after_setup_theme' ), 11 );
		add_action( 'init'             , array( $this, '_register_post_type' ) );
	}

	/**
	 * Initialize each screens
	 *
	 * @return void
	 */
	public function _after_setup_theme() {
		if ( current_user_can( MWF_Config::CAPABILITY ) && is_admin() ) {
			add_action( 'admin_enqueue_scripts', array( $this, '_admin_enqueue_scripts' ) );
			add_action( 'admin_menu'           , array( $this, '_admin_menu_for_chart' ) );
			add_action( 'admin_menu'           , array( $this, '_admin_menu_for_inquiry_data_list' ) );
			add_action( 'current_screen'       , array( $this, '_current_screen' ) );
		} elseif ( ! is_admin() ) {
			$Controller = new MW_WP_Form_Main_Controller();
		}
	}

	/**
	 * Enqueue assets
	 *
	 * @return void
	 */
	public function _admin_enqueue_scripts() {
		$url = plugins_url( MWF_Config::NAME );
		wp_enqueue_style( MWF_Config::NAME . '-admin-common', $url . '/css/admin-common.css' );
	}

	/**
	 * Add admin menu for chart
	 *
	 * @return void
	 */
	public function _admin_menu_for_chart() {
		$contact_data_post_types = MW_WP_Form_Contact_Data_Setting::get_form_post_types();
		if ( empty( $contact_data_post_types ) ) {
			return;
		}

		add_submenu_page(
			'edit.php?post_type=' . MWF_Config::NAME,
			esc_html__( 'Chart', 'wp-mw-form' ),
			esc_html__( 'Chart', 'wp-mw-form' ),
			MWF_Config::CAPABILITY,
			MWF_Config::NAME . '-chart',
			'__return_false'
		);
	}

	/**
	 * Add admin menu for saved inquiry data
	 *
	 * @return void
	 */
	public function _admin_menu_for_inquiry_data_list() {
		$contact_data_post_types = MW_WP_Form_Contact_Data_Setting::get_form_post_types();
		if ( empty( $contact_data_post_types ) ) {
			return;
		}

		add_submenu_page(
			'edit.php?post_type=' . MWF_Config::NAME,
			__( 'Inquiry data', 'wp-mw-form' ),
			__( 'Inquiry data', 'wp-mw-form' ),
			MWF_Config::CAPABILITY,
			MWF_Config::NAME . '-save-data',
			'__return_false'
		);
	}

	/**
	 * Front controller
	 *
	 * @param WP_Screen $screen
	 * @return void
	 */
	public function _current_screen( $screen ) {
		if ( $screen->id === MWF_Config::NAME ) {
			$Controller = new MW_WP_Form_Admin_Controller();
		}
		elseif ( 'edit-' . MWF_Config::NAME === $screen->id ) {
			$Controller = new MW_WP_Form_Admin_List_Controller();
		}
		elseif ( MWF_Functions::is_contact_data_post_type( $screen->id ) ) {
			$Controller = new MW_WP_Form_Contact_Data_Controller();
		}
		elseif ( preg_match( '/^edit-' . MWF_Config::DBDATA . '\d+$/', $screen->id ) ) {
			$Controller = new MW_WP_Form_Contact_Data_List_Controller();
		}
		elseif ( $screen->id === MWF_Config::NAME . '_page_' . MWF_Config::NAME . '-chart' ) {
			$Controller = new MW_WP_Form_Chart_Controller();
		}
		elseif ( $screen->id === MWF_Config::NAME . '_page_' . MWF_Config::NAME . '-save-data' ) {
			$Controller = new MW_WP_Form_Stores_Inquiry_Data_Form_List_Controller();
		}
	}

	/**
	 * Register post types for WP MW Form and inquiry data
	 *
	 * @return void
	 */
	public function _register_post_type() {
		if ( ! current_user_can( MWF_Config::CAPABILITY ) && is_admin() ) {
			return;
		}

		// WP MW Form のフォーム設定を管理する投稿タイプ
		register_post_type( MWF_Config::NAME, array(
			'label'    => 'WP MW Form',
			'labels'   => array(
				'name' => 'WP MW Form',
				'singular_name'      => 'WP MW Form',
				'add_new_item'       => __( 'Add New Form', 'wp-mw-form' ),
				'edit_item'          => __( 'Edit Form', 'wp-mw-form' ),
				'new_item'           => __( 'New Form', 'wp-mw-form' ),
				'view_item'          => __( 'View Form', 'wp-mw-form' ),
				'search_items'       => __( 'Search Forms', 'wp-mw-form' ),
				'not_found'          => __( 'No Forms found', 'wp-mw-form' ),
				'not_found_in_trash' => __( 'No Forms found in Trash', 'wp-mw-form' ),
			),
			'capability_type' => 'page',
			'public'          => false,
			'show_ui'         => true,
		) );

		$Admin = new MW_WP_Form_Admin();
		$forms = $Admin->get_forms_using_database();
		foreach ( $forms as $form ) {
			$post_type = MWF_Functions::get_contact_data_post_type_from_form_id( $form->ID );
			register_post_type( $post_type, array(
				'label'  => $form->post_title,
				'labels' => array(
					'name'               => $form->post_title,
					'singular_name'      => $form->post_title,
					'edit_item'          => __( 'Edit ', 'wp-mw-form' ) . ':' . $form->post_title,
					'view_item'          => __( 'View', 'wp-mw-form' ) . ':' . $form->post_title,
					'search_items'       => __( 'Search', 'wp-mw-form' ) . ':' . $form->post_title,
					'not_found'          => __( 'No data found', 'wp-mw-form' ),
					'not_found_in_trash' => __( 'No data found in Trash', 'wp-mw-form' ),
				),
				'capability_type' => 'page',
				'public'          => false,
				'show_ui'         => true,
				'show_in_menu'    => false,
				'supports'        => array( 'title' ),
			) );
		}
	}

	/**
	 * Uninstall processes
	 *
	 * @return void
	 */
	public static function _uninstall() {
		$plugin_dir_path = plugin_dir_path( __FILE__ );
		include_once( $plugin_dir_path . 'classes/models/class.admin.php' );
		include_once( $plugin_dir_path . 'classes/models/class.file.php' );

		$Admin = new MW_WP_Form_Admin();
		$forms = $Admin->get_forms();

		$data_post_ids = array();
		foreach ( $forms as $form ) {
			$data_post_ids[] = $form->ID;
			wp_delete_post( $form->ID, true );
		}

		foreach ( $data_post_ids as $data_post_id ) {
			delete_option( MWF_Config::NAME . '-chart-' . $data_post_id );

			$data_posts = get_posts( array(
				'post_type'      => MWF_Functions::get_contact_data_post_type_from_form_id( $data_post_id ),
				'posts_per_page' => -1,
			) );
			if ( empty( $data_posts ) ) {
				continue;
			}

			foreach ( $data_posts as $data_post ) {
				wp_delete_post( $data_post->ID, true );
			}
		}

		$File = new MW_WP_Form_File();
		$File->remove_temp_dir();

		delete_option( MWF_Config::NAME );
	}
}

$MW_WP_Form = new MW_WP_Form();