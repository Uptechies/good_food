<?php
/**
 * Single Header
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$guto_lite_title = get_the_title();

if ( defined( 'FW' ) ) {

	// Post settings
	$image		     	= fw_get_db_post_option( get_the_ID(), 'post_header_image' );
	$show_breadcrumb    = fw_get_db_post_option( get_the_ID(), 'post_show_breadcrumb' );
	$show_page_banner   = fw_get_db_post_option( get_the_ID(), 'post_show_page_banner' );

	// Background Image
	if($image != ''):
		$bg_image = 'style="background-image: url(' . $image[ 'url' ] . ')"';
	else:
		$bg_image = 'style="background-image: url(' . GUTO_LITE_IMAGES_URI . '/page-title/page-title-bg1.jpg)"';
	endif;

}else {
	$bg_image               = 'style="background-image: url(' . GUTO_LITE_IMAGES_URI . '/page-title/page-title-bg1.jpg)"';
	$show_page_banner       = true;
	$show_breadcrumb   		= false;
}

$banner_section = guto_lite_option( 'banner_style' );
$banner_shape1	= guto_lite_option( 'banner_shape1' );
$banner_shape2	= guto_lite_option( 'banner_shape2' );
?>

	<?php if( $show_page_banner  == true ): ?>
		<div class="page-title-area <?php echo esc_attr($banner_section); ?>" <?php echo wp_kses_post( $bg_image ); ?>>
			<div class="container">
				<div class="page-title-content">
					<?php if($guto_lite_title != ''): ?>
						<h2><?php the_title(); ?></h2>
					<?php else: ?>
						<h2><?php echo esc_html__('No Title', 'guto-lite'); ?></h2>
					<?php endif; ?>
					<?php if ( $show_breadcrumb == true ): ?>
						<ul>
							<li><a href="<?php echo esc_url( get_home_url( '/' ) ); ?>"><?php esc_html_e('Home', 'guto-lite'); ?></a></li>
							<?php if($guto_lite_title != ''): ?>
								<li class="active"><?php the_title(); ?></li>
							<?php else: ?>
								<li class="active"><?php echo esc_html__('No Title', 'guto-lite'); ?></li>
							<?php endif; ?>
						</ul>
					<?php endif; ?>
				</div>
			</div>

			<?php if($banner_shape1): ?>
				<div class="shape9"><img src="<?php echo esc_url($banner_shape1); ?>" alt="<?php echo esc_attr($guto_lite_title); ?>"></div>
			<?php endif; ?>

			<?php if($banner_shape2): ?>
				<div class="shape10"><img src="<?php echo esc_url($banner_shape2); ?>" alt="<?php echo esc_attr($guto_lite_title); ?>"></div>
			<?php endif; ?>

		</div>
	<?php endif; ?>