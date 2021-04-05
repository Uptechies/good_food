<?php
/**
 * Guto Lite functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Guto Lite
 * @since 1.0.3
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Define Constants
 */
define('GUTO_LITE_THEME', 'Starter Websites WordPress Theme');
define('GUTO_LITE_VERSION', '1.0');
define('GUTO_LITE_THEMEROOT', get_template_directory_uri());
define('GUTO_LITE_THEMEROOT_DIR', get_parent_theme_file_path());
define('GUTO_LITE_IMAGES', GUTO_LITE_THEMEROOT . '/assets/img');
define('GUTO_LITE_IMAGES_DIR', GUTO_LITE_THEMEROOT_DIR . '/assets/img');
define('GUTO_LITE_IMAGES_URI', GUTO_LITE_THEMEROOT . '/assets/img');
define('GUTO_LITE_CSS', GUTO_LITE_THEMEROOT . '/assets/css');
define('GUTO_LITE_CSS_DIR', GUTO_LITE_THEMEROOT_DIR . '/assets/css');
define('GUTO_LITE_SCRIPTS', GUTO_LITE_THEMEROOT . '/assets/js');
define('GUTO_LITE_SCRIPTS_DIR', GUTO_LITE_THEMEROOT_DIR . '/assets/js');
define('GUTO_LITE_PHPSCRIPTS', GUTO_LITE_THEMEROOT . '/assets/php');
define('GUTO_LITE_PHPSCRIPTS_DIR', GUTO_LITE_THEMEROOT_DIR . '/assets/php');
define('GUTO_LITE_INC', GUTO_LITE_THEMEROOT_DIR . '/inc');
define('GUTO_LITE_CUSTOMIZER_DIR', GUTO_LITE_INC . '/customizer/');
define('GUTO_LITE_PLUGINS_DIR', GUTO_LITE_INC . '/includes/plugins');


/**
 * Set up theme default and register various supported features.
 */
if (!function_exists('guto_lite_setup')) {

    function guto_lite_setup()
    {
        /**
         * Make the theme available for translation.
         */
        load_theme_textdomain( 'guto-lite', get_template_directory() . '/languages' );
		$locale		 = get_locale();
		$locale_file = get_template_directory() . "/languages/$locale.php";

		if ( is_readable( $locale_file ) ) {
			require_once( $locale_file );
		}

        /**
         * Add support for post formats.
         */
        add_theme_support('post-formats', array('standard'));

        /**
         * Add support for automatic feed links.
         */
        add_theme_support('automatic-feed-links');

        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support('woocommerce');
        add_theme_support('title-tag');

        /**
         * Add support for post thumbnails.
         */
        add_theme_support('post-thumbnails');

        /**
         * Add custom image size
         */
		add_image_size( 'guto_lite_post_thumb', 542, 542, true );
		add_image_size( 'guto_lite_single_post_thumb', 790, 450, true );
		add_image_size( 'guto_lite_thumb_size', 790, 450, true );

        /**
         * Register nav menus.
         */
        register_nav_menus(
            array(
                'primary'   => esc_html__('Primary Menu', 'guto-lite'),
                'footer'    => esc_html__('Footer Menu', 'guto-lite'),
            )
        );

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support('html5', array(
            'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
        ));

        // Set up the WordPress core custom background feature.
		$args = array(
            'default-color' => 'fff',
            'default-image' => '',
        );
        add_theme_support( 'custom-background', $args );


        // Set up the WordPress core custom header feature.
        add_theme_support( 'custom-header' );

        /*
        * Enable support for wide alignment class for Gutenberg blocks.
        */
        add_theme_support( 'align-wide' );

        /**
         * Registers an editor stylesheet for the theme.
         */
        add_editor_style( 'custom-editor-style.css' );
    }

    add_action('after_setup_theme', 'guto_lite_setup');
}

// Include necessary files
include_once get_template_directory() . '/inc/init.php';

add_action( 'admin_menu', 'guto_lite_remove_theme_settings', 999 );
function guto_lite_remove_theme_settings() {
    remove_submenu_page( 'themes.php', 'fw-settings' );
}