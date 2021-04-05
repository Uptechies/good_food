<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Helper functions used all over the theme
 */
/**
 * Custom functions that act independently of the theme templates
 *
 * Eventually, some of the functionality here could be replaced by core features
 *
 * @package Guto Lite
 */
/*
  Return
 *
 *  */

// simply echos the variable
if ( !function_exists( 'guto_lite_return' ) ) {

	function guto_lite_return( $s ) {
		return $s;
	}

}
/*
 * FOR ONE PAGE Section
 * since 1.0
 */

if ( !function_exists( 'guto_lite_editor_data' ) ) {

	function guto_lite_editor_data( $value ) {
		return wp_kses_post( $value );
	}

}
// Gets unyson option data in safe mode
// since 1.0
if ( !function_exists( 'guto_lite_get_option' ) ) {

	function guto_lite_get_option( $k, $v = '', $m = 'theme-settings' ) {
		if ( defined( 'FW' ) ) {
			switch ( $m ) {
				case 'theme-settings':
					$v = fw_get_db_settings_option( $k );
					break;

				default:
					$v = '';
					break;
			}
		}
		return $v;
	}

}
if ( !function_exists( 'guto_lite_resize' ) ) {

	function guto_lite_resize( $url, $width = false, $height = false, $crop = false ) {
		if ( function_exists( 'fw_resize' ) ) {
			$fw_resize	 = FW_Resize::getInstance();
			$response	 = $fw_resize->process( $url, $width, $height, $crop );
			return (!is_wp_error( $response ) && !empty( $response[ 'src' ] ) ) ? $response[ 'src' ] : $url;
		} else {
			if ( !empty( $url ) ) {
				return $url;
			}
		}
	}

}
// Gets unyson image url from option data in a much simple way
// sience 1.0
if ( !function_exists( 'guto_lite_get_image' ) ) {

	function guto_lite_get_image( $k, $v = '', $d = false ) {

		if ( $d == true ) {
			$attachment = $k;
		} else {
			$attachment = guto_lite_get_option( $k );
		}

		if ( isset( $attachment[ 'url' ] ) && !empty( $attachment ) ) {
			$v = $attachment[ 'url' ];
		}

		return $v;
	}

}
/* Gets unyson image url from variable
 * sience 1.0
 * guto_lite_image($img, $alt )
 */

if ( !function_exists( 'guto_lite_image' ) ) {

	function guto_lite_image( $img, $alt, $v = '' ) {

		if ( isset( $img[ 'url' ] ) && !empty( $img ) ) {
			$i	 = $img[ 'url' ];
			$v	 = "<img src=" . $i . " alt=" . $alt . " />";
		}

		return $v;
	}

}
// Gets original page ID/ Slug
// since 1.0
if ( !function_exists( 'guto_lite_main' ) ) {

	function guto_lite_main( $id, $name = true ) {
		if ( function_exists( 'icl_object_id' ) ) {
			$id = icl_object_id( $id, 'page', true, 'en' );
		}

		if ( $name === true ) {
			$post = get_post( $id );
			return $post->post_name;
		} else {
			return $id;
		}
	}

}
if ( !function_exists( 'guto_lite_page_list' ) ) {

	function guto_lite_page_list() {
		$et_pagess	 = array();
		$et_pages	 = get_pages();
		if ( is_array( $et_pages ) ) {
			foreach ( $et_pages as $et_page ) {
				$et_pagess[ $et_page->ID ] = $et_page->post_title;
			}
		}
		return $et_pagess;
	}

}
// Gets post's meta data in a much simplier way.
// since 1.0

if ( !function_exists( 'guto_lite_get_post_meta' ) ) {

	function guto_lite_get_post_meta( $id, $needle ) {
		$data = get_post_meta( $id, 'fw_options' );
		if ( is_array( $data ) && isset( $data[ 0 ][ 'page_sections' ] ) ) {
			$data = $data[ 0 ][ 'page_sections' ];

			if ( is_array( $data ) ) {
				return guto_lite_seekKey( $data, $needle );
			}
		}
	}

}

/*
 * btn Function
 * since 1.0
 */

