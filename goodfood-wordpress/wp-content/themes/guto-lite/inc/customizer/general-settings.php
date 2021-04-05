<?php
$guto_lite_fields[] = array(
	'type'        => 'image',
	'settings'    => 'site_logo',
	'label'       => esc_html__( 'Logo', 'guto-lite' ),
	'section'     => 'general_section',
);

$guto_lite_fields[] = array(
	'type'        => 'image',
	'settings'    => 'mobile_logo',
	'label'       => esc_html__( 'Mobile Nav Logo', 'guto-lite' ),
	'section'     => 'general_section',
);

$guto_lite_fields[]= array(
    'type'        => 'switch',
    'settings'    => 'enable_back_to_top',
    'label'       => esc_html__( 'Enable Back to Top Button', 'guto-lite' ),
    'section'     => 'general_section',
    'default'     => true,
    'choices'     => array(
        'on'  => esc_attr__( 'Enable', 'guto-lite' ),
        'off' => esc_attr__( 'Disable', 'guto-lite' ),
    ),
);