<?php

$guto_lite_fields[] = array(
    'type'        => 'color',
    'settings'    => 'primary_color',
    'label'       => esc_html__( 'Theme Primary Color', 'guto-lite' ),
    'section'     => 'styling_section',
	'default'     => '#4237dc',
);

$guto_lite_fields[] = array(
    'type'        => 'color',
    'settings'    => 'secondary_color',
    'label'       => esc_html__( 'Theme Secondary Color', 'guto-lite' ),
    'section'     => 'styling_section',
	'default'     => '#e82b2b',
);

$guto_lite_fields[] = array(
    'type'        => 'color',
    'settings'    => 'default_btn_color',
    'label'       => esc_html__( 'Theme Default Button Background Color', 'guto-lite' ),
    'section'     => 'styling_section',
    'transport'   => 'auto',
    'output'      => array(
        array(
            'element' 	=> '.default-btn',
            'property'	=> 'background-color',
        ),
    ),
);

$guto_lite_fields[] = array(
    'type'        => 'color',
    'settings'    => 'default_btn_hover_color',
    'label'       => esc_html__( 'Theme Default Hover Button Background Color', 'guto-lite' ),
    'section'     => 'styling_section',
    'transport'   => 'auto',
    'output'      => array(
        array(
            'element' 	=> '.default-btn:hover',
            'property'	=> 'background-color',
        ),
    ),
);