if ( !function_exists( 'guto_lite_theme_button_class' ) ) :

	function guto_lite_theme_button_class( $style ) {
		/**
		 * Display specific class for buttons - depends on theme
		 */
		if ( $style == 'default' ) {
			echo 'btn btn-border';
		} elseif ( $style == 'primary' ) {
			echo 'btn btn-primary';
		} else {
			echo 'default';
		}
	}

endif;

/*
 * This fucntion for recent post shortcode.
 * people can select show from one category or from all category
 * since 1.0
 */

// term
if ( !function_exists( 'guto_lite_get_category_term_list' ) ) :

	function guto_lite_get_category_term_list() {
		/**
		 * Return array of categories
		 */
		$taxonomy	 = 'category';
		$args		 = array(
			'hide_empty' => true,
		);

		$terms		 = get_terms( $taxonomy, $args );
		$result		 = array();
		$result[ 0 ] = esc_html__( 'All Categories', 'guto-lite' );

		if ( !empty( $terms ) )
			foreach ( $terms as $term ) {
				$result[ $term->term_id ] = $term->name;
			}
		return $result;
	}

endif;

/*
 * Function for color RGB
 */
if ( !function_exists( 'guto_lite_color_rgb' ) ) {

	function guto_lite_color_rgb( $hex ) {
		$hex		 = preg_replace( "/^#(.*)$/", "$1", $hex );
		$rgb		 = array();
		$rgb[ 'r' ]	 = hexdec( substr( $hex, 0, 2 ) );
		$rgb[ 'g' ]	 = hexdec( substr( $hex, 2, 2 ) );
		$rgb[ 'b' ]	 = hexdec( substr( $hex, 4, 2 ) );

		$color_hex = $rgb[ "r" ] . ", " . $rgb[ "g" ] . ", " . $rgb[ "b" ];

		return $color_hex;
	}

}

/*
 * Section Edit option
 *
 * This function for show section edit option in every section in one page
 *
 * Since 1.0
 *  */
if ( !function_exists( 'guto_lite_edit_section' ) ) {

	function guto_lite_edit_section() {
		if ( is_user_logged_in() ) {
			?>
			<div class="section-edit">
				<div class="container relative">
					<?php
					edit_post_link( esc_html__( 'Edit', 'guto-lite' ), '', '' );
					?>
					<span class="section-abc"><?php echo esc_html( get_the_title() ); ?> <?php echo esc_attr_e( 'Or', 'guto-lite' ) ?>
						<a href="<?php echo esc_url( home_url() ); ?>/wp-admin/post.php?post=<?php the_ID(); ?>&action=elementor" target="_blank"><?php echo esc_attr_e( 'Edit with elementor', 'guto-lite' ) ?></a></span>

				</div>
			</div>
			<?php
		}
	}

}

// Breadcrumbs
if ( !function_exists( 'guto_lite_get_breadcrumbs' ) ) {

	function guto_lite_get_breadcrumbs( $seperator = ' / ' ) {

		echo '<ul>';
		if ( !is_home() ) {
			echo '<li><a href="';
			echo esc_url( get_home_url( '/' ) );
			echo '">';
			echo esc_html__( 'Home', 'guto-lite' );
			echo "</a></li><li class='active'>";
			if ( is_category() || is_single() ) {
				$category	 = get_the_category();
				$post		 = get_queried_object();
				$postType	 = get_post_type_object( get_post_type( $post ) );
				if ( !empty( $category ) ) {
					echo esc_html( $category[ 0 ]->cat_name );
				} else if ( $postType && is_single() != 'services' && is_single() != 'projects' ) {
					echo esc_html( $postType->labels->singular_name );
				}
				if ( is_single() ) {
					echo esc_html(wp_trim_words( get_the_title(), 3 ));
				}
			} elseif ( is_page() ) {
				echo esc_html(wp_trim_words( get_the_title(), 3 ));
			}
		}
		if ( is_tag() ) {
			single_tag_title();
		} elseif ( is_day() ) {
			echo esc_html__( 'Blogs for', 'guto-lite' ) . " ";
			the_time( 'F jS, Y' );
		} elseif ( is_month() ) {
			echo esc_html__( 'Blogs for', 'guto-lite' ) . " ";
			the_time( 'F, Y' );
		} elseif ( is_year() ) {
			echo esc_html__( 'Blogs for', 'guto-lite' ) . " ";
			the_time( 'Y' );
		} elseif ( is_author() ) {
			echo esc_html__( 'Author Blogs', 'guto-lite' );
		} elseif ( isset( $_GET[ 'paged' ] ) && !empty( $_GET[ 'paged' ] ) ) {
			echo esc_html__( 'Blogs', 'guto-lite' );
		} elseif ( is_search() ) {
			echo esc_html__( 'Search Result', 'guto-lite' );
		} elseif ( is_404() ) {
			echo esc_html__( '404 Not Found', 'guto-lite' );
		}
		echo '</li></ul>';
	}

}


