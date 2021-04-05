<?php
$guto_lite_fields[]= array(
    'type'        => 'switch',
    'settings'    => 'show_breadcrumb',
    'label'       => esc_html__( 'Show Breadcrumb', 'guto-lite' ),
    'section'     => 'blog_section',
    'default'     => false,
    'choices'     => array(
        true  => esc_html__( 'Enable', 'guto-lite' ),
        false => esc_html__( 'Disable', 'guto-lite' ),
    ),
);

$guto_lite_fields[]= array(
    'type'        => 'switch',
    'settings'    => 'show_blog_banner',
    'label'       => esc_html__( 'Show Page Banner', 'guto-lite' ),
    'section'     => 'blog_section',
    'default'     => true,
    'choices'     => array(
        true  => esc_html__( 'Enable', 'guto-lite' ),
        false => esc_html__( 'Disable', 'guto-lite' ),
    ),
);

$guto_lite_fields[]= array(
    'type'        => 'switch',
    'settings'    => 'show_blog_banner',
    'label'       => esc_html__( 'Show Blog Banner', 'guto-lite' ),
    'section'     => 'blog_section',
    'default'     => true,
    'choices'     => array(
        true  => esc_html__( 'Enable', 'guto-lite' ),
        false => esc_html__( 'Disable', 'guto-lite' ),
    ),
);
$guto_lite_fields[] = array(
        'type'        => 'image',
        'settings'    => 'blog_banner_img',
        'label'       => esc_html__( 'Banner Image', 'guto-lite' ),
        'section'     => 'blog_section',
        'default'     => '',
        'required'      => array(
            array(
                'setting'   => 'show_blog_banner',
                'operator'  => '==',
                'value'     => 1,
            )
        ),
);
$guto_lite_fields[]= array(
    'type'        => 'text',
    'settings'    => 'blog_banner_title',
    'label'       => esc_html__( 'Blog Banner Title', 'guto-lite' ),
    'section'     => 'blog_section',
    'transport'   => 'postMessage',
    'js_vars'     => array(
        array(
            'element'  => '.page-title-content h2',
            'function' => 'html'
        ),
    ),
    'default'     =>'',
    'required'      => array(
        array(
            'setting'   => 'show_blog_banner',
            'operator'  => '==',
            'value'     => 1,
        )
    ),
);

$guto_lite_fields[] = array(
    'type'        => 'select',
    'settings'    => 'blog_sidebar',
    'label'       => esc_html__( 'Blog Sidebar Position', 'guto-lite' ),
    'section'     => 'blog_section',
    'default'     => 'right',
    'choices'     => array(
        'none'      => esc_html__('None','guto-lite'),
        'right'     => esc_html__('Right','guto-lite'),
    ),
);

$guto_lite_fields[]= array(
    'type'        => 'text',
    'settings'    => 'read_text',
    'label'       => esc_html__( 'Reding Time Text', 'guto-lite' ),
    'section'     => 'blog_section',
    'default'     =>  '',
);
$guto_lite_fields[]= array(
    'type'        => 'text',
    'settings'    => 'guto_lite_by_text',
    'label'       => esc_html__( 'Post By Title', 'guto-lite' ),
    'section'     => 'blog_section',
    'default'     =>  '',
);

$guto_lite_fields[] = array(
    'type'        => 'select',
    'settings'    => 'post_image_size',
    'label'       => esc_html__( 'Select Post Image Size', 'guto-lite' ),
    'section'     => 'blog_section',
    'default'     => 'guto_lite_single_post_thumb',
    'choices'     => array(
        'guto_lite_post_thumb'           => esc_html__('542X542','guto-lite'),
        'guto_lite_single_post_thumb'    => esc_html__('790x450','guto-lite'),
        'full'                      => esc_html__('Full','guto-lite'),
    ),
);