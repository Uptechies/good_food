<?php

$guto_lite_fields[] = array(
    'type'        => 'select',
    'settings'    => 'banner_style',
    'label'       => esc_html__( 'Default Page Banner Style', 'guto-lite' ),
    'section'     => 'banner_section',
    'default'     => '1',
    'choices'     => array(
        'style-1'    => esc_attr__( 'Style One', 'guto-lite' ),
        'style-2'    => esc_attr__( 'Style Two', 'guto-lite' ),
    ),
);

$guto_lite_fields[]= array(
    'type'        => 'background',
	'settings'    => 'banner_background_setting',
	'label'       => esc_html__( 'Default Banner Background Control', 'guto-lite' ),
	'section'     => 'banner_section',
	'default'     => [
		'background-color'      => '',
		'background-repeat'     => '',
		'background-position'   => '',
		'background-size'       => '',
		'background-attachment' => '',
	],
	'transport'   => 'auto',
	'output'      => [
		[
			'element' => '.page-title-area',
		],
	],
);

$guto_lite_fields[]= array(
    'type'        => 'dimensions',
	'settings'    => 'banner_dimensions',
	'label'       => esc_html__( 'Banner Dimension', 'guto-lite' ),
	'section'     => 'banner_section',
	'default'     => [
		'padding-top'    => '',
		'padding-bottom' => '',
		'padding-left'   => '',
		'padding-right'  => '',
	],
	'output'      => [
		[
			'element' => '.page-title-area',
		],
	],
);

$guto_lite_fields[]= array(
    'type'        => 'image',
	'settings'    => 'banner_shape1',
	'label'       => esc_html__( 'Banner Shape Image One', 'guto-lite' ),
	'section'     => 'banner_section',
);

$guto_lite_fields[]= array(
    'type'        => 'image',
	'settings'    => 'banner_shape2',
	'label'       => esc_html__( 'Banner Shape Image Two', 'guto-lite' ),
	'section'     => 'banner_section',
);

$guto_lite_fields[]= array(
    'type'        => 'typography',
	'settings'    => 'typography_banner_top_title',
	'label'       => esc_html__( 'Banner Top Title Typography', 'guto-lite' ),
	'section'     => 'banner_section',
	'default'     => [
		'font-family'    => '',
		'variant'        => '',
		'font-size'      => '',
		'line-height'    => '',
		'letter-spacing' => '',
		'color'          => '',
		'text-transform' => 'none',
	],
	'transport'   => 'auto',
	'output'      => [
		[
			'element' => '.page-title-content .sub-title',
		],
	],
);

$guto_lite_fields[]= array(
    'type'        => 'typography',
	'settings'    => 'typography_banner_title',
	'label'       => esc_html__( 'Banner Title Typography', 'guto-lite' ),
	'section'     => 'banner_section',
	'default'     => [
		'font-family'    => '',
		'variant'        => '',
		'font-size'      => '',
		'line-height'    => '',
		'letter-spacing' => '',
		'color'          => '',
		'text-transform' => 'none',
	],
	'transport'   => 'auto',
	'output'      => [
		[
			'element' => '.page-title-content h2',
		],
	],
);

$guto_lite_fields[]= array(
    'type'        => 'typography',
	'settings'    => 'typography_banner_breadcrumb',
	'label'       => esc_html__( 'Banner Breadcrumb Typography', 'guto-lite' ),
	'section'     => 'banner_section',
	'default'     => [
		'font-family'    => '',
		'variant'        => '',
		'font-size'      => '',
		'line-height'    => '',
		'letter-spacing' => '',
		'color'          => '',
		'text-transform' => 'none',
	],
	'transport'   => 'auto',
	'output'      => [
		[
			'element' => '.page-title-content ul li',
		],
	],
);