/*
 * WP Kses Allowed HTML Tags Array in function
 * @Since Version 0.1
 * @param ar
 * Use: guto_lite_kses($raw_string);
 * */
if ( !function_exists( 'guto_lite_kses' ) ) {

	function guto_lite_kses( $raw ) {

		$allowed_tags = array(
			'span'							 => array(
				'class' => array(),
			),
			'a'								 => array(
				'class'	 => array(),
				'href'	 => array(),
				'rel'	 => array(),
				'title'	 => array(),
			),
			'abbr'							 => array(
				'title' => array(),
			),
			'b'								 => array(),
			'blockquote'					 => array(
				'cite' => array(),
			),
			'cite'							 => array(
				'title' => array(),
			),
			'code'							 => array(),
			'del'							 => array(
				'datetime'	 => array(),
				'title'		 => array(),
			),
			'dd'							 => array(),
			'div'							 => array(
				'class'	 => array(),
				'title'	 => array(),
				'style'	 => array(),
			),
			'dl'							 => array(),
			'dt'							 => array(),
			'em'							 => array(),
			'h1'							 => array(),
			'h2'							 => array(),
			'h3'							 => array(),
			'h4'							 => array(),
			'h5'							 => array(),
			'h6'							 => array(),
			'i'								 => array(
				'class' => array(),
			),
			'img'							 => array(
				'alt'	 => array(),
				'class'	 => array(),
				'height' => array(),
				'src'	 => array(),
				'width'	 => array(),
			),
			'li'							 => array(
				'class' => array(),
			),
			'ol'							 => array(
				'class' => array(),
			),
			'p'								 => array(
				'class' => array(),
			),
			'q'								 => array(
				'cite'	 => array(),
				'title'	 => array(),
			),
			'span'							 => array(
				'class'	 => array(),
				'title'	 => array(),
				'style'	 => array(),
			),
			'iframe'						 => array(
				'width'			 => array(),
				'height'		 => array(),
				'scrolling'		 => array(),
				'frameborder'	 => array(),
				'allow'			 => array(),
				'src'			 => array(),
			),
			'strike'						 => array(),
			'br'							 => array(),
			'strong'						 => array(),
			'data-wow-duration'				 => array(),
			'data-wow-delay'				 => array(),
			'data-wallpaper-options'		 => array(),
			'data-stellar-background-ratio'	 => array(),
			'ul'							 => array(
				'class' => array(),
			),
		);

		if ( function_exists( 'wp_kses' ) ) { // WP is here
			$allowed = wp_kses( $raw, $allowed_tags );
		} else {
			$allowed = $raw;
		}

		return $allowed;
	}

}
/**
 *
 * Load Goggle Font
 * @since 1.0.3
 *
 */
if ( !function_exists( 'guto_lite_google_fonts_url' ) ) {

	function guto_lite_google_fonts_url() {
		$fonts_url		 = '';
		$font_families	 = array();
		//Body Font
		$body_font		 	= guto_lite_option( 'body_font' );
		if ( !empty( $body_font ) ) {
			$body_families	 = isset( $body_font[ 'font-family' ] ) ? $body_font[ 'font-family' ] : '';
			$body_variant	 = isset( $body_font[ 'variant' ] ) ? $body_font[ 'variant' ] : '';
			$font_families[] = $body_families . ":" . $body_variant;
		}

		$font_families[] = "Nunito+Sans:200,300,400,600,700,800,900";

		if ( $font_families ) {
			$query_args = array(
				'family' => implode( '|', $font_families )
			);

			$fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );
		}

		return esc_url_raw( $fonts_url );
	}

}

