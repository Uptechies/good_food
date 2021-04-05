<?php
/**
 * Shop Page Header
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Banner Shape Images
 */
$banner_section 	= guto_lite_option( 'banner_style' );
$banner_shape1 		= guto_lite_option( 'banner_shape1' );
$banner_shape2		= guto_lite_option( 'banner_shape2' );

/**
 * Banner Options
 */
$hide_banner        = guto_lite_option( 'shop_hide_banner' );
$bg_img	            = guto_lite_option( 'shop_page_bg_image' );
$hide_breadcrumb	= guto_lite_option( 'shop_breadcrumb' );

if ( $hide_banner == true ):

	if ( is_product_category() ) {
		global $wp_query;
	    $product_cat 	= $wp_query->get_queried_object();
	    $thumbnail_id 	= get_term_meta( $product_cat->term_id, 'thumbnail_id', true );
	    $bg_img 		= wp_get_attachment_url( $thumbnail_id );
	}
?>

	<div class="page-title-area <?php echo esc_attr($banner_section); ?>" style="background-image:url( <?php echo esc_url( $bg_img ); ?> );">
		<div class="container">
			<div class="page-title-content">
				<?php if($hide_breadcrumb == true): ?>
					<span class="sub-title"><?php woocommerce_breadcrumb(); ?></span>
				<?php endif; ?>
				<h2><?php woocommerce_page_title(); ?></h2>

			</div>
		</div>

		<?php if($banner_shape1): ?>
			<div class="shape9"><img src="<?php echo esc_url($banner_shape1); ?>" alt="<?php echo esc_attr(woocommerce_page_title()); ?>"></div>
		<?php endif; ?>

		<?php if($banner_shape2): ?>
			<div class="shape10"><img src="<?php echo esc_url($banner_shape2); ?>" alt="<?php echo esc_attr(woocommerce_page_title()); ?>"></div>
		<?php endif; ?>

	</div>

<?php endif; ?>
