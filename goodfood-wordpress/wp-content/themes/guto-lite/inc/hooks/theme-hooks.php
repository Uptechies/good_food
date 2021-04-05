<?php
/**
 * Theme Hook Alliance hook stub list.
 *
 * @see  https://github.com/zamoose/themehookalliance
 *
 * @package     Guto Lite
 * @author      Guto Lite
 * @copyright   Copyright (c) 2020, Guto Lite
 * @link        https://gutotheme.com/
 * @since       Guto Lite 1.0.3
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Themes and Plugins can check for guto_lite_hooks using current_theme_supports( 'guto_lite_hooks', $hook )
 * to determine whether a theme declares itself to support this specific hook type.
 *
 * Example:
 * <code>
 *      // Declare support for all hook types
 *      add_theme_support( 'guto_lite_hooks', array( 'all' ) );
 *
 *      // Declare support for certain hook types only
 *      add_theme_support( 'guto_lite_hooks', array( 'header', 'content', 'footer' ) );
 * </code>
 */
add_theme_support(
	'guto_lite_hooks',
	array(

		/**
		 * As a Theme developer, use the 'all' parameter, to declare support for all
		 * hook types.
		 * Please make sure you then actually reference all the hooks in this file,
		 * Plugin developers depend on it!
		 */
		'all',

		/**
		 * Themes can also choose to only support certain hook types.
		 * Please make sure you then actually reference all the hooks in this type
		 * family.
		 *
		 * When the 'all' parameter was set, specific hook types do not need to be
		 * added explicitly.
		 */
		'html',
		'body',
		'head',
		'header',
		'content',
		'entry',
		'comments',
		'sidebars',
		'sidebar',
		'footer',

	/**
	 * If/when WordPress Core implements similar methodology, Themes and Plugins
	 * will be able to check whether the version of THA supplied by the theme
	 * supports Core hooks.
	 */
	)
);

/**
 * Determines, whether the specific hook type is actually supported.
 *
 * Plugin developers should always check for the support of a <strong>specific</strong>
 * hook type before hooking a callback function to a hook of this type.
 *
 * Example:
 * <code>
 *      if ( current_theme_supports( 'guto_lite_hooks', 'header' ) )
 *          add_action( 'guto_lite_head_top', 'prefix_header_top' );
 * </code>
 *
 * @param bool  $bool true.
 * @param array $args The hook type being checked.
 * @param array $registered All registered hook types.
 *
 * @return bool
 */
function guto_lite_current_theme_supports( $bool, $args, $registered ) {
	return in_array( $args[0], $registered[0] ) || in_array( 'all', $registered[0] );
}
add_filter( 'current_theme_supports-guto_lite_hooks', 'guto_lite_current_theme_supports', 10, 3 );

/**
 * HTML <html> hook
 * Special case, useful for <DOCTYPE>, etc.
 * $guto_lite_supports[] = 'html;
 */
function guto_lite_html_before() {
	do_action( 'guto_lite_html_before' );
}
/**
 * HTML <body> hooks
 * $guto_lite_supports[] = 'body';
 */
function guto_lite_body_top() {
	do_action( 'guto_lite_body_top' );
}

/**
 * Body Bottom
 */
function guto_lite_body_bottom() {
	do_action( 'guto_lite_body_bottom' );
}

/**
 * HTML <head> hooks
 *
 * $guto_lite_supports[] = 'head';
 */
function guto_lite_head_top() {
	do_action( 'guto_lite_head_top' );
}

/**
 * Head Bottom
 */
function guto_lite_head_bottom() {
	do_action( 'guto_lite_head_bottom' );
}

/**
 * Semantic <header> hooks
 *
 * $guto_lite_supports[] = 'header';
 */
function guto_lite_header_before() {
	do_action( 'guto_lite_header_before' );
}

/**
 * Top bar
 */
function guto_lite_top_bar() {
	do_action( 'guto_lite_top_bar' );
}

/**
 * Site Header
 */
function guto_lite_header() {
	do_action( 'guto_lite_header' );
}

/**
 * masthead Top
 */
function guto_lite_masthead_top() {
	do_action( 'guto_lite_masthead_top' );
}

/**
 * masthead
 */
function guto_lite_masthead() {
	do_action( 'guto_lite_masthead' );
}

/**
 * masthead Bottom
 */
function guto_lite_masthead_bottom() {
	do_action( 'guto_lite_masthead_bottom' );
}

/**
 * Header After
 */
function guto_lite_header_after() {
	do_action( 'guto_lite_header_after' );
}

/**
 * Main Header bar top
 */
function guto_lite_main_header_bar_top() {
	do_action( 'guto_lite_main_header_bar_top' );
}

/**
 * Main Header bar bottom
 */
function guto_lite_main_header_bar_bottom() {
	do_action( 'guto_lite_main_header_bar_bottom' );
}

/**
 * Main Header Content
 */
function guto_lite_masthead_content() {
	do_action( 'guto_lite_masthead_content' );
}
/**
 * Main toggle button before
 */
function guto_lite_masthead_toggle_buttons_before() {
	do_action( 'guto_lite_masthead_toggle_buttons_before' );
}

/**
 * Main toggle buttons
 */
function guto_lite_masthead_toggle_buttons() {
	do_action( 'guto_lite_masthead_toggle_buttons' );
}

/**
 * Main toggle button after
 */
function guto_lite_masthead_toggle_buttons_after() {
	do_action( 'guto_lite_masthead_toggle_buttons_after' );
}

/**
 * Semantic <content> hooks
 *
 * $guto_lite_supports[] = 'content';
 */
function guto_lite_content_before() {
	do_action( 'guto_lite_content_before' );
}

