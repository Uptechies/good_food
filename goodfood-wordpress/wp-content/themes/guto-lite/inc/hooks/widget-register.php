<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
if (!function_exists('guto_lite_widget_init')) {

    function guto_lite_widget_init()
    {
        if (function_exists('register_sidebar')) {
            register_sidebar(
                array(
                    'name'          => esc_html__( 'Blog Sidebar', 'guto-lite' ),
                    'id'            => 'sidebar-1',
                    'description'   => esc_html__( 'Add widgets here.', 'guto-lite' ),
                    'before_widget' => '<div id="%1$s" class="widget %2$s">',
                    'after_widget'  => '</div>',
                    'before_title'  => '<h2 class="widget-title">',
                    'after_title'   => '</h2>',
                )
            );

            $footer_column = guto_lite_get_footer_column(guto_lite_option('footer_widget_layout'));
            for ($i = 1; $i <= $footer_column; $i++) {
                $args_sidebar = array(
                    'name' => esc_html__('Footer Widget ', 'guto-lite') . $i,
                    'id' => 'footer-widget-' . $i,
                    'description' => esc_html__('Appears on footer area ', 'guto-lite').$i,
                    'before_widget' => '<div class="single-footer-widget single-widget %2$s">',
                    'after_widget' => '</div>',
                    'before_title' => '<h3>',
                    'after_title' => '</h3>',
                );

                register_sidebar($args_sidebar);
            }

            if (class_exists('WooCommerce')):
                register_sidebar( array(
                    'name'          => esc_html__( 'Shop Sidebar', 'guto-lite' ),
                    'id'            => 'shop',
                    'description'   => esc_html__( 'Add widgets here.', 'guto-lite' ),
                    'before_widget' => '<div class="%2$s shop-widget">',
                    'after_widget'  => '</div>',
                    'before_title'  => '<h3>',
                    'after_title'   => '</h3>',
                ) );
            endif;
        }
    }

    add_action('widgets_init', 'guto_lite_widget_init');
}