/**
 *
 * Get Catagories/Taxonomies List
 * @since 1.0.3
 *
 */
if ( !function_exists( 'guto_lite_category_list_slug' ) ) {

	function guto_lite_category_list_slug( $cat ) {
		$query_args = array(
			'orderby'	 => 'ID',
			'order'		 => 'DESC',
			'hide_empty' => 1,
			'taxonomy'	 => $cat
		);

		$categories	 = get_categories( $query_args );
		$options	 = array( esc_html__( '0', 'guto-lite' ) => 'All Category' );
		if ( is_array( $categories ) && count( $categories ) > 0 ) {
			return $categories;
		}
	}

}
/**
 *
 * Get Catagories/Taxonomies List
 * @since 1.0.3
 *
 */
if ( !function_exists( 'guto_lite_featured_product' ) ) {

	function guto_lite_featured_product() {
		$query_args	 = array(
			'post_type'		 => 'product',
			'tax_query'		 => array(
				'relation' => 'AND',
				array(
					'taxonomy'	 => 'product_type',
					'field'		 => 'slug',
					'terms'		 => 'wp_fundraising',
				),
				array(
					'taxonomy'	 => 'product_visibility',
					'field'		 => 'name',
					'terms'		 => 'featured',
				),
			),
			'posts_per_page' => -1, // phpcs:ignore WPThemeReview.CoreFunctionality.PostsPerPage.posts_per_page_posts_per_page
		);
		$et_query	 = new WP_Query( $query_args );
		$options	 = array( esc_html__( '0', 'guto-lite' ) => 'Select Product' );
		if ( $et_query->have_posts() ):
			while ( $et_query->have_posts() ) {
				$et_query->the_post();
				$options[ get_the_ID() ] = get_the_title();
			}
			wp_reset_postdata();
			return $options;
		endif;
	}

}
if ( !function_exists( 'guto_lite_option' ) ) {

	function guto_lite_option( $option ) {
		// Get options
		return get_theme_mod( $option, guto_lite_defaults( $option ) );
	}

}

if ( !function_exists( 'guto_lite_defaults' ) ) {

	function guto_lite_defaults( $options ) {

		$default = array(
			'enable_back_to_top'		=> true,
			'is_sticky_header'		 	=> true,
			'blog_sidebar'		 		=> 'right',
			'banner_style'		 		=> 'style-1',
			'primary_color'	 			=> '#4237dc',
			'secondary_color'	 		=> '#e82b2b',
			'blog_banner_title'	 		=> esc_html__( 'Blog', 'guto-lite' ),
			'show_breadcrumb'			=> false,
			'show_blog_banner'		 	=> true,
			'banner_shape1' 			=> '' . GUTO_LITE_IMAGES_URI . '/shape9.png',
			'banner_shape2'		 		=> '' . GUTO_LITE_IMAGES_URI . '/shape10.png',
			'footer_widget_layout'		=> '3',
			'copyright_text'		 	=> esc_html__( 'Copyright @2020. All rights reserved.', 'guto-lite' ),
			'error_title'			 	=> esc_html__( 'Oops! Page Not Found', 'guto-lite' ),
			'error_subtitle'		 	=> esc_html__( 'The page you were looking for could not be found.', 'guto-lite' ),
			'back_to_home_label'	 	=> esc_html__( 'Return To Home Page', 'guto-lite' ),
			'guto_lite_read_more'	 		=> esc_html__( 'Read More', 'guto-lite' ),
			'guto_lite_by_text'	 			=> esc_html__( 'By:', 'guto-lite' ),
			'post_image_size'	 		=> 'guto_lite_post_thumb',
		);

		if ( !empty( $default[ $options ] ) )
			return $default[ $options ];
	}

}
/**
 *
 * Get Catagories/Taxonomies List
 * @since 1.0.3
 *
 */
