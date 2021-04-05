<?php
$guto_lite_fields[] = array(
    'type'        => 'checkbox',
    'settings'    => 'shop_hide_banner',
    'label'       => esc_html__( 'Enable Banner', 'guto-lite' ),
    'section'     => 'shop_section',
	'default'     => true,
);

$guto_lite_fields[] = array(
    'type'        => 'image',
    'settings'    => 'shop_page_bg_image',
    'label'       => esc_html__( 'Shop Background Image', 'guto-lite' ),
    'section'     => 'shop_section',
    'required'      => array(
        array(
            'setting'   => 'shop_hide_banner',
            'operator'  => '==',
            'value'     => true,
        )
    ),
);
$guto_lite_fields[] = array(
    'type'        => 'checkbox',
    'settings'    => 'shop_breadcrumb',
    'label'       => esc_html__( 'Enable Breadcrumb', 'guto-lite' ),
    'section'     => 'shop_section',
	'default'     => true,
    'required'      => array(
        array(
            'setting'   => 'shop_hide_banner',
            'operator'  => '==',
            'value'     => true,
        )
    ),
);
$guto_lite_fields[] = array(
    'type'        => 'select',
    'settings'    => 'shop_card_style',
    'label'       => esc_html__( 'Product Card Style', 'guto-lite' ),
    'section'     => 'shop_section',
    'default'     => '1',
    'choices'     => array(
        '1'      => esc_html__('Style One','guto-lite'),
        '2'      => esc_html__('Style Two','guto-lite'),
    ),
);
$guto_lite_fields[]= array(
    'type'        => 'switch',
    'settings'    => 'is_product_quick_view',
    'label'       => esc_html__( 'Show Product Quick View', 'guto-lite' ),
    'section'     => 'shop_section',
    'default'     => true,
    'choices'     => array(
        true  => esc_html__( 'Enable', 'guto-lite' ),
        false => esc_html__( 'Disable', 'guto-lite' ),
    ),
    'required'      => array(
        array(
            'setting'   => 'shop_card_style',
            'operator'  => '==',
            'value'     => '2',
        ),
    ),
);
$guto_lite_fields[] = array(
    'type'        => 'text',
    'settings'    => 'product_quick_view_title',
    'label'       => esc_html__( 'Product Quick View Title', 'guto-lite' ),
    'section'     => 'shop_section',
    'required'      => array(
        array(
            'setting'   => 'shop_card_style',
            'operator'  => '==',
            'value'     => '2',
        ),
    ),
);
$guto_lite_fields[] = array(
    'type'        => 'select',
    'settings'    => 'shop_sidebar',
    'label'       => esc_html__( 'Shop Sidebar Position', 'guto-lite' ),
    'section'     => 'shop_section',
    'default'     => 'none',
    'choices'     => array(
        'none'      => esc_html__('None','guto-lite'),
        'left'      => esc_html__('Left Sidebar','guto-lite'),
        'right'     => esc_html__('Right Sidebar','guto-lite'),
    ),
);
$guto_lite_fields[] = array(
    'type'        => 'number',
    'settings'    => 'product_count',
    'label'       => esc_html__( 'Number of Products per Page on Product Pages.', 'guto-lite' ),
    'section'     => 'shop_section',
    'default'     => 6,
);
$guto_lite_fields[] = array(
    'type'        => 'checkbox',
    'settings'    => 'is_related_products',
    'label'       => esc_html__( 'Enable Related Section into Product Details', 'guto-lite' ),
    'section'     => 'shop_section',
	'default'     => true,
);
$guto_lite_fields[] = array(
    'type'        => 'number',
    'settings'    => 'related_product_count',
    'label'       => esc_html__( 'Number of Related Products display on Details Pages.', 'guto-lite' ),
    'section'     => 'shop_section',
    'default'     => 3,
    'required'      => array(
        array(
            'setting'   => 'is_related_products',
            'operator'  => '==',
            'value'     => '1',
        ),
    ),
);
$guto_lite_fields[] = array(
    'type'        => 'text',
    'settings'    => 'related_product_top_title',
    'label'       => esc_html__( 'Related Products Top Title', 'guto-lite' ),
    'section'     => 'shop_section',
    'required'      => array(
        array(
            'setting'   => 'is_related_products',
            'operator'  => '==',
            'value'     => '1',
        ),
    ),
);
$guto_lite_fields[] = array(
    'type'        => 'text',
    'settings'    => 'related_product_title',
    'label'       => esc_html__( 'Related Products Title', 'guto-lite' ),
    'section'     => 'shop_section',
    'required'      => array(
        array(
            'setting'   => 'is_related_products',
            'operator'  => '==',
            'value'     => '1',
        ),
    ),
);
$guto_lite_fields[] = array(
    'type'        => 'checkbox',
    'settings'    => 'enable_product_share',
    'label'       => esc_html__( 'Enable Product Share', 'guto-lite' ),
    'section'     => 'shop_section',
	'default'     => true,
);
$guto_lite_fields[] = array(
    'type'        => 'text',
    'settings'    => 'product_share_title',
    'label'       => esc_html__( 'Product Share Title', 'guto-lite' ),
    'section'     => 'shop_section',
    'required'      => array(
        array(
            'setting'   => 'enable_product_share',
            'operator'  => '==',
            'value'     => true,
        ),
    ),
);

