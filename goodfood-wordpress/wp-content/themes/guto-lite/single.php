<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Guto Lite
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();

$blog_sidebar	= guto_lite_option( 'blog_sidebar' );

get_template_part( 'template-parts/header/content', 'single-header' );
?>
	<?php
	if( guto_lite_is_elementor() ):
		the_content();
	else: ?>
		<!-- Start Blog Area -->
		<div id="content" class="blog-details-area ptb-100">
			<div class="container">
				<div class="row">
					<?php
					while ( have_posts() ) :
					the_post(); ?>
						<div class="<?php echo esc_attr( guto_lite_blog_sidebar() ); ?>">
							<div class="blog-details-desc">

								<?php if(has_post_thumbnail()) { ?>
									<div class="article-image">
										<img src="<?php the_post_thumbnail_url('full') ?>" alt="<?php the_title_attribute(); ?>">
									</div>
								<?php } ?>

								<div class="article-content blog-details-content">
									<div class="entry-meta">
										<ul>
											<li>
												<i class="bx bx-comment"></i>
												<?php comments_number(); ?>
											</li>
											<li>
												<i class="bx bx-group"></i>
												<a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ) ) ?>"> <?php the_author() ?></a>
											</li>
											<li>
												<i class="bx bx-calendar"></i>
												<?php the_date(); ?>
											</li>
										</ul>
									</div>

									<?php the_content();

									wp_link_pages( array(
										'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'guto-lite' ),
										'after'  => '</div>',
									) );
									?>

									<?php if ( get_the_tags() ) {  ?>
									<div class="post-tag-media">
										<ul class="tag">
											<li><span><?php echo esc_html_e('Tags:', 'guto-lite') ?></span></li>
											<?php $post_tags = get_the_tags();
											foreach ($post_tags as $post_tag ) {  ?>
													<li><a href="<?php echo esc_url(get_tag_link($post_tag->term_id)); ?>">
														<?php echo esc_html($post_tag->name) ?></a>
													</li>
												<?php
											} ?>
										</ul>
									</div>
									<?php } ?>
								</div>
							</div>

							<?php
								// If comments are open or we have at least one comment, load up the comment template.
								if ( comments_open() || get_comments_number() ) :
									comments_template();
								endif;
							?>
						</div>
					<?php endwhile; // End of the loop. ?>

					<?php if( $blog_sidebar == 'right' ): ?>
						<?php get_sidebar(); ?>
					<?php endif; ?>
				</div>
			</div>
		</div>
		<!-- End Blog Area -->
	<?php endif; ?>

<?php
get_footer();