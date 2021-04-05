<?php
/**
 * Template for 404
 *
 * @package     Guto Lite
 * @author      Guto Lite
 * @copyright   Copyright (c) 2020, Guto Lite
 * @link        https://wpGuto.com/
 * @since       Guto Lite 1.0.3
 */

$guto_lite_title	 				= guto_lite_option( 'error_title' );
$guto_lite_subtitle	 			= guto_lite_option( 'error_subtitle' );
$guto_lite_back_to_home_label	= guto_lite_option('back_to_home_label' );
$guto_lite_image	 				= guto_lite_option('404_image' );

?>

<div class="error-area ptb-100">
    <div class="container">
        <div class="error-content">

            <?php if($guto_lite_image): ?>
                <img src="<?php echo esc_url($guto_lite_image); ?>" alt="<?php echo esc_attr($guto_lite_title); ?>">
            <?php else: ?>
                <img src="<?php echo esc_url(GUTO_LITE_IMAGES.'/error.png');  ?>" alt="<?php echo esc_attr($guto_lite_title); ?>">
            <?php endif; ?>

            <h3><?php echo esc_html( $guto_lite_title ); ?></h3>
            <p><?php echo esc_html( $guto_lite_subtitle ); ?></p>
            <?php if( $guto_lite_back_to_home_label != '' ): ?>
                <a href="<?php echo esc_url(home_url('/'));?>" class="default-btn"><i class='bx bx-home-circle'></i> <?php echo esc_html($guto_lite_back_to_home_label);?></a>
            <?php endif; ?>
        </div>
    </div>
</div>