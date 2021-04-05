<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

function guto_lite_action_theme_include_custom_option_types() {
    if (is_admin()) {
        $dir = GUTO_LITE_INC . '/includes';
        require_once $dir . '/option-types/new-icon/class-fw-option-type-new-icon.php'; // phpcs:ignore WPThemeReview.CoreFunctionality.FileInclude.FileIncludeFound
        require_once $dir . '/option-types/fw-multi-inline/class-fw-option-type-fw-multi-inline.php'; // phpcs:ignore WPThemeReview.CoreFunctionality.FileInclude.FileIncludeFound
    }
}
add_action('fw_option_types_init', 'guto_lite_action_theme_include_custom_option_types');