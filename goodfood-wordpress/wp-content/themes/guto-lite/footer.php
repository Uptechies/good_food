<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Guto Lite
 * @since 1.0.3
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

?>
	<?php guto_lite_newsletter_top(); ?>

		<?php guto_lite_newsletter_content(); ?>

	<?php guto_lite_newsletter_bottom(); ?>

	<?php guto_lite_content_bottom(); ?>

	<?php guto_lite_footer_before(); ?>

		<?php guto_lite_footer_content(); ?>

	<?php guto_lite_footer_after(); ?>

	<?php guto_lite_back_to_top(); ?>

	<?php guto_lite_body_bottom(); ?>

	<a class="modal-close-btn" href="#"></a>

	<?php wp_footer(); ?>

	</body>
</html>