<?php
/**
 * Theme top bar
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Options
 */
$is_top_header  = guto_lite_option('is_top_header');
$items 	        = guto_lite_option('top_header_info_items');
$links 	        = guto_lite_option('top_header_links_items');
$user_links 	= guto_lite_option('top_header_links_dhs_items');
?>

<?php if($is_top_header): ?>
    <div class="top-header-area">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <?php if ($items) { ?>
                        <?php if (is_array($items) && !empty($items)): ?>
                            <ul class="top-header-contact-info">
                                <?php foreach ($items as $index => $item): ?>
                                    <li><a href="<?php echo esc_url($item['info_link']) ?>"><i class="<?php echo esc_attr($item['info_icon']) ?>"></i> <?php echo esc_html($item['info_text']) ?></a></li>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>
                    <?php } ?>
                </div>

                <div class="col-lg-6 col-md-6">
                    <div class="top-header-right">
                        <?php if ( !is_user_logged_in() ) { ?>
                            <?php if ($links) { ?>
                                <?php if (is_array($links) && !empty($links)): ?>
                                    <ul class="d-flex align-items-center justify-content-end">
                                        <li></li>
                                        <?php foreach ($links as $index => $item): ?>
                                            <li><a href="<?php echo esc_url($item['link']) ?>"><i class="<?php echo esc_attr($item['icon']) ?>"></i> <?php echo esc_html($item['text']) ?></a></li>
                                        <?php endforeach; ?>
                                    </ul>
                                <?php endif; ?>
                            <?php } ?>
                        <?php }else{ ?>
                            <?php if ($user_links) { ?>
                                <?php if (is_array($user_links) && !empty($user_links)): ?>
                                    <ul class="d-flex align-items-center justify-content-end">
                                        <li></li>
                                        <?php foreach ($user_links as $index => $item): ?>
                                            <li><a href="<?php echo esc_url($item['link']) ?>"><i class="<?php echo esc_attr($item['icon']) ?>"></i> <?php echo esc_html($item['text']) ?></a></li>
                                        <?php endforeach; ?>
                                    </ul>
                                <?php endif; ?>
                            <?php } ?>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>