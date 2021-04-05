<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 * All the functions here generate some kind of Markup for the frontend.
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
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function guto_lite_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">' . "\n", esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'guto_lite_pingback_header' );

/**
 * Function to get top bar
 */
if ( ! function_exists( 'guto_lite_top_bar_markup' ) ) {

	function guto_lite_top_bar_markup() {
        get_template_part( 'template-parts/navigation/top','bar' );
	}
}

add_action( 'guto_lite_top_bar', 'guto_lite_top_bar_markup' );

/**
 * Function to display header image
 */
if ( ! function_exists( 'guto_lite_header_image' ) ) {

	function guto_lite_header_image() {
		?>
			<?php if ( get_header_image() ) : ?>
				<div id="site-header">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<img src="<?php header_image(); ?>" width="<?php echo absint( get_custom_header()->width ); ?>" height="<?php echo absint( get_custom_header()->height ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
					</a>
				</div>
			<?php endif; ?>
		<?php
	}
}

add_action( 'guto_lite_header_after', 'guto_lite_header_image' );

/**
 * Function to get Primary navigation menu
 */
if ( ! function_exists( 'guto_lite_primary_navigation_markup' ) ) {

	/**
	 * Site Header - <header>
	 *
	 * @since 1.0.3
	 */
	function guto_lite_primary_navigation_markup() {
        get_template_part( 'template-parts/navigation/nav','primary' );
	}
}

add_action( 'guto_lite_header', 'guto_lite_primary_navigation_markup' );

/**
 * Function to get Newsletter Section
 */
if ( ! function_exists( 'guto_lite_newsletter_markup' ) ) {

	function guto_lite_newsletter_markup() {

		$newsletter_style = guto_lite_option('newsletter_style');

		if($newsletter_style == '2'):
			get_template_part( 'template-parts/footer/footer','newsletter-style-two' );
		else:
			get_template_part( 'template-parts/footer/footer','newsletter' );
		endif;

	}
}

add_action( 'guto_lite_newsletter_content', 'guto_lite_newsletter_markup' );

/**
 * Function to get Footer Section
 */
if ( ! function_exists( 'guto_lite_footer_markup' ) ) {

	function guto_lite_footer_markup() {
        get_template_part( 'template-parts/footer/footer','area' );
	}
}

add_action( 'guto_lite_footer_content', 'guto_lite_footer_markup' );

/**
 * Function to get Template for 404
 */
if ( ! function_exists( 'guto_lite_404_markup' ) ) {

	function guto_lite_404_markup() {
        get_template_part( 'template-parts/404/404','layout' );
	}
}

add_action( 'guto_lite_404_content_template', 'guto_lite_404_markup' );

/**
 * Function to get back to top button
 */
if ( ! function_exists( 'guto_lite_back_to_top_content' ) ) {

	function guto_lite_back_to_top_content() {
		$back_to_top 			= guto_lite_option('enable_back_to_top');
		?>
		<?php if($back_to_top == true): ?>
			<div class="go-top">
				<i class='bx bx-up-arrow-alt'></i>
			</div>
			<?php
		endif;
	}
}

add_action( 'guto_lite_back_to_top', 'guto_lite_back_to_top_content' );
