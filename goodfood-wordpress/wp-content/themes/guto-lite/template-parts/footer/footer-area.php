<?php
/**
 * The footer for Guto Lite Theme.
 * @package Guto Lite
 * @since 1.0.3
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$footer_style 		    = guto_lite_option('footer_style');
$copyright_text 		= guto_lite_option('copyright_text');
$footer_columns	 		= guto_lite_option('footer_widget_layout');
$show_footer_top 		= guto_lite_option('show_footer_top');
$shape_image 		    = guto_lite_option('footer_shape_image');

if ($footer_columns == 12) {
    $footer_column = 1;
} elseif ($footer_columns == 6) {
    $footer_column = 2;
} elseif ($footer_columns == 4) {
    $footer_column = 3;
} elseif ($footer_columns == 3) {
    $footer_column = 4;
}

if (is_active_sidebar('footer-widget-1') || is_active_sidebar('footer-widget-2') || is_active_sidebar('footer-widget-3') || is_active_sidebar('footer-widget-4')):
    $footer_class   = "footer-area";
    $footer_bottom  = "footer-bottom-area";
else:
    $footer_class   = "footer-section";
    $footer_bottom  = "footer-bottom-area mt-0";
endif;

if($footer_style == '2'):
    $footer_class .= " footer-light";
    $footer_bottom .= " bottom-footer-light";
endif;
?>

<footer class="<?php echo esc_attr($footer_class); ?>">
	<?php if (is_active_sidebar('footer-widget-1') || is_active_sidebar('footer-widget-2') || is_active_sidebar('footer-widget-3') || is_active_sidebar('footer-widget-4')): ?>
        <div class="container">
            <div class="row">
                <?php for ($i = 1; $i <= $footer_column; $i++): ?>
                    <div class="col-lg-<?php echo esc_attr($footer_columns); ?>">
                        <?php
                        if (is_active_sidebar('footer-widget-' . esc_html($i))):
                            dynamic_sidebar('footer-widget-' . esc_html($i));
                        endif;
                        ?>
                    </div>
                <?php endfor; ?>
            </div>
        </div>
	<?php endif; ?>

    <div class="<?php echo esc_attr($footer_bottom); ?>">
        <div class="container">
            <div class="row align-items-center">
                <?php if($copyright_text ): ?>
                    <div class="col-lg-6 col-sm-6 col-md-6">
                        <p><?php echo wp_kses_post( $copyright_text ); ?></p>
                    </div>
                <?php endif; ?>

                <div class="col-lg-6 col-sm-6 col-md-6">
                    <?php
                    if(has_nav_menu('footer')) {
                        wp_nav_menu(
                            array(
                                'theme_location' 	=> 'footer',
                                'menu'            	=> 'footer',
                                'container'       	=> 'ul',
                                'fallback_cb'  		=> false,
                                'menu_class'      	=> 'menu',
                                'depth'           	=> 1,
                            )
                        );
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>

    <?php if($shape_image): ?>
        <div class="circle-map"><img src="<?php echo esc_url($shape_image); ?>" alt="<?php esc_attr_e('Circle', 'guto-lite'); ?>"></div>
	<?php endif; ?>
</footer>