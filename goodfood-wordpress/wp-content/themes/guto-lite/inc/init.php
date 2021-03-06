<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

class Guto_Theme_Includes {

	private static $rel_path	 = null;
	private static $initialized	 = false;

	public static function init() {


		if ( class_exists( 'XsCustomPost\Xs_CustomPost' ) ) {

			$tab = new XsCustomPost\Xs_CustomPost( 'guto-lite' );

		}

		if ( self::$initialized ) {
			return;
		} else {
			self::$initialized = true;
		}

		/**
		 * Both frontend and backend
		 */ {
			self::include_child_first( '/helpers.php' );
			self::include_child_first( '/hooks.php' );
			self::include_child_first( '/woocommerce.php' );
			self::include_child_first( '/includes/enqueue-inline.php' );
			self::include_child_first( '/includes/class-tgm-plugin-activation.php' );
			self::include_child_first( '/includes/template-tags.php' );
			self::include_child_first( '/includes/option-types.php' );
			self::include_child_first( '/customizer/customizer-config.php' );
			self::include_child_first( '/markup-extras.php' );

			add_action( 'init', array( __CLASS__, '_action_init' ) );
		}

		/**
		 * Only frontend
		 */
		if ( !is_admin() ) {
			add_action( 'wp_enqueue_scripts', array( __CLASS__, '_action_enqueue_scripts' ), 20 // Include later to be able to make wp_dequeue_style|script()
			);
		}

	}
	private static function get_rel_path( $append = '' ) {
		if ( self::$rel_path === null ) {
			self::$rel_path = '/inc';
		}

		return self::$rel_path . $append;
	}

	/**
	 * @param string $dirname 'foo-bar'
	 * @return string 'Foo_Bar'
	 */
	private static function dirname_to_classname( $dirname ) {
		$class_name	 = explode( '-', $dirname );
		$class_name	 = array_map( 'ucfirst', $class_name );
		$class_name	 = implode( '_', $class_name );

		return $class_name;
	}

	public static function get_parent_path( $rel_path ) {
		return get_template_directory() . self::get_rel_path( $rel_path );
	}

	public static function get_child_path( $rel_path ) {
		if ( !is_child_theme() ) {
			return null;
		}

		return get_stylesheet_directory() . self::get_rel_path( $rel_path );
	}

	public static function include_isolated( $path ) {
        include $path; // phpcs:ignore WPThemeReview.CoreFunctionality.FileInclude.FileIncludeFound
	}

	public static function include_child_first( $rel_path ) {
		if ( is_child_theme() ) {
			$path = self::get_child_path( $rel_path );

			if ( file_exists( $path ) ) {
				self::include_isolated( $path );
			}
		} {
			$path = self::get_parent_path( $rel_path );

			if ( file_exists( $path ) ) {
				self::include_isolated( $path );
			}
		}
	}

	/**
	 * @internal
	 */
	public static function _action_enqueue_scripts() {
		self::include_child_first( '/static.php' );
	}

	/**
	 * @internal
	 */
	public static function _action_init() {
		self::include_child_first( '/menus.php' );
	}
}

Guto_Theme_Includes::init();