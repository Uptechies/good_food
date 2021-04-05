<?php

$guto_lite_fields[] = array(
    'type'        => 'select',
    'settings'    => 'footer_style',
    'label'       => esc_html__( 'Footer Style', 'guto-lite' ),
    'section'     => 'footer_section',
    'default'     => '1',
    'choices'     => array(
        '1'    => esc_attr__( 'Style One', 'guto-lite' ),
        '2'     => esc_attr__( 'Style Two', 'guto-lite' ),
    ),
);

$guto_lite_fields[] = array(
    'type'        => 'image',
    'settings'    => 'footer_shape_image',
    'label'       => esc_html__( 'Shape Image', 'guto-lite' ),
    'section'     => 'footer_section',
);

$guto_lite_fields[] = array(
    'type'        => 'color',
    'settings'    => 'footer_bg_color',
    'label'       => esc_html__( 'Background Color', 'guto-lite' ),
    'section'     => 'footer_section',
    'transport'   => 'auto',
    'output'      => array(
        array(
            'element' 	=> '.footer-area, .subscribe-area::before, .footer-area.footer-light',
            'property'	=> 'background-color',
        ),
    ),
);

$guto_lite_fields[] = array(
    'type'        => 'image',
    'settings'    => 'footer_logo',
    'label'       => esc_html__( 'Footer Logo', 'guto-lite' ),
    'section'     => 'footer_section',
);

$guto_lite_fields[] = array(

    'type'        => 'repeater',
    'label'       => esc_html__( 'Social Control', 'guto-lite' ),
    'section'     => 'footer_section',
    'priority'    => 10,
    'row_label' => array(
        'type' => 'text',
        'value' => esc_html__('Social Profile', 'guto-lite' ),
    ),
    'settings'    => 'footer_social_links',
    'default'     => array(
        array(
            'social_icon' => '',
            'social_url'  => '',
        ),
    ),
    'fields' => array(
        'social_icon' => array(
            'type'        => 'text',
            'label'       => esc_html__( 'Social Icon', 'guto-lite' ),
            'default'     => '',
        ),
        'social_url' => array(
            'type'        => 'text',
            'label'       => esc_html__( 'Social URL', 'guto-lite' ),
            'default'     => '',
        ),

    )
);

$guto_lite_fields[] = array(
    'type'        => 'select',
    'settings'    => 'footer_widget_layout',
    'label'       => esc_html__( 'Footer Widget Per Row', 'guto-lite' ),
    'section'     => 'footer_section',
    'default'     => '3',
    'choices'     => array(
        '12'    => esc_attr__( '1', 'guto-lite' ),
        '6'     => esc_attr__( '2', 'guto-lite' ),
        '4'     => esc_attr__( '3', 'guto-lite' ),
        '3'     => esc_attr__( '4', 'guto-lite' ),
    ),
);

$guto_lite_fields[] = array(
    'type'        => 'color',
    'settings'    => 'footer_widget_title_color',
    'label'       => esc_html__( 'Widget Title Color', 'guto-lite' ),
    'section'     => 'footer_section',
    'transport'   => 'auto',
    'output'      => array(
        array(
            'element' 	=> '.footer-area .single-footer-widget h3, .footer-area.footer-light .single-footer-widget h3',
            'property'	=> 'color',
        ),
    ),
);

$guto_lite_fields[] = array(
    'type'        => 'color',
    'settings'    => 'footer_text_color',
    'label'       => esc_html__( 'Footer Text Color', 'guto-lite' ),
    'section'     => 'footer_section',
    'transport'   => 'auto',
    'output'      => array(
        array(
            'element' 	=> '.footer-area  .single-footer-widget ul li, .footer-area  .single-footer-widget ul li a, .footer-area  .single-footer-widget ul li p, .single-footer-widget p, .footer-area  .single-footer-widget .footer-contact-info li, .footer-area.footer-light .single-footer-widget p, .footer-area.footer-light .single-footer-widget ul li a, .footer-area.footer-light .single-footer-widget ul li a',
            'property'	=> 'color',
        ),
    ),
);

$guto_lite_fields[]= array(
    'type'        => 'textarea',
    'settings'    => 'copyright_text',
    'label'       => esc_html__( 'Copyright Text', 'guto-lite' ),
    'section'     => 'footer_section',
    'transport'   => 'postMessage',
    'js_vars'     => array(
        array(
            'element'  => '.footer-bottom-area p, .footer-bottom-area.bottom-footer-light p',
            'function' => 'html'
        ),
    ),
);

$guto_lite_fields[] = array(
    'type'        => 'color',
    'settings'    => 'copyright_bg_color',
    'label'       => esc_html__( 'Copyright Area Background Color', 'guto-lite' ),
    'section'     => 'footer_section',
    'transport'   => 'auto',
    'output'      => array(
        array(
            'element' 	=> '.footer-bottom-area, .footer-bottom-area.bottom-footer-light',
            'property'	=> 'background-color',
        ),
    ),
);

$guto_lite_fields[] = array(
    'type'        => 'color',
    'settings'    => 'copyright_text_color',
    'label'       => esc_html__( 'Text Color', 'guto-lite' ),
    'section'     => 'footer_section',
    'transport'   => 'auto',
    'output'      => array(
        array(
            'element' 	=> '.footer-bottom-area p',
            'property'	=> 'color',
        ),
        array(
            'element' 	=> '.footer-bottom-area ul li a, .footer-bottom-area.bottom-footer-light p',
            'property'	=> 'color',
        ),
    ),
);

$guto_lite_fields[] = array(
    'type'        => 'color',
    'settings'    => 'copyright_link_color',
    'label'       => esc_html__( 'Link Color', 'guto-lite' ),
    'section'     => 'footer_section',
    'transport'   => 'auto',
    'output'      => array(
        array(
            'element' 	=> '.footer-bottom-area p a, .footer-bottom-area.bottom-footer-light p a',
            'property'	=> 'color',
        ),
    ),
);

$guto_lite_fields[] = array(
    'type'        => 'color',
    'settings'    => 'footer_mene_link_color',
    'label'       => esc_html__( 'Footer Menu Color', 'guto-lite' ),
    'section'     => 'footer_section',
    'transport'   => 'auto',
    'output'      => array(
        array(
            'element' 	=> '.footer-bottom-area ul li a, .footer-bottom-area.bottom-footer-light ul li a',
            'property'	=> 'color',
        ),
    ),
);