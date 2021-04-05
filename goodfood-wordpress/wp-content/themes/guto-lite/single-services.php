<?php
/**
 * The template for displaying all single service page.
 * @package Guto Lite
 * @since 1.0.3
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();

    get_template_part( 'template-parts/header/content', 'services-header' ); ?>

    <?php guto_lite_primary_content_top(); ?>

        <div id="content" class="services-details-area">
            <?php while (have_posts()) : the_post();

                $thecontent = get_the_content();
                if(empty($thecontent)){
                ?>
                    <div class="guto-lite-single-blank-page"></div>
                <?php } ?>

                <?php the_content(); ?>

            <?php endwhile; ?>
        </div>

    <?php guto_lite_primary_content_bottom(); ?>

<?php
get_footer();
