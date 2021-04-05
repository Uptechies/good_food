<?php
/**
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to guto-lite/woocommerce/single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */
global $guto_lite_opt;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header( 'shop' );

$shop_sidebar   = guto_lite_option( 'shop_sidebar' );

remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20 );

?>
    <?php get_template_part( 'template-parts/header/content', 'product-header' ); ?>

    <div class="products-details-area products-details-desc products_details ptb-100">
        <div class="container">
            <div class="row">
                <?php if ( is_active_sidebar( 'shop' ) ): ?>
                    <?php if ( isset( $_GET['shop-sidebar'] ) ): ?>
                    <?php $guto_lite_shop_cat_sidebar = sanitize_text_field(wp_unslash($_GET['shop-sidebar'])); ?>
                        <?php if ( $guto_lite_shop_cat_sidebar == 'none' ): ?>
                            <div class="col-lg-12 col-md-12">
                        <?php elseif ( $guto_lite_shop_cat_sidebar == 'left' ): ?>
                            <?php do_action( 'woocommerce_sidebar' ); ?>
                            <div class="col-lg-8 col-md-12">
                        <?php elseif ( $guto_lite_shop_cat_sidebar == 'right' ): ?>
                            <div class="col-lg-8 col-md-12">
                        <?php endif; ?>
                    <?php else: ?>
                        <?php if( $shop_sidebar == 'left' ): ?>
                            <?php do_action( 'woocommerce_sidebar' ); ?>
                            <div class="col-lg-8 col-md-12">
                        <?php elseif ( $shop_sidebar == 'right' ): ?>
                            <div class="col-lg-8 col-md-12">
                        <?php else: ?>
                            <div class="col-lg-12 col-md-12">
                        <?php endif; ?>
                    <?php endif; ?>
                <?php else: ?>
                    <div class="col-lg-12 col-md-12">
                <?php endif; ?>

                    <?php
                    /**
                     * woocommerce_before_main_content hook.
                     *
                     * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
                     * @hooked woocommerce_breadcrumb - 20
                     */

                    do_action( 'woocommerce_before_main_content' );
                    ?>

                        <?php while ( have_posts() ) : the_post(); ?>

                            <?php wc_get_template_part( 'content', 'single-product' ); ?>

                        <?php endwhile; // end of the loop. ?>

                    <?php
                        /**
                         * woocommerce_after_main_content hook.
                         *
                         * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
                         */
                        do_action( 'woocommerce_after_main_content' );
                    ?>
                </div>
                <?php
                if ( isset( $_GET['shop-sidebar'] ) ):
                    if ( $guto_lite_shop_cat_sidebar == 'right' ) :
                        do_action( 'woocommerce_sidebar' );
                    endif;
                else:
                    if ( $shop_sidebar == 'right' ):
                        do_action( 'woocommerce_sidebar' );
                    endif;
                endif;
                ?>
            </div>
        </div>
    </div>

    <?php woocommerce_output_related_products(); ?>

    <?php get_footer( 'shop' );

    /* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */
    ?>