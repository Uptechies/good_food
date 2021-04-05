<?php
/**
 *	Customizer General Settings
 *	styles for logo/title - sizing, spacing ...
 *
 */

if ( ! defined( 'ABSPATH' ) ) exit;

class Xs_Fields{

	/**
     * Holds the class object.
     *
     * @since 1.0.3
     *
     */

	public static $_instance;

	/**
     * Load Construct
     *
     * @since 1.0.3
     */

	public function __construct(){
		$this->xs_customizer_init();
	}

	/**
     * Customizer field Initialization
     *
     * @since 1.0.3
     *
     */

	public function xs_customizer_init(){
		add_filter( 'kirki/fields', array($this,'guto_lite_general_setting') );
	}

	public function guto_lite_general_setting( $guto_lite_fields ){

		require GUTO_LITE_CUSTOMIZER_DIR . 'general-settings.php' ; // phpcs:ignore WPThemeReview.CoreFunctionality.FileInclude.FileIncludeFound
		require GUTO_LITE_CUSTOMIZER_DIR . 'top-header-settings.php' ; // phpcs:ignore WPThemeReview.CoreFunctionality.FileInclude.FileIncludeFound
		require GUTO_LITE_CUSTOMIZER_DIR . 'nav-settings.php' ; // phpcs:ignore WPThemeReview.CoreFunctionality.FileInclude.FileIncludeFound
        require GUTO_LITE_CUSTOMIZER_DIR . 'banner-settings.php' ; // phpcs:ignore WPThemeReview.CoreFunctionality.FileInclude.FileIncludeFound
        require GUTO_LITE_CUSTOMIZER_DIR . 'blog-settings.php' ; // phpcs:ignore WPThemeReview.CoreFunctionality.FileInclude.FileIncludeFound
        require GUTO_LITE_CUSTOMIZER_DIR . 'shop-settings.php' ; // phpcs:ignore WPThemeReview.CoreFunctionality.FileInclude.FileIncludeFound
        require GUTO_LITE_CUSTOMIZER_DIR . 'newsletter.php' ; // phpcs:ignore WPThemeReview.CoreFunctionality.FileInclude.FileIncludeFound
        require GUTO_LITE_CUSTOMIZER_DIR . 'footer-settings.php' ; // phpcs:ignore WPThemeReview.CoreFunctionality.FileInclude.FileIncludeFound
        require GUTO_LITE_CUSTOMIZER_DIR . 'error-settings.php' ; // phpcs:ignore WPThemeReview.CoreFunctionality.FileInclude.FileIncludeFound
        require GUTO_LITE_CUSTOMIZER_DIR . 'style-settings.php' ; // phpcs:ignore WPThemeReview.CoreFunctionality.FileInclude.FileIncludeFound
        require GUTO_LITE_CUSTOMIZER_DIR . 'typography-settings.php' ; // phpcs:ignore WPThemeReview.CoreFunctionality.FileInclude.FileIncludeFound

		return $guto_lite_fields;
	}

	public static function xs_get_instance() {
        if (!isset(self::$_instance)) {
            self::$_instance = new Xs_Fields();
        }
        return self::$_instance;
    }
}
$Xs_Fields = Xs_Fields::xs_get_instance();