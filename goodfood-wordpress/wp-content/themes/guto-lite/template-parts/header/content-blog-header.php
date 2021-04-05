<?php
/**
 * Blog Header
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Banner Controls
 */
$banner_section 		     = guto_lite_option( 'banner_style' );
$banner_shape1 			     = guto_lite_option( 'banner_shape1' );
$banner_shape2		 	     = guto_lite_option( 'banner_shape2' );
$show_breadcrumb             = guto_lite_option( 'show_breadcrumb' );
$global_page_banner_img		 = guto_lite_option( 'blog_banner_img' );
$global_page_banner_title	 = guto_lite_option( 'blog_banner_title' );
$global_show_page_banner	 = guto_lite_option( 'show_blog_banner' );

// Banner Background Image
if ( $global_page_banner_img != '' ) {
	$bg_image = 'style="background-image: url(' . $global_page_banner_img . ')"';
} else {
	$bg_image = 'style="background-image: url(' . GUTO_LITE_IMAGES_URI . '/page-title/page-title-bg1.jpg)"';
}

// Banner Title
if ( $global_page_banner_title != '' ) {
	$page_banner_title = $global_page_banner_title;
} else {
	$page_banner_title = get_the_title();
}

if ( $global_show_page_banner ): ?>
    <div class="page-title-area  <?php echo esc_attr($banner_section); ?>" <?php echo wp_kses_post( $bg_image ); ?>>
        <div class="container">
            <div class="page-title-content">
                <h2>
                    <?php
                    if ( is_archive() ) {
                        the_archive_title();
                    } elseif ( is_search() ) {
                        esc_html_e('Search Results for: ', 'guto-lite');
                        echo esc_html(get_search_query());
                    } else {
                        echo esc_html( $page_banner_title );
                    }
                    ?>
                </h2>

                <?php if ( $show_breadcrumb  == true ): ?>
                    <ul>
                        <li><a href="<?php echo esc_url( get_home_url( '/' ) ); ?>"><?php echo esc_html_e( 'Home', 'guto-lite' ) ?></a></li>
                        <li>
                            <?php
                            if ( is_archive() ) {
                                the_archive_title();
                            } elseif ( is_search() ) {
                                esc_html_e('Search Results for: ', 'guto-lite');
                                echo esc_html(get_search_query());
                            } else {
                                echo esc_html( $page_banner_title );
                            }
                            ?>
                        </li>
                    </ul>
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