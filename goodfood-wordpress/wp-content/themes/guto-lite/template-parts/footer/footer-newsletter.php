<?php
/**
 * The newsletter for Guto Lite Theme.
 * @package Guto Lite
 * @since 1.0.3
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$is_newsletter               = guto_lite_option('is_newsletter');
$newsletter_top_title        = guto_lite_option('newsletter_top_title');
$newsletter_title        	 = guto_lite_option('newsletter_title');
$newsletter_action_url       = guto_lite_option('newsletter_action_url');
$newsletter_pt       	     = guto_lite_option('newsletter_pt');
$newsletter_button       	 = guto_lite_option('newsletter_button');
$newsletter_left_img         = guto_lite_option('newsletter_left_img');
$newsletter_right_img        = guto_lite_option('newsletter_right_img');

if ( defined( 'FW' ) ) {
    $is_newsletter	= fw_get_db_post_option( get_the_ID(), 'show_newsletter_section' );
    if($is_newsletter != null):
    $is_newsletter	= fw_get_db_post_option( get_the_ID(), 'show_newsletter_section' );
    else:
        $is_newsletter  = guto_lite_option('is_newsletter');
    endif;
}else{
    $is_newsletter  = guto_lite_option('is_newsletter');
}

if($is_newsletter ): ?>
    <section class="subscribe-area">
        <div class="container">
            <div class="subscribe-inner-area ptb-100">

                <?php if($newsletter_top_title): ?>
                    <span class="sub-title"><?php echo esc_html($newsletter_top_title); ?></span>
                <?php endif; ?>

                <?php if($newsletter_title): ?>
                    <h2><?php echo esc_html($newsletter_title); ?></h2>
                <?php endif; ?>

                <form class="mailchimp newsletter-form" method="post">
                    <label><i class='bx bx-envelope-open'></i></label>
                    <input type="email" class="input-newsletter memail" placeholder="<?php echo esc_attr($newsletter_pt); ?>" name="EMAIL" required>
                    <?php if($newsletter_button): ?>
                        <button type="submit" class="default-btn"><i class='bx bx-paper-plane'></i> <?php echo esc_html($newsletter_button); ?></button>
                    <?php endif; ?>
                    <p class="mchimp-errmessage" style="display: none;"></p>
                    <p class="mchimp-sucmessage" style="display: none;"></p>
                </form>

                <?php if($newsletter_left_img): ?>
                    <div class="subscribe-shape1"><img src="<?php echo esc_url($newsletter_left_img);  ?>" alt="<?php echo esc_attr($newsletter_title); ?>"></div>
                <?php endif; ?>
                <?php if($newsletter_right_img): ?>
                    <div class="subscribe-shape2"><img src="<?php echo esc_url($newsletter_right_img);  ?>" alt="<?php echo esc_attr($newsletter_title); ?>"></div>
                <?php endif; ?>
            </div>
        </div>
    </section>
    <?php
endif;