<?php
// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Do not proceed if Kirki does not exist.
if ( ! class_exists( 'Kirki' ) ) {
	return;
}


Kirki::add_config( 'guto_lite_customizer', array(
	'capability'  => 'edit_theme_options',
	'option_type' => 'theme_mod',
) );


function guto_lite_customizer_sections($wp_customize){
    $wp_customize->add_panel( 'theme_option', array(
        'priority'    => 10,
        'title'       => esc_html__( 'Theme Options', 'guto-lite' ),
    ) );

	$wp_customize->add_section( 'general_section', array(
		'title'			=> esc_html__( 'General Settings', 'guto-lite' ),
		'priority'		=> 1,
		'description'	=> esc_html__( 'to change logo,favicon etc', 'guto-lite' ),
        'panel'          => 'theme_option',
	) );

	$wp_customize->add_section( 'top_header_section', array(
		'title'			=> esc_html__( 'Top Header Settings', 'guto-lite' ),
		'priority'		=> 2,
		'description'	=> esc_html__( 'Setting Your Top Header', 'guto-lite' ),
        'panel'          => 'theme_option',
    ) );

	$wp_customize->add_section( 'nav_section', array(
		'title'			=> esc_html__( 'Navigation Settings', 'guto-lite' ),
		'priority'		=> 3,
		'description'	=> esc_html__( 'Setting Your Menu', 'guto-lite' ),
        'panel'          => 'theme_option',
    ) );

    $wp_customize->add_section( 'banner_section', array(
        'title'         => esc_html__( 'Banner Settings', 'guto-lite' ),
        'priority'      => 4,
        'description'   => esc_html__( 'Setting Your Banner Banner', 'guto-lite' ),
        'panel'          => 'theme_option',
    ) );

    $wp_customize->add_section( 'blog_section', array(
        'title'         => esc_html__( 'Blog Settings', 'guto-lite' ),
        'priority'      => 5,
        'description'   => esc_html__( 'Setting Your Blog', 'guto-lite' ),
        'panel'          => 'theme_option',
    ) );

    $wp_customize->add_section( 'shop_section', array(
        'title'         => esc_html__( 'Shop Settings', 'guto-lite' ),
        'priority'      => 6,
        'description'   => esc_html__( 'Setting Your Shop', 'guto-lite' ),
        'panel'          => 'theme_option',
    ) );

    $wp_customize->add_section( 'newsletter_section', array(
        'title'         => esc_html__( 'Newsletter Settings', 'guto-lite' ),
        'priority'      => 7,
        'description'   => esc_html__( 'Setting Your Newsletter', 'guto-lite' ),
        'panel'          => 'theme_option',
    ) );

    $wp_customize->add_section( 'footer_section', array(
        'title'			=> esc_html__( 'Footer Settings', 'guto-lite' ),
        'priority'		=> 8,
        'description'	=> esc_html__( 'Setting Your Footer', 'guto-lite' ),
        'panel'          => 'theme_option',
    ) );
    $wp_customize->add_section( 'error_section', array(
        'title'			=> esc_html__( 'Error Page Settings', 'guto-lite' ),
        'priority'		=> 9,
        'description'	=> esc_html__( 'Setting Your Error Page', 'guto-lite' ),
        'panel'          => 'theme_option',
    ) );

    $wp_customize->add_section( 'styling_section', array(
        'title'			=> esc_html__( 'Styling Settings', 'guto-lite' ),
        'priority'		=> 10,
        'description'	=> esc_html__( 'Setting Your Color', 'guto-lite' ),
        'panel'          => 'theme_option',
    ) );

    $wp_customize->add_section( 'typography_section', array(
        'title'			=> esc_html__( 'Typography Settings', 'guto-lite' ),
        'priority'		=> 11,
        'description'	=> esc_html__( 'Setting Your font', 'guto-lite' ),
        'panel'          => 'theme_option',
    ) );
}

add_action( 'customize_register', 'guto_lite_customizer_sections' );

require GUTO_LITE_CUSTOMIZER_DIR . 'customizer-fields.php' ; // phpcs:ignore WPThemeReview.CoreFunctionality.FileInclude.FileIncludeFound
