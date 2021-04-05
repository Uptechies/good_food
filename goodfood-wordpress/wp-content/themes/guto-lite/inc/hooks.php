<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Theme’s filters and actions
 */

require get_parent_theme_file_path( '/inc/hooks/widget-register.php' ); // phpcs:ignore WPThemeReview.CoreFunctionality.FileInclude.FileIncludeFound
require get_parent_theme_file_path( '/inc/hooks/tgmpa-plugins.php' ); // phpcs:ignore WPThemeReview.CoreFunctionality.FileInclude.FileIncludeFound
require get_parent_theme_file_path( '/inc/hooks/blog.php' ); // phpcs:ignore WPThemeReview.CoreFunctionality.FileInclude.FileIncludeFound
require get_parent_theme_file_path( '/inc/hooks/theme-hooks.php' ); // phpcs:ignore WPThemeReview.CoreFunctionality.FileInclude.FileIncludeFound