<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

// Excerpt Label
function guto_lite_excerpt_label( $translation, $original ) {
    if ( 'Excerpt' == $original ) {
        return esc_html__( ' Short note (Excerpt)', 'guto-lite' );
    } elseif ( false !== strpos( $original, 'Excerpts are optional hand-crafted summaries of your' ) )  {
        return esc_html__( 'Add your short note which show in homepage', 'guto-lite' );
    }
    return $translation;
}
add_filter( 'gettext', 'guto_lite_excerpt_label', 100, 2 );

// Excerpt
function guto_lite_excerpt( $num = 20 ) {
	$excerpt		 = get_the_excerpt();
	$trimmed_content = wp_trim_words( $excerpt, $num_words		 = $num, $more			 = null );
	echo wp_kses( $trimmed_content );
}

// Comment form textarea position change
function guto_lite_move_comment_field_to_bottom( $fields ) {
	$comment_field		 = $fields[ 'comment' ];
	unset( $fields[ 'comment' ] );
	$fields[ 'comment' ] = $comment_field;
	return $fields;
}
add_filter( 'comment_form_fields', 'guto_lite_move_comment_field_to_bottom' );