if ( !function_exists( 'guto_lite_category_list' ) ) {

	function guto_lite_category_list( $cat ) {
		$query_args = array(
			'orderby'	 => 'ID',
			'order'		 => 'DESC',
			'hide_empty' => 1,
			'taxonomy'	 => $cat
		);

		$categories	 = get_categories( $query_args );
		$options	 = array( esc_html__( '0', 'guto-lite' ) => 'All Category' );
		if ( is_array( $categories ) && count( $categories ) > 0 ) {
			foreach ( $categories as $cat ) {
				$options[ $cat->term_id ] = $cat->name;
			}
			return $options;
		}
	}

}
if ( !function_exists( 'guto_lite_get_posts' ) ) {

	function guto_lite_get_posts( $post_type ) {
		$mega_menus	 = array();
		$args		 = array(
			'post_type' => $post_type,
		);
		$posts		 = get_posts( $args );
		foreach ( $posts as $post ) {
			$mega_menus[ $post->post_name ] = $post->post_title;
		}
		return $mega_menus;
	}

}
if ( !function_exists( 'guto_lite_get_mega_item_child_slug' ) ) {

	function guto_lite_get_mega_item_child_slug( $location, $option_id ) {

		$mega_item	 = '';
		$locations	 = get_nav_menu_locations();
		$menu		 = wp_get_nav_menu_object( $locations[ $location ] );
		$menuitems	 = wp_get_nav_menu_items( $menu->term_id );

		foreach ( $menuitems as $menuitem ) {

			$id			 = $menuitem->ID;
			$mega_item	 = fw_ext_mega_menu_get_db_item_option( $id, $option_id );
		}
		return $mega_item;
	}

}

if ( !function_exists( 'guto_lite_wc_get_product_list' ) ) {

	function guto_lite_wc_get_product_list() {
		$query_args	 = array(
			'post_type'		 => 'product',
			'posts_per_page' => -1, // phpcs:ignore WPThemeReview.CoreFunctionality.PostsPerPage.posts_per_page_posts_per_page
		);
		$et_query	 = new WP_Query( $query_args );
		$options	 = array( esc_html__( '0', 'guto-lite' ) => 'Select Product' );
		if ( $et_query->have_posts() ):
			while ( $et_query->have_posts() ) {
				$et_query->the_post();
				$options[ get_the_ID() ] = get_the_title();
			}
			wp_reset_postdata();
			return $options;
		endif;
	}

}
if ( !function_exists( 'guto_lite_content_read_more' ) ) {

	function guto_lite_content_read_more( $num = 20, $button = true ) {

		$excerpt		 = get_the_excerpt();
		$trimmed_content = wp_trim_words( $excerpt, $num_words = $num, $more = null );
		echo '<div class="entry-content">';
		echo wp_kses_post( $trimmed_content );
		echo '</div>';
		if ( $button == true ) {
			echo '<div class="btn-wraper"><a href="' . esc_url(get_the_permalink()) . '" class="btn btn-primary icon-right">' . esc_html__( 'Continue Reading', 'guto-lite' ) . '<i class="icon icon-arrow-right"></i></a></div>';
		}
	}

}
if ( !function_exists( 'guto_lite_get_alt_name' ) ) {

	function guto_lite_get_alt_name( $id ) {
		if ( !empty( $id ) ) {
			$alt = get_post_meta( $id, '_wp_attachment_image_alt', true );
			if ( !empty( $alt ) ) {
				$alt = $alt;
			} else {
				$alt = get_the_title( $id );
			}
			return $alt;
		}
	}

}

/*
 *
 * Get Footer Column
 */

if ( !function_exists( 'guto_lite_get_footer_column' ) ) {

	function guto_lite_get_footer_column( $footer_columns ) {
		if ( $footer_columns == 12 ) {
			return 1;
		} elseif ( $footer_columns == 6 ) {
			return 2;
		} elseif ( $footer_columns == 4 ) {
			return 3;
		} else {
			return 4;
		}
	}

}

// Gets original page ID/ Slug
// since 1.0

function guto_lite_main( $id, $name = true ) {
	if ( function_exists( 'icl_object_id' ) ) {
		$id = icl_object_id( $id, 'page', true, 'en' );
	}

	if ( $name === true ) {
		$post = get_post( $id );
		return $post->post_name;
	} else {
		return $id;
	}
}

