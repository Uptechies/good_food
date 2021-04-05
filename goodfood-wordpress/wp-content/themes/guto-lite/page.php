<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Guto Lite
 * @since 1.0.3
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();

	get_template_part( 'template-parts/header/content', 'page-header' ); ?>

	<?php guto_lite_primary_content_top(); ?>

		<?php if( !guto_lite_is_elementor() && 'product' != get_post_type() ): ?><div class="page-main-content"><?php endif; ?>

			<div id="content" class="page-area">
				<?php if( !guto_lite_is_elementor() && 'product' != get_post_type() ): ?><div class="container"><?php endif; ?>
					<?php while ( have_posts() ) : the_post();

						$thecontent = get_the_content(); // If no content
						if(empty($thecontent)){ ?>
							<div class="guto-lite-single-blank-page"></div>
							<?php
						} ?>

						<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

							<!-- Article content -->
							<div class="entry-content">
								<?php the_content(); ?>
							</div> <!-- end entry-content -->
							<?php
								wp_link_pages( array(
									'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'guto-lite' ),
									'after'  => '</div>',
								) );
							?>
							<!-- Article footer -->
							<footer class="entry-footer">
								<?php
								if ( is_user_logged_in() ) {
									echo '<p>';
									edit_post_link( esc_html__( 'Edit', 'guto-lite' ), '<span class="meta-edit">', '</span>' );
									echo '</p>';
								}
								?>
							</footer> <!-- end entry-footer -->
						</div>

						<?php if ( comments_open() || get_comments_number() ) : comments_template(); endif; ?>
					<?php endwhile; // End of the loop. ?>
				<?php if( !guto_lite_is_elementor() && 'product' != get_post_type() ): ?></div><?php endif; ?>
			</div>

		<?php if( !guto_lite_is_elementor() && 'product' != get_post_type() ): ?></div><?php endif; ?>

	<?php guto_lite_primary_content_bottom(); ?>

<?php
get_footer();
