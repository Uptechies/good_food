<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/*
 * TGM REQUIRE PLUGIN
 * require or recommend plugins for your WordPress themes
 */

function _action_guto_lite_register_required_plugins() {
	$plugins	 = array(
		array(
			'name'		 => esc_html__( 'Elementor', 'guto-lite' ),
			'slug'		 => 'elementor',
			'required'	 => false,
		),
		array(
			'name'		 => esc_html__( 'Kirki', 'guto-lite' ),
			'slug'		 => 'kirki',
			'required'	 => false,
		),
		array(
			'name'		 => esc_html__( 'WooCommerce', 'guto-lite' ),
			'slug'		 => 'woocommerce',
			'required'	 => false,
		),
        array(
            'name'		 => esc_html__( 'Contact Form 7', 'guto-lite' ),
            'slug'		 => 'contact-form-7',
            'required'	 => false,
		),
		array(
			'name'		 => esc_html__( 'Unyson', 'guto-lite' ),
			'slug'		 => 'unyson',
			'required'	 => false,
        ),
	);

	$config = array(
		'id'			 => 'guto-lite', // Unique ID for hashing notices for multiple instances of TGMPA.
		'default_path'	 => '', // Default absolute path to bundled plugins.
		'menu'			 => 'guto-lite-install-plugins', // Menu slug.
		'parent_slug'	 => 'themes.php', // Parent menu slug.
		'capability'	 => 'edit_theme_options', // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
		'has_notices'	 => true, // Show admin notices or not.
		'dismissable'	 => true, // If false, a user cannot dismiss the nag message.
		'dismiss_msg'	 => '', // If 'dismissable' is false, this message will be output at top of nag.
		'message'		 => '', // Message to output right before the plugins table.
	);

	tgmpa( $plugins, $config );
}

add_action( 'tgmpa_register', '_action_guto_lite_register_required_plugins' );