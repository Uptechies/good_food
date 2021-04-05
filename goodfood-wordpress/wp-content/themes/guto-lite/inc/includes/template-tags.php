<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Custom template tags for this theme.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package Guto Lite
 */
/**
 * ----------------------------------------------------------------------------------------
 * 6.0 - Display navigation to the next/previous set of posts.
 * ----------------------------------------------------------------------------------------
 */
if ( !function_exists( 'guto_lite_post_nav' ) ) :

	/**
	 * Display navigation to next/previous post when applicable.
	 */
	function guto_lite_post_nav() {
	// Don't print empty markup if there's nowhere to navigate.
		$pre_post = $next_post = '';
		$next_post	 = get_next_post();
		$pre_post	 = get_previous_post();
		if ( !$next_post && !$pre_post ) {
			return;
		}
		if($pre_post):
			$pre_img = wp_get_attachment_url( get_post_thumbnail_id($pre_post->ID) );
		endif;
		if($next_post):
			$next_img = wp_get_attachment_url( get_post_thumbnail_id($next_post->ID) );
		endif;



		echo '<div class="post-navigation">
		<div class="row no-gutters"><div class="col-md-6"><div class="post-previous">';
		if ( !empty( $pre_post ) ):
			?>
			<a href="<?php echo esc_url(get_the_permalink( $pre_post->ID )); ?>" class="single-post-nav">
				<div class="media align-items-center">
					<h4 class="post-title"><?php echo esc_html(get_the_title( $pre_post->ID )); ?></h4>
				</div>
				<h3 class="post-nav-title icon-left"><i class="icon icon-arrow-left"></i> <?php esc_html_e( 'Previous Post', 'guto-lite' ) ?></h3>
			</a>

			<?php
		endif;
		echo '</div></div><div class="col-md-6"><div class="post-next">';

		if ( !empty( $next_post ) ):
			?>
			<a href="<?php echo esc_url(get_the_permalink( $next_post->ID )); ?>" class="single-post-nav">
				<div class="media align-items-center">
					<h4 class="post-title"><?php echo esc_html(get_the_title( $next_post->ID )); ?></h4>
				</div>
				<h3 class="post-nav-title icon-right"><i class="icon icon-arrow-right"></i> <?php esc_html_e( 'Next Post', 'guto-lite' ) ?></h3>
			</a>
			<?php
		endif;
		echo '</div></div></div></div>';
	}

endif;


/**
 * ----------------------------------------------------------------------------------------
 *  - Display meta information for a specific post.
 * ----------------------------------------------------------------------------------------
 */
if ( !function_exists( 'guto_lite_post_meta' ) ) {

	function guto_lite_post_meta() {
		$show_date = guto_lite_option('show_date');

		echo '<div class="entry-meta">';

		printf(
			'<span class="post-author"><a href="%1$s"><i class="icon icon-user"></i> %2$s</a></span>', esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ), get_the_author()
		);
		$category_list = get_the_category_list( ', ' );
		if ( $category_list ) {
			echo '<span class="post-cat"><i class="icon icon-folders"></i>   ' . esc_html($category_list) . ' </span>';
		}

		if ( comments_open() ) :
			echo '<span class="post-comments"><i class="icon icon-comment"></i> ';
			comments_popup_link( esc_html__( '0', 'guto-lite' ), esc_html__( '1', 'guto-lite' ), esc_html__( '%', 'guto-lite' ) );
			echo '</span>';
		endif;

		if ( get_post_type() === 'post' && $show_date && !is_single()) {
			echo '<span class="post-date"><strong>' . get_the_date('j') . '</strong>' . get_the_date('M') . '</span>';
		}

		if ( get_post_type() === 'post' ) {
			// If the post is sticky, mark it.
			if ( !is_single() ) {
				$tag_list = get_the_tag_list( '', ', ' );
				if ( $tag_list ) {
					echo '<span class="tagcloud"><i class="icon icon-tags"></i> ' . esc_html($tag_list) . ' </span>';
				}
			}
			if ( is_single() ) {
				// Edit link.
				if ( is_user_logged_in() ) {
					edit_post_link( esc_html__( 'Edit', 'guto-lite' ), '<span class="meta-edit"><i class="icon icon-pencil"></i> ', '</span>' );
				}
			}
		}
		echo '</div>';
	}

	if ( !function_exists( 'guto_lite_post_meta_left' ) ) {

		function guto_lite_post_meta_left() {

			echo '<div class="post-meta-left pull-left text-center"><div class="entry-meta">';
			if ( get_post_type() === 'post' ) {

				// Comments link.
				if ( comments_open() ) :
					echo '<span class="post-comment"><i class="icon icon-comment"></i> ';
					comments_popup_link( esc_html__( '0', 'guto-lite' ), esc_html__( '1', 'guto-lite' ), esc_html__( '%', 'guto-lite' ) );
					echo '</span>';
				endif;

				// Edit link.
				if ( is_user_logged_in() ) {
					echo '<div>';
					edit_post_link( esc_html__( 'Edit', 'guto-lite' ), '<span class="meta-edit">', '</span>' );
					echo '</div>';
				}
			}
			echo '</div></div>';
		}

	}
}


if ( !function_exists( 'guto_lite_post_meta_date' ) ) {

	function guto_lite_post_meta_date() {
		if ( get_post_type() === 'post' ) {

			echo '<span class="post-date meta-date"><span class="day">' . get_the_date( 'm' ) . '</span>' . get_the_date( 'M' ) . '</span>';
		}
	}

}

function guto_lite_link_pages() {
	$args = array(
		'before'			 => '<div class="page-links"><span class="page-link-text">' . esc_html__( 'More pages: ', 'guto-lite' ) . '</span>',
		'after'				 => '</div>',
		'link_before'		 => '<span class="page-link">',
		'link_after'		 => '</span>',
		'next_or_number'	 => 'number',
		'separator'			 => '  ',
		'nextpagelink'		 => esc_html__( 'Next ', 'guto-lite' ) . '<I class="fa fa-angle-right"></i>',
		'previouspagelink'	 => '<I class="fa fa-angle-left"></i>' . esc_html__( ' Previous', 'guto-lite' ),
	);
	wp_link_pages( $args );
}