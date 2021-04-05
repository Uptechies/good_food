<?php

$guto_lite_fields[] = array(
    'type'        => 'typography',
    'settings'    => 'body_font',
    'label'       => esc_html__( 'Body Font', 'guto-lite' ),
    'section'     => 'typography_section',
    'default'     => array(
        'font-family'    => '"Nunito Sans", sans-serif',
        'variant'        => '',
        'font-size'      => '',
    ),
    'output'      => array(
        array(
            'element' => 'body, .woocommerce div.product p.stock',
        ),
    ),
);
