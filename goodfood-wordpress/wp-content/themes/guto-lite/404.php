<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Guto Lite
 * @since 1.0.3
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header(); ?>

	<?php guto_lite_primary_content_top(); ?>

		<?php guto_lite_404_content_template(); ?>

	<?php guto_lite_primary_content_bottom(); ?>

<?php
get_footer();
