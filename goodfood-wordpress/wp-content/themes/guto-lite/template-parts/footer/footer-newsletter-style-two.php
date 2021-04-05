<?php
/**
 * The newsletter style two for Guto Lite Theme.
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
$newsletter_bg_img           = guto_lite_option('newsletter_bg_img');

if ( defined( 'FW' ) ) {
    $is_newsletter	= fw_get_db_post_option( get_the_ID(), 'show_newsletter_section' );
    if(is_null($is_newsletter)):
        $is_newsletter  = guto_lite_option('is_newsletter');
    endif;
}else{
    $is_newsletter  = guto_lite_option('is_newsletter');
}

if($is_newsletter ): ?>
    <section class="subscribe-area-two ptb-100">
        <div class="container">
            <div class="subscribe-inner-area-two ptb-100 jarallax" data-jarallax='{"speed": 0.3}' style="background-image:url(<?php echo esc_url($newsletter_bg_img); ?>);">

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
            </div>
        </div>
    </section>
    <?php
endif;