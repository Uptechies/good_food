<?php if ( !defined( 'FW' ) ) {	wp_die(  'Forbidden' ); }

// phpcs:ignoreFile

$options = array(
	'_post_meta' => array(
		'title'		 => esc_html__( 'Product Settings', 'guto-lite' ),
		'type'		 => 'box',
		'priority'	 => 'high',
		'options'	 => array(
			'show_product_banner'	 => array(
                'type'  => 'switch',
                'label' => esc_html__('Show Banner', 'guto-lite'),
                'value' => true,
                'left-choice' => array(
                    'value' => false,
                    'label' => esc_html__('Hide', 'guto-lite'),
                ),
                'right-choice' => array(
                    'value' => true,
                    'label' => esc_html__('Show', 'guto-lite'),
                ),
            ),
            'product_banner_top_title'	 => array(
                'type'  => 'text',
				'label' => esc_html__('Banner Top Title', 'guto-lite'),
				'value' => esc_html__('PRODUCTS', 'guto-lite'),

            ),
            'product_banner_title'	 => array(
                'type'  => 'text',
                'label' => esc_html__('Banner Title', 'guto-lite'),

            ),
            'product_show_breadcrumb'	 => array(
                'type'  => 'switch',
                'value' => false,
                'label' => esc_html__('Show Breadcrumb', 'guto-lite'),
                'left-choice' => array(
                    'value' => false,
                    'label' => esc_html__('Hide', 'guto-lite'),
                ),
                'right-choice' => array(
                    'value' => true,
                    'label' => esc_html__('Show', 'guto-lite'),
                ),

            ),
            'product_header_image'	 => array(
                'label'	 => esc_html__( 'Banner Image', 'guto-lite' ),
                'desc'	 => esc_html__( 'Upload a Page header image', 'guto-lite' ),
                'help'	 => esc_html__( "This default header image.", 'guto-lite' ),
                'type'	 => 'upload'
            ),
		),
	),
);