// Creates SEO friendly section ID from page ID. Returns page ID directly if $return = true
// since 1.0
function guto_lite_sectionID( $id, $returnID = false ) {

	if ( $returnID == false ) {

		$str		 = get_the_title( $id );
		$patterns	 = array(
			"/[:#+*+&+!+@+!+\.+?+%+$+\"+'+^+\[+<+{+\(+\)}+>+\]+,+`+;+,+=+\\\\]/", // match unwanted special characters
			"@<(script|style)[^>]*?>.*?</\\1>@si", // match <script>, <style> tags
			"/[~\r\n\t \/_|+ -]+/" // match newline, tab and more unwanted characters
		);

		$replacements = array(
			"", // for 1st match
			"", // for 2nd match
			"-" // for 3rd match
		);

		$str = preg_replace( $patterns, $replacements, strip_tags( $str ) );
		return strtolower( trim( $str, '-' ) );
	} else {

		return "section-$id";
	}
}

// Gets post's meta data in a much simplier way.
// since 1.0

function guto_lite_get_post_meta( $id, $needle ) {
	$data = get_post_meta( $id, 'fw_options' );
	if ( is_array( $data ) && isset( $data[ 0 ][ 'page_sections' ] ) ) {
		$data = $data[ 0 ][ 'page_sections' ];

		if ( is_array( $data ) ) {
			return guto_lite_seekKey( $data, $needle );
		}
	}
}

function guto_lite_seekKey( $haystack, $needle ) {
	foreach ( $haystack as $key => $value ) {

		if ( $key == $needle ) {
			return $value;
		} elseif ( is_array( $value ) ) {
			return guto_lite_seekKey( $value, $needle );
		}
	}
}

/**
 * If page edited by elementor
 */
if ( ! function_exists( 'guto_lite_is_elementor' ) ) :
	function guto_lite_is_elementor(){
		if ( function_exists( 'elementor_load_plugin_textdomain' ) ):
			global $post;
			if( $post != '' ):
				return \Elementor\Plugin::$instance->db->is_built_with_elementor($post->ID);
			endif;
		endif;
	}
endif;

/**
 * Estimated Reading Time
 */
if ( ! function_exists( 'guto_lite_reading_time' ) ) :
	function guto_lite_reading_time() {
		global $post;

		$thecontent = $post->post_content;
		$words 		= str_word_count( strip_tags( $thecontent ) );
		$m 			= floor( $words / 200 );
		$estimate 	= $m;
		$output 	= $estimate;
		return $output;
	}
endif;

/**
 * Elementor default settings
 */
if ( ! function_exists( 'guto_lite_add_cpt_support' ) ) :
	function guto_lite_add_cpt_support() {
		$cpt_support = get_option( 'elementor_cpt_support' );
		update_option( 'elementor_disable_color_schemes', 'yes' );
		update_option( 'elementor_disable_typography_schemes', 'yes' );
		update_option( 'elementor_load_fa4_shim', 'yes' );
		if ( ! $cpt_support ) {
			$cpt_support = [ 'page', 'post', 'projects', 'services' ];
			update_option( 'elementor_cpt_support', $cpt_support );
		}		elseif ( !in_array( 'services', $cpt_support ) ) {
			$cpt_support[] = 'services';
			update_option( 'elementor_cpt_support', $cpt_support );
		}elseif ( !in_array( 'projects', $cpt_support ) ) {
			$cpt_support[] = 'projects';
			update_option( 'elementor_cpt_support', $cpt_support );
		}
	}
endif;

add_action( 'after_switch_theme', 'guto_lite_add_cpt_support' );

/**
 * Filter the categories archive widget to add a span around post count
 */
if ( ! function_exists( 'guto_lite_cat_count_span' ) ) {
	function guto_lite_cat_count_span( $links ) {
		$links = str_replace( '</a> (', '</a><span class="post-count">(', $links );
		$links = str_replace( ')', ')</span>', $links );
		return $links;
	}
}
add_filter( 'wp_list_categories', 'guto_lite_cat_count_span' );

/**
 * Filter the archives widget to add a span around post count
 */
if ( ! function_exists( 'guto_lite_archive_count_span' ) ) {
	function guto_lite_archive_count_span( $links ) {
		$links = str_replace( '</a>&nbsp;(', '</a><span class="post-count">(', $links );
		$links = str_replace( ')', ')</span>', $links );
		return $links;
	}
}
add_filter( 'get_archives_link', 'guto_lite_archive_count_span' );

/**
 * Excerpt more text
 */