/**
 * Content after
 */
function guto_lite_content_after() {
	do_action( 'guto_lite_content_after' );
}

/**
 * Content top
 */
function guto_lite_content_top() {
	do_action( 'guto_lite_content_top' );
}

/**
 * Content bottom
 */
function guto_lite_content_bottom() {
	do_action( 'guto_lite_content_bottom' );
}

/**
 * Newsletter top
 */
function guto_lite_newsletter_top() {
	do_action( 'guto_lite_newsletter_top' );
}

/**
 * Newsletter content
 */
function guto_lite_newsletter_content() {
	do_action( 'guto_lite_newsletter_content' );
}

/**
 * Newsletter bottom
 */
function guto_lite_newsletter_bottom() {
	do_action( 'guto_lite_newsletter_bottom' );
}

/**
 * Content while before
 */
function guto_lite_content_while_before() {
	do_action( 'guto_lite_content_while_before' );
}

/**
 * Content loop
 */
function guto_lite_content_loop() {
	do_action( 'guto_lite_content_loop' );
}

/**
 * Conten Page Loop.
 *
 * Called from page.php
 */
function guto_lite_content_page_loop() {
	do_action( 'guto_lite_content_page_loop' );
}

/**
 * Content while after
 */
function guto_lite_content_while_after() {
	do_action( 'guto_lite_content_while_after' );
}

/**
 * Semantic <entry> hooks
 *
 * $guto_lite_supports[] = 'entry';
 */
function guto_lite_entry_before() {
	do_action( 'guto_lite_entry_before' );
}

/**
 * Entry after
 */
function guto_lite_entry_after() {
	do_action( 'guto_lite_entry_after' );
}

/**
 * Entry content before
 */
function guto_lite_entry_content_before() {
	do_action( 'guto_lite_entry_content_before' );
}

/**
 * Entry content after
 */
function guto_lite_entry_content_after() {
	do_action( 'guto_lite_entry_content_after' );
}

/**
 * Entry Top
 */
function guto_lite_entry_top() {
	do_action( 'guto_lite_entry_top' );
}

/**
 * Entry bottom
 */
function guto_lite_entry_bottom() {
	do_action( 'guto_lite_entry_bottom' );
}

/**
 * Single Post Header Before
 */
function guto_lite_single_header_before() {
	do_action( 'guto_lite_single_header_before' );
}

/**
 * Single Post Header After
 */
function guto_lite_single_header_after() {
	do_action( 'guto_lite_single_header_after' );
}

/**
 * Single Post Header Top
 */
function guto_lite_single_header_top() {
	do_action( 'guto_lite_single_header_top' );
}

/**
 * Single Post Header Bottom
 */
function guto_lite_single_header_bottom() {
	do_action( 'guto_lite_single_header_bottom' );
}

/**
 * Comments block hooks
 *
 * $guto_lite_supports[] = 'comments';
 */
function guto_lite_comments_before() {
	do_action( 'guto_lite_comments_before' );
}

/**
 * Comments after.
 */
function guto_lite_comments_after() {
	do_action( 'guto_lite_comments_after' );
}

/**
 * Semantic <sidebar> hooks
 *
 * $guto_lite_supports[] = 'sidebar';
 */
function guto_lite_sidebars_before() {
	do_action( 'guto_lite_sidebars_before' );
}

/**
 * Sidebars after
 */
function guto_lite_sidebars_after() {
	do_action( 'guto_lite_sidebars_after' );
}

/**
 * Semantic <footer> hooks
 *
 * $guto_lite_supports[] = 'footer';
 */
function guto_lite_footer() {
	do_action( 'guto_lite_footer' );
}

/**
 * Footer before
 */
function guto_lite_footer_before() {
	do_action( 'guto_lite_footer_before' );
}

/**
 * Footer after
 */
function guto_lite_footer_after() {
	do_action( 'guto_lite_footer_after' );
}


/**
 * Footer
 */
function guto_lite_footer_content() {
	do_action( 'guto_lite_footer_content' );
}

/**
 * Back to top
 */
function guto_lite_back_to_top() {
	do_action( 'guto_lite_back_to_top' );
}


/**
 * Archive header
 */
function guto_lite_archive_header() {
	do_action( 'guto_lite_archive_header' );
}

/**
 * Pagination
 */
function guto_lite_pagination() {
	do_action( 'guto_lite_pagination' );
}

/**
 * Entry content single
 */
function guto_lite_entry_content_single() {
	do_action( 'guto_lite_entry_content_single' );
}

/**
 * 404
 */
function guto_lite_entry_content_404_page() {
	do_action( 'guto_lite_entry_content_404_page' );
}

/**
 * Entry content blog
 */
function guto_lite_entry_content_blog() {
	do_action( 'guto_lite_entry_content_blog' );
}

/**
 * Blog featured post section
 */
function guto_lite_blog_post_featured_format() {
	do_action( 'guto_lite_blog_post_featured_format' );
}

/**
 * Primary Content Top
 */
function guto_lite_primary_content_top() {
	do_action( 'guto_lite_primary_content_top' );
}

/**
 * Primary Content Bottom
 */
function guto_lite_primary_content_bottom() {
	do_action( 'guto_lite_primary_content_bottom' );
}

/**
 * 404 Page content template action.
 */
function guto_lite_404_content_template() {
	do_action( 'guto_lite_404_content_template' );
}

if ( ! function_exists( 'wp_body_open' ) ) {

	/**
	 * Fire the wp_body_open action.
	 * Adds backward compatibility for WordPress versions < 5.2
	 *
	 * @since 1.8.7
	 */
	function wp_body_open() {
		do_action( 'wp_body_open' );
	}
}