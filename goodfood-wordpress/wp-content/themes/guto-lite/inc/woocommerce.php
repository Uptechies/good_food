<?php
/**
 *  Guto Lite WooCommerce functions and definitions
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

// Theme WooCommerce Support
add_theme_support( 'woocommerce', apply_filters( 'storefront_woocommerce_args', array(
    'single_image_width'    => 530,
    'thumbnail_image_width' => 350,
    add_theme_support( 'wc-product-gallery-zoom' ),
    add_theme_support( 'wc-product-gallery-lightbox' ),
    add_theme_support( 'wc-product-gallery-slider' ),
) ) );

if ( is_active_sidebar( 'shop' ) ) {
    // Change number or products per row to 3
    add_filter('loop_shop_columns', 'guto_lite_loop_columns', 999);
    if (!function_exists('guto_lite_loop_columns')) {
        function guto_lite_loop_columns() {

            $shop_sidebar = guto_lite_option( 'shop_sidebar' );

            if ( isset( $_GET['shop-sidebar'] ) ):
                if( $_GET['shop-sidebar'] == 'right' || $_GET['shop-sidebar'] == 'left' ):
                    return 2; // 2 products per row
                elseif( $_GET['shop-sidebar'] == 'none' ):
                    return 3; // 3 products per row
                endif;
            else:
                if ( $shop_sidebar == 'none' ):
                    return 3; // 3 products per row
                else:
                    return 2; // 2 products per row
                endif;
            endif;
        }
    }
}else{
    // Change number or products per row to 3
    add_filter('loop_shop_columns', 'guto_lite_loop_columns', 999);
    if (!function_exists('guto_lite_loop_columns')) {
        function guto_lite_loop_columns() {
            return 3; // 3 products per row
        }
    }
}

// Change number of related products output
add_filter( 'woocommerce_output_related_products_args', 'guto_lite_related_products_args', 20 );
function guto_lite_related_products_args( $args ) {

    $count                  = guto_lite_option( 'related_product_count' );
    $shop_sidebar           = guto_lite_option( 'shop_sidebar' );

    $args['posts_per_page'] = $count; // related products

    if ( isset( $_GET['shop-sidebar'] ) ):
        if( $_GET['shop-sidebar'] == 'right' || $_GET['shop-sidebar'] == 'left' ):
            $args['columns'] = 2; // 2 products per row
        elseif( $_GET['shop-sidebar'] == 'none' ):
            $args['columns'] = 3; // 3 products per row
        endif;
    else:
        if ( $shop_sidebar == 'none' ):
            $args['columns'] = 3; // 3 products per row
        else:
            $args['columns'] = 2; // 2 products per row
        endif;
    endif;

    return $args;
}

if ( ! function_exists( 'guto_lite_wc_refresh_mini_cart_count' ) ) :
    function guto_lite_wc_refresh_mini_cart_count($fragments){
        ob_start();
        ?>
        <span class="mini-cart-count">
            <?php echo esc_html(WC()->cart->get_cart_contents_count()); ?>
        </span>
        <?php
            $fragments['.mini-cart-count'] = ob_get_clean();
        return $fragments;
    }
endif;
add_filter( 'woocommerce_add_to_cart_fragments', 'guto_lite_wc_refresh_mini_cart_count');

// Filter woocommerce_checkout_fields
if ( ! function_exists( 'guto_lite_field_class_add' ) ) :
    function guto_lite_field_class_add($fields) {
    foreach ($fields as &$fieldset) {
        foreach ($fieldset as &$field) {
            $field['class'][] = 'form-group';
            $field['input_class'][] = 'form-control';
        }
    }
    return $fields;
}
endif;
add_filter('woocommerce_checkout_fields', 'guto_lite_field_class_add' );

/**
 * Post Per page
 */
add_filter( 'loop_shop_per_page', 'guto_lite_redefine_products_per_page', 9999 );

function guto_lite_redefine_products_per_page( $per_page ) {
    $shop_sidebar   = guto_lite_option( 'product_count' );

    if( isset( $shop_sidebar ) ):
        $count = $shop_sidebar;
    else:
        $count = '6';
    endif;
    $per_page = $count;
    return $per_page;
}
