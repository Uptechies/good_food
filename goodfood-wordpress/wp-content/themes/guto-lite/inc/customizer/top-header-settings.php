<?php

$guto_lite_fields[]= array(
    'type'        => 'switch',
    'settings'    => 'is_top_header',
    'label'       => esc_html__( 'Make Top Header', 'guto-lite' ),
    'section'     => 'top_header_section',
    'default'     => false,
    'choices'     => array(
        'on'  => esc_attr__( 'Enable', 'guto-lite' ),
        'off' => esc_attr__( 'Disable', 'guto-lite' ),
    ),
);

$guto_lite_fields[] = array(
    'type'        => 'repeater',
    'label'       => esc_html__( 'Top Header Info', 'guto-lite' ),
    'section'     => 'top_header_section',
    'row_label' => array(
        'type' => 'text',
        'value' => esc_html__('Info', 'guto-lite' ),
    ),
    'settings'    => 'top_header_info_items',
    'default'     => array(
        array(
            'info_icon'     => 'bx bx-phone-call',
            'info_text'     => esc_html__( '+44 458 895 456', 'guto-lite' ),
            'info_link'     => esc_html__( 'tel:+44458895456', 'guto-lite' ),
        ),
    ),
    'fields' => array(
        'info_icon' => array(
            'type'        => 'text',
            'label'       => esc_html__( 'Icon Class Name(boxicons.com or Font Awesome icon )', 'guto-lite' ),
            'default'     => 'bx bx-phone-call',
        ),
        'info_text' => array(
            'type'        => 'text',
            'label'       => esc_html__( 'Info Title', 'guto-lite' ),
            'default'     => esc_html__( '+44 458 895 456', 'guto-lite' ),
        ),
        'info_link' => array(
            'type'        => 'text',
            'label'       => esc_html__( 'Info Title', 'guto-lite' ),
            'default'     => esc_html__( 'tel:+44458895456', 'guto-lite' ),
        ),
    )
);

$guto_lite_fields[] = array(
    'type'        => 'repeater',
    'label'       => esc_html__( 'Top Header Links', 'guto-lite' ),
    'section'     => 'top_header_section',
    'row_label' => array(
        'type' => 'text',
        'value' => esc_html__('Links', 'guto-lite' ),
    ),
    'settings'    => 'top_header_links_items',
    'default'     => array(
        array(
            'icon'     => 'bx bx-log-in',
            'text'     => esc_html__( 'Sign In', 'guto-lite' ),
            'link'     => esc_html__( '#', 'guto-lite' ),
        ),
    ),
    'fields' => array(
        'icon' => array(
            'type'        => 'text',
            'label'       => esc_html__( 'Icon Class Name(boxicons.com or Font Awesome icon )', 'guto-lite' ),
            'default'     => 'bx bx-log-in',
        ),
        'text' => array(
            'type'        => 'text',
            'label'       => esc_html__( 'Link Title', 'guto-lite' ),
            'default'     => esc_html__( 'Sign In', 'guto-lite' ),
        ),
        'link' => array(
            'type'        => 'text',
            'label'       => esc_html__( 'Link', 'guto-lite' ),
            'default'     => esc_html__( '#', 'guto-lite' ),
        ),
    )
);

$guto_lite_fields[] = array(
    'type'        => 'repeater',
    'label'       => esc_html__( 'Logged in Top Header Links', 'guto-lite' ),
    'section'     => 'top_header_section',
    'row_label' => array(
        'type' => 'text',
        'value' => esc_html__('Links', 'guto-lite' ),
    ),
    'settings'    => 'top_header_links_dhs_items',
    'default'     => array(
        array(
            'icon'     => 'bx bx-log-in',
            'text'     => esc_html__( 'My Account', 'guto-lite' ),
            'link'     => esc_html__( '#', 'guto-lite' ),
        ),
    ),
    'fields' => array(
        'icon' => array(
            'type'        => 'text',
            'label'       => esc_html__( 'Icon Class Name(boxicons.com or Font Awesome icon )', 'guto-lite' ),
            'default'     => 'bx bx-log-in',
        ),
        'text' => array(
            'type'        => 'text',
            'label'       => esc_html__( 'Link Title', 'guto-lite' ),
            'default'     => esc_html__( 'My Account', 'guto-lite' ),
        ),
        'link' => array(
            'type'        => 'text',
            'label'       => esc_html__( 'Link', 'guto-lite' ),
            'default'     => esc_html__( '#', 'guto-lite' ),
        ),
    )
);

$guto_lite_fields[]= array(
    'type'        => 'dimensions',
	'settings'    => 'top_header_padding',
	'label'       => esc_html__( 'Top Header Dimension', 'guto-lite' ),
	'section'     => 'top_header_section',
	'default'     => [
		'padding-top'    => '',
		'padding-bottom' => '',
		'padding-left'   => '',
		'padding-right'  => '',
	],
	'output'      => [
		[
			'element' => '.top-header-area',
		],
	],
);

$guto_lite_fields[] = array(
    'type'        => 'color',
    'settings'    => 'top_bg_color',
    'label'       => esc_html__( 'Top Bar Background Color', 'guto-lite' ),
    'section'     => 'top_header_section',
    'transport'   => 'auto',
    'output'      => array(
        array(
            'element' 	=> '.top-header-area',
            'property'	=> 'background-color',
        ),
    ),
);

$guto_lite_fields[] = array(
    'type'        => 'color',
    'settings'    => 'top_info_color',
    'label'       => esc_html__( 'Content Color', 'guto-lite' ),
    'section'     => 'top_header_section',
    'transport'   => 'auto',
    'output'      => array(
        array(
            'element' 	=> '.top-header-contact-info li a, .top-header-right ul li a',
            'property'	=> 'color',
        ),
    ),
);

$guto_lite_fields[] = array(
    'type'        => 'typography',
    'settings'    => 'top_header_typo',
    'label'       => esc_html__( 'Top Header Typography', 'guto-lite' ),
    'section'     => 'top_header_section',
    'default'     => array(
        'font-family'    => '"Nunito Sans", sans-serif',
        'variant'        => '',
        'font-size'      => '',
    ),
    'output'      => array(
        array(
            'element' => '.top-header-contact-info li, .top-header-right ul li',
        ),
    ),
);