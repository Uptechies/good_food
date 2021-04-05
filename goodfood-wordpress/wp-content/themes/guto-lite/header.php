<?php
/**
 * The header for Guto Lite Theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Guto Lite
 * @since 1.0.3
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<?php guto_lite_head_top(); ?>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="https://gmpg.org/xfn/11">
		<?php wp_head(); ?>
		<?php guto_lite_head_bottom(); ?>
	</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<?php guto_lite_body_top(); ?>
	<a class="skip-link screen-reader-text" href="#content">
	<?php _e( 'Skip to content', 'guto-lite' ); ?></a>
	<?php guto_lite_header_before(); ?>

		<?php guto_lite_top_bar(); ?>

		<?php guto_lite_header(); ?>

	<?php guto_lite_header_after(); ?>

	<?php guto_lite_content_top(); ?>