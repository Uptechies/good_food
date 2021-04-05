<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Guto Lite
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();

get_template_part( 'template-parts/header/content', 'blog-header' );

$blog_sidebar = guto_lite_option( 'blog_sidebar' );

?>

<div id="content" class="blog-area ptb-100"><!-- Start Blog Area -->
    <div class="container">
        <div class="row">
            <div class="<?php echo esc_attr( guto_lite_blog_sidebar() ); ?>"><!-- Start Blog Content -->
                <?php
                if ( have_posts() ) :
                    while ( have_posts() ) :
                        the_post();
                        get_template_part( 'template-parts/content', get_post_format() );
                    endwhile;
                else:
                    get_template_part( 'template-parts/content', 'none' );
                endif;
                ?>

                <!-- Stat Pagination -->
                <div class="pagination-area text-center">
                    <nav aria-label="navigation">
                    <?php echo wp_kses_post(paginate_links( array(
                        'format' => '?paged=%#%',
                        'prev_text' => '<i class="bx bx-chevron-left"></i>',
                        'next_text' => '<i class="bx bx-chevron-right"></i>',
                            )
                        ) );
                    ?>
                    </nav>
                </div>
                <!-- End Pagination -->
            </div><!-- End Blog Content -->

            <?php if( $blog_sidebar == 'right' ): ?>
                <?php get_sidebar(); ?>
            <?php endif; ?>
        </div>
    </div>
</div><!-- End Blog Area -->

<?php
get_footer();