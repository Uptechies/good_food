<?php
/*
 * Top Header
 *
*/

$guto_lite_fields[]= array(
    'type'        => 'switch',
    'settings'    => 'is_sticky_header',
    'label'       => esc_html__( 'Make Sticky Header', 'guto-lite' ),
    'section'     => 'nav_section',
    'default'     => false,
    'choices'     => array(
        'on'  => esc_attr__( 'Enable', 'guto-lite' ),
        'off' => esc_attr__( 'Disable', 'guto-lite' ),
    ),
);

$guto_lite_fields[] = array(
    'type'        => 'color',
    'settings'    => 'nav_bg_color',
    'label'       => esc_html__( 'Navigation Background Color', 'guto-lite' ),
    'section'     => 'nav_section',
    'transport'   => 'auto',
    'output'      => array(
        array(
            'element' 	=> '.navbar-area .guto-lite-nav',
            'property'	=> 'background-color',
        ),
    ),
);

$guto_lite_fields[] = array(
    'type'        => 'color',
    'settings'    => 'sticky_nav_bg_color',
    'label'       => esc_html__( 'Sticky Nav Background Color', 'guto-lite' ),
    'section'     => 'nav_section',
    'transport'   => 'auto',
    'required'      => array(
        array(
            'setting'   => 'is_sticky_header',
            'operator'  => '==',
            'value'     => true,
        ),
    ),
    'output'      => array(
        array(
            'element' 	=> '.is-sticky.navbar-area .guto-lite-nav',
            'property'	=> 'background-color',
        ),
    ),
);

$guto_lite_fields[] = array(
    'type'        => 'color',
    'settings'    => 'nav_menu_color',
    'label'       => esc_html__( 'Menu Color', 'guto-lite' ),
    'section'     => 'nav_section',
    'transport'   => 'auto',
    'output'      => array(
        array(
            'element' 	=> '.navbar-area .guto-lite-nav .navbar .nav-item a, .navbar-area .guto-lite-nav .navbar .nav-item .dropdown-menu li a, .navbar-area .guto-lite-nav .navbar .nav-item .dropdown-menu li .dropdown-menu li a',
            'property'	=> 'color',
        ),
    ),
);

$guto_lite_fields[] = array(
    'type'        => 'color',
    'settings'    => 'active_nav_menu_color',
    'label'       => esc_html__( 'Active Menu Color', 'guto-lite' ),
    'section'     => 'nav_section',
    'transport'   => 'auto',
    'output'      => array(
        array(
            'element' 	=> '.guto-lite-nav .nav-item.active a, .guto-lite-nav .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li.active a, .guto-lite-nav .navbar .navbar-nav .nav-item:hover a, .guto-lite-nav .navbar .navbar-nav .nav-item.active a, .guto-lite-nav .navbar .navbar-nav .nav-item .dropdown-menu li.active a',
            'property'	=> 'color',
        ),
    ),
);

$guto_lite_fields[] = array(
    'type'        => 'color',
    'settings'    => 'nav_menu_hover_color',
    'label'       => esc_html__( 'Menu Hover Color', 'guto-lite' ),
    'section'     => 'nav_section',
    'transport'   => 'auto',
    'output'      => array(
        array(
            'element' 	=> '.navbar-area .guto-lite-nav .navbar .nav-item a:hover, .navbar-area .guto-lite-nav .navbar .nav-item .dropdown-menu li a:hover, .navbar-area .guto-lite-nav .navbar .nav-item .dropdown-menu li .dropdown-menu li a:hover',
            'property'	=> 'color',
        ),
    ),
);

/*
 *
 * Main Nav
 *
 */
$guto_lite_fields[] = array(
    'type'        => 'custom',
    'settings'    => 'nav_header_title',
    'label'       => '',
    'section'     => 'nav_section',
    'default'     => '<div class="xs-title-divider">'.esc_html__("Navigation Section","guto-lite").'</div>',
);

$guto_lite_fields[]= array(
    'type'        => 'switch',
    'settings'    => 'nav_search',
    'label'       => esc_html__( 'Show Search', 'guto-lite' ),
    'section'     => 'nav_section',
    'default'     => false,
    'choices'     => array(
        'on'  => esc_attr__( 'Enable', 'guto-lite' ),
        'off' => esc_attr__( 'Disable', 'guto-lite' ),
    ),
);

$guto_lite_fields[]= array(
    'type'        => 'text',
    'settings'    => 'nav_search_title',
    'label'       => esc_html__( 'Search Placeholder Text', 'guto-lite' ),
    'section'     => 'nav_section',
    'transport' => 'refresh',
    'default'     =>'',
    'required'      => array(
        array(
            'setting'   => 'nav_search',
            'operator'  => '!=',
            'value'     => false,
        )
    ),
);

$guto_lite_fields[]= array(
    'type'        => 'switch',
    'settings'    => 'nav_cart',
    'label'       => esc_html__( 'Show Cart', 'guto-lite' ),
    'section'     => 'nav_section',
    'default'     => false,
    'choices'     => array(
        'on'  => esc_attr__( 'Enable', 'guto-lite' ),
        'off' => esc_attr__( 'Disable', 'guto-lite' ),
    ),
);

$guto_lite_fields[]= array(
    'type'        => 'text',
    'settings'    => 'nav_button_title',
    'label'       => esc_html__( 'Button Text', 'guto-lite' ),
    'section'     => 'nav_section',
    'transport'   => 'refresh',
    'default'     => esc_html__( 'Hire Us', 'guto-lite' ),
);

$guto_lite_fields[]= array(
    'type'        => 'text',
    'settings'    => 'nav_button_link',
    'label'       => esc_html__( 'Button Link', 'guto-lite' ),
    'section'     => 'nav_section',
    'transport'   => 'refresh',
    'default'     => '#',
    'required'      => array(
        array(
            'setting'   => 'nav_button_title',
            'operator'  => '!=',
            'value'     => '',
        )
    ),
);

$guto_lite_fields[] = array(
    'type'        => 'select',
    'settings'    => 'nav_button_link_target',
    'label'       => esc_html__( 'Button Link Target', 'guto-lite' ),
    'section'     => 'nav_section',
    'default'     => '_self',
    'choices'     => array(
        '_blank'    => esc_html__('Load in a new window. ( _blank )',  'guto-lite' ),
        '_self'     => esc_html__('Load in the same frame as it was clicked. ( _self )',  'guto-lite' ),
    ),
    'required'      => array(
        array(
            'setting'   => 'nav_button_title',
            'operator'  => '!=',
            'value'     => '',
        )
    ),
);