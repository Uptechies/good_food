<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Guto Lite
 */

get_header();

get_template_part( 'template-parts/header/content', 'blog-header' );

$blog_sidebar = guto_lite_option( 'blog_sidebar' );

?>
    <!-- Start Blog Area -->
    <div id="content" class="blog-area ptb-100">
        <div class="container">
            <div class="row">
                <!-- Start Blog Content -->
                <div class="<?php echo esc_attr( guto_lite_blog_sidebar() ); ?>">
                    <?php
                    if ( have_posts() ) :
                        while ( have_posts() ) :
                            the_post();
                            get_template_part( 'template-parts/content', get_post_format());
                        endwhile;
                    else :
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
                </div>
                <!-- End Blog Content -->

                <?php if( $blog_sidebar == 'right' ): ?>
                    <?php get_sidebar(); ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <!-- End Blog Area -->

<?php
get_footer();