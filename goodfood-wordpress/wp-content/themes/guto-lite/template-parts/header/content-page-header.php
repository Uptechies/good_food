<?php
/**
 * Page Header
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Banner Options
 */
$banner_section 		= guto_lite_option( 'banner_style' );
$banner_shape1 			= guto_lite_option( 'banner_shape1' );
$banner_shape2		 	= guto_lite_option( 'banner_shape2' );

if ( defined( 'FW' ) ) {
	/**
	 * Banner Options
	 */
	$header_image		 = fw_get_db_post_option( get_the_ID(), 'header_image' );
	$show_breadcrumb     = fw_get_db_post_option( get_the_ID(), 'show_breadcrumb' );
    $show_page_banner    = fw_get_db_post_option( get_the_ID(), 'show_page_banner' );
    $top_title    		 = fw_get_db_post_option( get_the_ID(), 'page_banner_top_title' );
    $page_title    		 = fw_get_db_post_option( get_the_ID(), 'page_banner_title' );

	if (isset( $header_image[ 'url' ]) && $header_image[ 'url' ] != '') {
		$bg_image = 'style="background-image: url(' . $header_image[ 'url' ] . ')"';
	} else {
	    $bg_image = 'style="background-image: url(' . GUTO_LITE_IMAGES_URI . '/page-title/page-title-bg1.jpg)"';
	}

	// Banner Title
	if(isset($page_title ) && $page_title != ''){
		$page_banner_title = $page_title;
	}else{
		$page_banner_title = get_the_title();
	}

	// Breadcrumb
    if ( isset( $show_breadcrumb ) ) {
		$page_show_breadcrumb = $show_breadcrumb;
	}else {
		$page_show_breadcrumb = $global_page_show_breadcrumb;
	}

}else {
	$bg_image               = 'style="background-image: url(' . GUTO_LITE_IMAGES_URI . '/page-title/page-title-bg1.jpg)"';
	$page_banner_title      = get_the_title();
	$show_page_banner       = 'yes';
	$page_show_breadcrumb   = 'no';
	$banner_shape1 			= '' . GUTO_LITE_IMAGES_URI . '/shape9.png';
	$banner_shape2		 	= '' . GUTO_LITE_IMAGES_URI . '/shape10.png';
}

if ( $show_page_banner ): ?>
	<div class="page-title-area <?php echo esc_attr($banner_section); ?>" <?php echo wp_kses_post( $bg_image ); ?>>
		<div class="container">
			<div class="page-title-content">
				<?php if(isset($top_title) && $top_title != ''): ?>
					<span class="sub-title"><?php echo esc_html($top_title); ?></span>
                <?php endif; ?>
                <h2><?php echo esc_html($page_banner_title); ?></h2>

				<?php if ($page_show_breadcrumb): ?>
                    <?php guto_lite_get_breadcrumbs(); ?>
                <?php endif; ?>
			</div>
		</div>

		<?php if($banner_shape1): ?>
			<div class="shape9"><img src="<?php echo esc_url($banner_shape1); ?>" alt="<?php echo esc_attr($page_banner_title); ?>"></div>
		<?php endif; ?>

		<?php if($banner_shape2): ?>
			<div class="shape10"><img src="<?php echo esc_url($banner_shape2); ?>" alt="<?php echo esc_attr($page_banner_title); ?>"></div>
		<?php endif; ?>

	</div>
<?php endif; ?>
