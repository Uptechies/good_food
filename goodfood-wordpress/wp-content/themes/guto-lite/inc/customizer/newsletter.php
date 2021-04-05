<?php
/*
 * Newsletter
 *
*/

$guto_lite_fields[]= array(
    'type'        => 'switch',
    'settings'    => 'is_newsletter',
    'label'       => esc_html__( 'Newsletter Enable', 'guto-lite' ),
    'section'     => 'newsletter_section',
    'default'     => false,
    'choices'     => array(
        'on'  => esc_attr__( 'Enable', 'guto-lite' ),
        'off' => esc_attr__( 'Disable', 'guto-lite' ),
    ),
);

$guto_lite_fields[]= array(
    'type'        => 'select',
    'settings'    => 'newsletter_style',
    'label'       => esc_html__( 'Newsletter Style', 'guto-lite' ),
    'section'     => 'newsletter_section',
    'default'     => '1',
    'choices'     => array(
        '1'  => esc_attr__( 'Style One', 'guto-lite' ),
        '2' => esc_attr__( 'Style Two', 'guto-lite' ),
    ),
);

$guto_lite_fields[] = array(
	'type'        => 'image',
	'settings'    => 'newsletter_bg_img',
	'label'       => esc_html__( 'Newsletter Background Image', 'guto-lite' ),
	'section'     => 'newsletter_section',
    'required'      => array(
        array(
            'setting'   => 'is_newsletter',
            'operator'  => '==',
            'value'     => 1,
        ),
        array(
            'setting'   => 'newsletter_style',
            'operator'  => '==',
            'value'     => '2',
        )
    ),
);

$guto_lite_fields[] = array(
    'type'        => 'color',
    'settings'    => 'newsletter_bg_color',
    'label'       => esc_html__( 'Section Background Color', 'guto-lite' ),
    'section'     => 'newsletter_section',
    'transport'   => 'auto',
    'output'      => array(
        array(
            'element' 	=> '.subscribe-inner-area, .subscribe-inner-area-two',
            'property'	=> 'background-color',
        ),
    ),
    'required'      => array(
        array(
            'setting'   => 'is_newsletter',
            'operator'  => '==',
            'value'     => 1,
        )
    ),
);

$guto_lite_fields[] = array(
    'type'        => 'text',
    'settings'    => 'newsletter_top_title',
    'label'       => esc_html__( 'Top Title', 'guto-lite' ),
    'section'     => 'newsletter_section',
    'transport'   => 'postMessage',
    'js_vars'     => array(
        array(
            'element'  => '.subscribe-inner-area .sub-title, .subscribe-inner-area-two  .sub-title',
            'function' => 'html'
        ),
    ),
    'default'     => esc_html__( 'GET UPDATES', 'guto-lite' ),
    'required'      => array(
        array(
            'setting'   => 'is_newsletter',
            'operator'  => '==',
            'value'     => 1,
        )
    ),
);

$guto_lite_fields[] = array(
    'type'        => 'text',
    'settings'    => 'newsletter_title',
    'label'       => esc_html__( 'Title', 'guto-lite' ),
    'section'     => 'newsletter_section',
    'transport'   => 'postMessage',
    'js_vars'     => array(
        array(
            'element'  => '.subscribe-inner-area h2, .subscribe-inner-area-two h2',
            'function' => 'html'
        ),
    ),
    'default'     => esc_html__( 'Our Newsletter', 'guto-lite' ),
    'required'      => array(
        array(
            'setting'   => 'is_newsletter',
            'operator'  => '==',
            'value'     => 1,
        )
    ),
);

$guto_lite_fields[] = array(
    'type'        => 'text',
    'settings'    => 'newsletter_action_url',
    'label'       => esc_html__( 'Mailchimp Action URL', 'guto-lite' ),
    'section'     => 'newsletter_section',
    'required'      => array(
        array(
            'setting'   => 'is_newsletter',
            'operator'  => '==',
            'value'     => 1,
        )
    ),
);

$guto_lite_fields[] = array(
    'type'        => 'text',
    'settings'    => 'newsletter_pt',
    'label'       => esc_html__( 'Newsletter Placeholder Text', 'guto-lite' ),
    'section'     => 'newsletter_section',
    'required'      => array(
        array(
            'setting'   => 'is_newsletter',
            'operator'  => '==',
            'value'     => 1,
        )
    ),
    'default'     => esc_html__( 'Enter your email address', 'guto-lite' ),
);

$guto_lite_fields[] = array(
    'type'        => 'text',
    'settings'    => 'newsletter_button',
    'label'       => esc_html__( 'Newsletter Button Text', 'guto-lite' ),
    'section'     => 'newsletter_section',
    'required'      => array(
        array(
            'setting'   => 'is_newsletter',
            'operator'  => '==',
            'value'     => 1,
        )
    ),
    'default'     => esc_html__( 'Subscribe Now', 'guto-lite' ),
);

$guto_lite_fields[] = array(
	'type'        => 'image',
	'settings'    => 'newsletter_left_img',
	'label'       => esc_html__( 'Newsletter Left Shape Image', 'guto-lite' ),
	'section'     => 'newsletter_section',
    'required'      => array(
        array(
            'setting'   => 'is_newsletter',
            'operator'  => '==',
            'value'     => 1,
        ),
        array(
            'setting'   => 'newsletter_style',
            'operator'  => '==',
            'value'     => '1',
        )
    ),
);

$guto_lite_fields[] = array(
	'type'        => 'image',
	'settings'    => 'newsletter_right_img',
	'label'       => esc_html__( 'Newsletter Right Shape Image', 'guto-lite' ),
	'section'     => 'newsletter_section',
    'required'      => array(
        array(
            'setting'   => 'is_newsletter',
            'operator'  => '==',
            'value'     => 1,
        ),
        array(
            'setting'   => 'newsletter_style',
            'operator'  => '==',
            'value'     => '1',
        )
    ),
);