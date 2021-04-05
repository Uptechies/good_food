<?php if ( !defined( 'FW' ) ) {	wp_die(  'Forbidden' ); }

// phpcs:ignoreFile

$options = array(
	'_post_meta' => array(
		'title'		 => __( 'Post Settings', 'guto-lite' ),
		'type'		 => 'box',
		'priority'	 => 'high',
		'options'	 => array(
			'post_show_page_banner'	 => array(
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
            'post_show_breadcrumb'	 => array(
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
            'post_header_image'	 => array(
                'label'	 => esc_html__( ' Banner Image', 'guto-lite' ),
                'desc'	 => esc_html__( 'Upload a Post header image', 'guto-lite' ),
                'help'	 => esc_html__( "This default header image.", 'guto-lite' ),
                'type'	 => 'upload'
            ),
		),
	),
);
