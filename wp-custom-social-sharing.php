<?php
/**
 * Plugin Name: WP Custom Social Sharing
 * Description: A plugin to display social sharing.
 * Version: 1.5
 * Author: Alok Shrestha
 * Author URI: https://alokshrestha.comnp
 * Text Domain: wcss-social-share
 * License: GPLv3 or later
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( 'Wcss_Social_Share' ) ) {
    /**
    * Wcss_Social_share class manages all the backend attributes of plugin.
    */
    class Wcss_Social_Share {
        /**
        * Constructor Class
        */
        public function __construct() {

            $this->wcss_define_constants();
            
            $this->wcss_default_options_settings();

            add_action( 'admin_menu', array( $this, 'wcss_add_menu_item' ) );

            add_action( 'admin_enqueue_scripts', array( $this, 'wcss_admin_enqueues' ) );

        }


        /**
        * Define Plugin Constant
        */
        public function wcss_define_constants() {

            if ( ! defined( 'WCSS_PLUGIN_DIR' ) ) {
                define( 'WCSS_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
            }

            if ( ! defined( 'WCSS_PLUGIN_URL' ) ) {
                define( 'WCSS_PLUGIN_URL', plugins_url( '/', __FILE__ ) );
            }
        }


        /**
        * Add Option Page. Comes under Settings menu in backend.
        */
        public function wcss_add_menu_item() {
            add_options_page( __( 'WP Custom Social Sharing', 'wcss-social-share' ), __( 'Social Sharing', 'wcss-social-share' ), 'manage_options', 'wcss-social-share', array( $this, 'wcss_settings_page' ) );
        }


        /**
        * Call Settings html content
        */
        public function wcss_settings_page() {

            require WCSS_PLUGIN_DIR . 'admin-view/admin-settings-page.php';
        }


        /**
        * Admin enqueue scripts
        */
        public function wcss_admin_enqueues() {

            wp_enqueue_style( 'wp-color-picker' );
            wp_enqueue_style( 'wcss-admin-fontawesome', WCSS_PLUGIN_URL . 'assets/css/all.min.css' );

            wp_enqueue_style( 'wcss-admin-style', WCSS_PLUGIN_URL .'assets/css/wcss-admin-style.css' );
            wp_enqueue_style( 'fonts', 'https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap' );

            wp_enqueue_script( 'jquery-ui-sortable' );
            wp_enqueue_script( 'wcss-admin-script', WCSS_PLUGIN_URL . 'assets/js/wcss-admin-script.js', array( 'wp-color-picker' ), false, true );
        }


        /**
        * Return default admin form setting.
        */
        public function wcss_default_options_settings() {
            $default_setting = array(
                'wcss_social_sharing' => array(
                    'facebook'      => array(
                        'enable' => 'yes',
                        'color'  => '',
                    ),
                    'twitter'       => array(
                        'enable' => 'yes',
                        'color'  => '',
                    ),
                    'pinterest'     => array(
                        'enable' => 'yes',
                        'color'  => '',
                    ),
                    'linkedin'      => array(
                        'enable' => 'yes',
                        'color'  => '',
                    ),
                    'blogger'      => array(
                        'enable' => 'yes',
                        'color'  => '',
                    ),
                    'buffer'      => array(
                        'enable' => 'yes',
                        'color'  => '',
                    ),
                    'digg'      => array(
                        'enable' => 'yes',
                        'color'  => '',
                    ),
                    'email'      => array(
                        'enable' => 'yes',
                        'color'  => '',
                    ),
                    'evernote'      => array(
                        'enable' => 'yes',
                        'color'  => '',
                    ),
                    'flipboard'      => array(
                        'enable' => 'yes',
                        'color'  => '',
                    ),
                    'odnoklassniki'      => array(
                        'enable' => 'yes',
                        'color'  => '',
                    ),
                    'pocket'      => array(
                        'enable' => 'yes',
                        'color'  => '',
                    ),
                    'reddit'      => array(
                        'enable' => 'yes',
                        'color'  => '',
                    ),
                    'renren'      => array(
                        'enable' => 'yes',
                        'color'  => '',
                    ),
                    'skype'      => array(
                        'enable' => 'yes',
                        'color'  => '',
                    ),
                    'stumbleupon'      => array(
                        'enable' => 'yes',
                        'color'  => '',
                    ),
                    'telegram'      => array(
                        'enable' => 'yes',
                        'color'  => '',
                    ),
                    'tumblr'      => array(
                        'enable' => 'yes',
                        'color'  => '',
                    ),
                    'viadeo'      => array(
                        'enable' => 'yes',
                        'color'  => '',
                    ),
                    'viber'      => array(
                        'enable' => 'yes',
                        'color'  => '',
                    ),
                    'vk'      => array(
                        'enable' => 'yes',
                        'color'  => '',
                    ),
                    'whatsapp'      => array(
                        'enable' => 'yes',
                        'color'  => '',
                    ),
                    'ycombinator'      => array(
                        'enable' => 'yes',
                        'color'  => '',
                    ),
                    'xing'      => array(
                        'enable' => 'yes',
                        'color'  => '',
                    ),
                    'yammer'      => array(
                        'enable' => 'yes',
                        'color'  => '',
                    ),
                    'post_type'     => array(),
                    'button_order'  => 'facebook,twitter,pinterest,linkedin,blogger,buffer,digg,email,evernote,flipboard,odnoklassniki,pocket,reddit,renren,skype,stumbleupon,telegram,tumblr,viadeo,viber,vk,whatsapp,ycombinator,xing,yammer',
                    'icon_position' => array(),
                    'button_size'   => 'medium',
                    'button_label'  => 'Share This:',

                ),
            );

            $settings = get_option( 'wcss_settings_options' );

            if ( empty( $settings ) ) {
                update_option( 'wcss_settings_options', $default_setting );
            }

            return $default_setting;
        }
    }

    $wcss = new Wcss_Social_Share();
}
