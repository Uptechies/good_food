<?php
$guto_lite_fields[] = array(
    'type'        => 'image',
    'settings'    => '404_image',
    'label'       => esc_html__( '404 Image', 'guto-lite' ),
    'section'     => 'error_section',
);
$guto_lite_fields[]= array(
    'type'        => 'text',
    'settings'    => 'error_title',
    'label'       => esc_html__( 'Error Title', 'guto-lite' ),
    'section'     => 'error_section',
);
$guto_lite_fields[]= array(
    'type'        => 'textarea',
    'settings'    => 'error_subtitle',
    'label'       => esc_html__( 'Error Description', 'guto-lite' ),
    'section'     => 'error_section',
);

$guto_lite_fields[]= array(
    'type'        => 'text',
    'settings'    => 'back_to_home_label',
    'label'       => esc_html__( 'Back to Home Button Label', 'guto-lite' ),
    'section'     => 'error_section',
);