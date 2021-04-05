<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Enqueue all theme scripts and styles
 *
 * ** REGISTERING THEME ASSETS
 * ** ------------------------------------ */
/**
 * Enqueue styles.
 */
if ( !is_admin() ) {
    wp_enqueue_style( 'guto-lite-style', get_stylesheet_uri(), array(), GUTO_LITE_VERSION );
    wp_enqueue_style( 'guto-lite-fonts', guto_lite_google_fonts_url(), null, GUTO_LITE_VERSION );

    if ( !class_exists( 'Guto_Toolkit' ) ):
        wp_enqueue_style( 'bootstrap', GUTO_LITE_CSS . '/bootstrap.min.css', null, GUTO_LITE_VERSION );
        wp_enqueue_style( 'animate', GUTO_LITE_CSS . '/animate.min.css', null, GUTO_LITE_VERSION );
        wp_enqueue_style( 'boxicons', GUTO_LITE_CSS . '/boxicons.min.css', null, GUTO_LITE_VERSION );
        wp_enqueue_style( 'nice-select', GUTO_LITE_CSS . '/nice-select.min.css', null, GUTO_LITE_VERSION );
        wp_enqueue_style( 'owl-carousel', GUTO_LITE_CSS . '/owl.carousel.min.css', null, GUTO_LITE_VERSION );
        wp_enqueue_style( 'odometer', GUTO_LITE_CSS . '/odometer.min.css', null, GUTO_LITE_VERSION );
        wp_enqueue_style( 'magnific-popup', GUTO_LITE_CSS . '/magnific-popup.min.css', null, GUTO_LITE_VERSION );
    endif;

    // WooCommerce CSS
    if ( class_exists( 'WooCommerce' ) ):
        wp_enqueue_style( 'guto-lite-woocommerce', GUTO_LITE_CSS . '/woocommerce.css', null, GUTO_LITE_VERSION );
    endif;
    if ( !class_exists( 'Guto_Toolkit' ) ):
        wp_enqueue_style( 'guto-lite-main', GUTO_LITE_CSS . '/main-style.css', null, GUTO_LITE_VERSION );
        wp_enqueue_style( 'guto-lite-responsive', GUTO_LITE_CSS . '/responsive.css', null, GUTO_LITE_VERSION );
    endif;
}

/**
 * Enqueue scripts.
 */
if ( !is_admin() ) {

    if ( !class_exists( 'Guto_Toolkit' ) ):
        wp_enqueue_script( 'popper', GUTO_LITE_SCRIPTS . '/popper.min.js', array( 'jquery' ), GUTO_LITE_VERSION, true );
        wp_enqueue_script( 'bootstrap', GUTO_LITE_SCRIPTS . '/bootstrap.min.js', array( 'jquery' ), GUTO_LITE_VERSION, true );
        wp_enqueue_script( 'nice-select', GUTO_LITE_SCRIPTS . '/nice-select.min.js', array( 'jquery' ), GUTO_LITE_VERSION, true );
        wp_enqueue_script('magnific-popup', GUTO_LITE_SCRIPTS . '/magnific-popup.min.js', array( 'jquery' ), GUTO_LITE_VERSION, true );
        wp_enqueue_script( 'owl-carousel', GUTO_LITE_SCRIPTS . '/owl.carousel.min.js', array( 'jquery' ), GUTO_LITE_VERSION, true );
        wp_enqueue_script( 'parallax', GUTO_LITE_SCRIPTS . '/parallax.min.js', array( 'jquery' ), GUTO_LITE_VERSION, true );
        wp_enqueue_script( 'jquery-appear', GUTO_LITE_SCRIPTS . '/jquery.appear.min.js', array( 'jquery' ), GUTO_LITE_VERSION, true );
        wp_enqueue_script( 'odometer', GUTO_LITE_SCRIPTS . '/odometer.min.js', array( 'jquery' ), GUTO_LITE_VERSION, true );
        wp_enqueue_script( 'wow', GUTO_LITE_SCRIPTS . '/wow.min.js', array( 'jquery' ), GUTO_LITE_VERSION, true );
        wp_enqueue_script( 'jquery-ajaxchimp', GUTO_LITE_SCRIPTS . '/jquery.ajaxchimp.min.js', array( 'jquery' ), GUTO_LITE_VERSION, true );
        wp_enqueue_script( 'guto-lite-main', GUTO_LITE_SCRIPTS . '/main.js', array( 'jquery' ), GUTO_LITE_VERSION, true );
    endif;

	// Load WordPress Comment js
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
    }
}