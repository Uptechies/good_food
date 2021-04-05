<?php
/**
 * Primary Nav
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

if ( defined( 'FW' ) ) {
    // Page settings
    $custom_logo	 = fw_get_db_post_option( get_the_ID(), 'custom_logo' );
}
$default_log = guto_lite_option('site_logo');
if(isset($custom_logo['url']) && $custom_logo['url'] !=''){
    $logo = $custom_logo['url'];
}else{
    $logo = guto_lite_option('site_logo');
}

$mobile_logo        = guto_lite_option('mobile_logo');
$nav_search         = guto_lite_option('nav_search');
$search_pl          = guto_lite_option('nav_search_title');
$nav_cart           = guto_lite_option('nav_cart');
$button             = guto_lite_option('nav_button_title');
$button_link        = guto_lite_option('nav_button_link');
$target             = guto_lite_option('nav_button_link_target');
?>

<div class="navbar-area">
    <div class="guto-lite-responsive-nav">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="logo">
                        <a href="<?php echo esc_url(home_url('/'));?>">
                            <?php if(!empty($mobile_logo)): ?>
                                <img src="<?php echo esc_url($mobile_logo);  ?>" alt="<?php echo esc_attr(get_bloginfo()); ?>">
                            <?php elseif(!empty($logo)): ?>
                                <img src="<?php echo esc_url($logo);  ?>" alt="<?php echo esc_attr(get_bloginfo()); ?>">
                            <?php else: ?>
                                <?php echo esc_html(get_bloginfo()); ?>
                            <?php endif ?>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="guto-lite-mobile-menu">
                        <button class="toggle-nav"></button>
                        <div id="site-navigation" role="navigation">
                            <div class="site-main-menu">
                                <?php
                                if(has_nav_menu('primary')) {
                                    wp_nav_menu(
                                        array(
                                            'menu'            => 'primary',
                                            'theme_location'  => 'primary',
                                            'container'       => null,
                                            'depth'           => 3,
                                            'walker'          => new Guto_Bootstrap_Navwalker(),
                                            'fallback_cb'     => 'Guto_Bootstrap_Navwalker::fallback',
                                        )
                                    );
                                }
                                ?>
                            </div>

                            <button class="icons menu-close"><?php esc_html_e( 'Close Menu', 'guto-lite' ); ?></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="guto-lite-nav">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand" href="<?php echo esc_url(home_url('/'));?>">
                    <?php if(!empty($logo)): ?>
                        <img src="<?php echo esc_url($logo);  ?>" alt="<?php echo esc_attr(get_bloginfo()); ?>">
                    <?php else: ?>
                        <?php echo esc_html(get_bloginfo()); ?>
                    <?php endif ?>
                </a>

                <div class="collapse navbar-collapse mean-menu">
                    <?php
                    if(has_nav_menu('primary')) {
                        wp_nav_menu(
                            array(
                                'menu'            => 'primary',
                                'theme_location'  => 'primary',
                                'container'       => null,
                                'menu_class'      => 'navbar-nav',
                                'depth'           => 3,
                                'walker'          => new Guto_Bootstrap_Navwalker(),
                                'fallback_cb'     => 'Guto_Bootstrap_Navwalker::fallback',
                            )
                        );
                    }
                    ?>

                    <div class="others-option d-flex align-items-center">

                        <?php if($nav_search): ?>
                            <div class="option-item">
                                <div class="search-box">
                                    <i class='bx bx-search'></i>
                                </div>
                            </div>
                        <?php endif; ?>

                        <?php if (class_exists('WooCommerce')): ?>
                            <?php if($nav_cart): ?>
                                <div class="option-item">
                                    <a href="<?php echo esc_url(wc_get_cart_url()) ?>" class="cart-btn">
                                        <i class='bx bx-shopping-bag'></i>
                                        <span class="mini-cart-count"></span>
                                    </a>
                                </div>
                            <?php endif; ?>
                        <?php endif; ?>

                        <?php if($button): ?>
                            <div class="option-item">
                                <a target="<?php echo esc_attr($target); ?>" href="<?php echo esc_url($button_link); ?>" class="default-btn"><i class='bx bx-plus'></i> <?php echo esc_html($button); ?></a>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </nav>
        </div>
    </div>

    <?php if($nav_search || $nav_cart): ?>
        <div class="others-option-for-responsive">
            <div class="container">
                <div class="dot-menu">
                    <div class="inner">
                        <div class="circle circle-one"></div>
                        <div class="circle circle-two"></div>
                        <div class="circle circle-three"></div>
                    </div>
                </div>

                <div class="container">
                    <div class="option-inner">
                        <div class="others-option d-flex align-items-center justify-content-center">

                            <?php if($nav_search): ?>
                                <div class="option-item">
                                    <div class="search-box">
                                        <i class='bx bx-search'></i>
                                    </div>
                                </div>
                            <?php endif; ?>

                            <?php if (class_exists('WooCommerce')): ?>
                                <?php if($nav_cart): ?>
                                    <div class="option-item">
                                        <a href="<?php echo esc_url(wc_get_cart_url()) ?>" class="cart-btn">
                                            <i class='bx bx-shopping-bag'></i>
                                            <span class="mini-cart-count"></span>
                                        </a>
                                    </div>
                                <?php endif; ?>
                            <?php endif; ?>

                            <?php if($button): ?>
                                <div class="option-item">
                                    <a target="<?php echo esc_attr($target); ?>" href="<?php echo esc_url($button_link); ?>" class="default-btn"><i class='bx bx-plus'></i> <?php echo esc_html($button); ?></a>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>

</div>

<?php if($nav_search): ?>
    <!-- Search Overlay -->
    <div class="search-overlay">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="search-overlay-layer"></div>
                <div class="search-overlay-layer"></div>
                <div class="search-overlay-layer"></div>

                <div class="search-overlay-close">
                    <span class="search-overlay-close-line"></span>
                    <span class="search-overlay-close-line"></span>
                </div>

                <div class="search-overlay-form">
                    <form action="<?php echo esc_url( home_url( '/' ) ); ?>" class="search-form" method="get">
                        <input type="text" name="search" class="input-search" placeholder="<?php echo esc_attr( $search_pl ); ?>">
                        <button type="submit"><i class='bx bx-search'></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Search Overlay -->
<?php endif; ?>