$guto_lite_fields[] = array(
    'type'        => 'checkbox',
    'settings'    => 'enable_product_fb',
    'label'       => esc_html__( 'Enable Product Share on Facebook', 'guto-lite' ),
    'section'     => 'shop_section',
	'default'     => true,
    'required'      => array(
        array(
            'setting'   => 'enable_product_share',
            'operator'  => '==',
            'value'     => true,
        ),
    ),
);
$guto_lite_fields[] = array(
    'type'        => 'checkbox',
    'settings'    => 'enable_product_tw',
    'label'       => esc_html__( 'Enable Product Share on Twitter', 'guto-lite' ),
    'section'     => 'shop_section',
	'default'     => true,
    'required'      => array(
        array(
            'setting'   => 'enable_product_share',
            'operator'  => '==',
            'value'     => true,
        ),
    ),
);
$guto_lite_fields[] = array(
    'type'        => 'checkbox',
    'settings'    => 'enable_product_ld',
    'label'       => esc_html__( 'Enable Product Share on LinkedIn', 'guto-lite' ),
    'section'     => 'shop_section',
	'default'     => true,
    'required'      => array(
        array(
            'setting'   => 'enable_product_share',
            'operator'  => '==',
            'value'     => true,
        ),
    ),
);
$guto_lite_fields[] = array(
    'type'        => 'checkbox',
    'settings'    => 'enable_product_wp',
    'label'       => esc_html__( 'Enable Product Share on WhatsApp', 'guto-lite' ),
    'section'     => 'shop_section',
	'default'     => true,
    'required'      => array(
        array(
            'setting'   => 'enable_product_share',
            'operator'  => '==',
            'value'     => true,
        ),
    ),
);
$guto_lite_fields[] = array(
    'type'        => 'checkbox',
    'settings'    => 'enable_product_email',
    'label'       => esc_html__( 'Enable Product Share on Email', 'guto-lite' ),
    'section'     => 'shop_section',
	'default'     => true,
    'required'      => array(
        array(
            'setting'   => 'enable_product_share',
            'operator'  => '==',
            'value'     => true,
        ),
    ),
);
$guto_lite_fields[] = array(
    'type'        => 'checkbox',
    'settings'    => 'enable_product_cp',
    'label'       => esc_html__( 'Enable Product Share on Copy Link', 'guto-lite' ),
    'section'     => 'shop_section',
	'default'     => true,
    'required'      => array(
        array(
            'setting'   => 'enable_product_share',
            'operator'  => '==',
            'value'     => true,
        ),
    ),
);

$guto_lite_fields[] = array(
    'type'        => 'color',
    'settings'    => 'single_shop_bg_color',
    'label'       => esc_html__( 'Page Background Color', 'guto-lite' ),
    'section'     => 'shop_section',
    'transport'   => 'auto',
    'output'      => array(
        array(
            'element' 	=> '.products-details-area, .products-area',
            'property'	=> 'background-color',
        ),
    ),
);

$guto_lite_fields[] = array(
    'type'        => 'color',
    'settings'    => 'related_product_shop_bg_color',
    'label'       => esc_html__( 'Related Product Section Background Color', 'guto-lite' ),
    'section'     => 'shop_section',
    'transport'   => 'auto',
    'output'      => array(
        array(
            'element' 	=> '.woocommerce .related.products-area',
            'property'	=> 'background-color',
            'suffix'   => ' !important',
        ),
    ),
);