if ( ! function_exists( 'guto_lite_excerpt_more' ) ) :
	function guto_lite_excerpt_more( $more ) {
		return ' ';
	}
endif;
add_filter('excerpt_more', 'guto_lite_excerpt_more');

/**
 * Blog sidebar
 */
if ( ! function_exists( 'guto_lite_blog_sidebar' ) ) :
	function guto_lite_blog_sidebar() {

		$blog_sidebar	= guto_lite_option( 'blog_sidebar' );

		if( $blog_sidebar == 'right' ):
			$guto_lite_sidebar_class = 'col-lg-8 col-md-12';
		elseif( $blog_sidebar == 'none' ):
			$guto_lite_sidebar_class = 'col-lg-12 col-md-12';
		else:
			if( is_active_sidebar( 'sidebar-1' ) ):
				$guto_lite_sidebar_class = 'col-lg-8 col-md-12';
			else:
				$guto_lite_sidebar_class = 'col-lg-8 col-md-12';
			endif;
		endif;

		return $guto_lite_sidebar_class;
	}
endif;

/**
 * Add Class Body
 */
if ( ! function_exists( 'guto_lite_body_add_css' ) ) :
	function guto_lite_body_add_css($classes) {
		$newsletter_style = guto_lite_option('newsletter_style');

		if($newsletter_style == '2'):
			$classes[] = 'newsletter-is-available';
		endif;

		return $classes;
	}
endif;
add_filter( 'body_class', 'guto_lite_body_add_css');

/**
 * If Sidebar Active
 */
if ( ! function_exists( 'guto_lite_body_classes' ) ) :
    function guto_lite_body_classes( $classes ) {

        if ( is_active_sidebar( 'sidebar-1' ) || ( class_exists( 'Woocommerce' ) && ! is_woocommerce() ) || class_exists( 'Woocommerce' ) && is_woocommerce() && is_active_sidebar( 'shop-sidebar' ) ) {
            $classes[] = 'sidebar-active';
        }else{
            $classes[] = 'sidebar-inactive';
        }
        return $classes;
    }
endif;
add_filter( 'body_class','guto_lite_body_classes' );

/**
 * Makes the top level navigation menu item clickable
 */
function shapely_make_top_level_menu_clickable() {
	if ( ! wp_is_mobile() ) { ?>
		<script type="text/javascript">
			jQuery( document ).ready( function( $ ) {
				if ( $( window ).width() >= 767 ) {
					$( '.guto-lite-nav > li.menu-item > a' ).click( function() {
						window.location = $( this ).attr( 'href' );
					} );
				}
			} );
		</script>
		<?php
	}
}
add_action( 'wp_footer', 'shapely_make_top_level_menu_clickable', 1 );


/**
 * Fix skip link focus in IE11.
 *
 * This does not enqueue the script because it is tiny and because it is only for IE11,
 * thus it does not warrant having an entire dedicated blocking script being loaded.
 *
 * @link https://git.io/vWdr2
 */
function guto_lite_skip_link_focus_fix() {
	// The following is minified via `terser --compress --mangle -- js/skip-link-focus-fix.js`.
	?>
	<script>
	/(trident|msie)/i.test(navigator.userAgent)&&document.getElementById&&window.addEventListener&&window.addEventListener("hashchange",function(){var t,e=location.hash.substring(1);/^[A-z0-9_-]+$/.test(e)&&(t=document.getElementById(e))&&(/^(?:a|select|input|button|textarea)$/i.test(t.tagName)||(t.tabIndex=-1),t.focus())},!1);
	</script>
	<?php
}
add_action( 'wp_print_footer_scripts', 'guto_lite_skip_link_focus_fix' );


if ( !function_exists( 'guto_lite_primary_menu_sub_trigger' ) ) {
	function guto_lite_primary_menu_sub_trigger( $args, $item ) {
		if ( 'primary' === $args->theme_location ) {
			if ( in_array( 'menu-item-has-children', $item->classes, true ) ) {
				$args->before = '<button class="sub-trigger"></button>';
			} else {
				$args->before = '';
			}
		}
		return $args;
	}
}
add_filter( 'nav_menu_item_args', 'guto_lite_primary_menu_sub_trigger', 10, 2 );