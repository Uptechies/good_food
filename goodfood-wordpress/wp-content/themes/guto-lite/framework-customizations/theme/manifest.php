<?php

if ( !defined( 'FW' ) ) {
	wp_die(  'Forbidden' );
}

// phpcs:ignoreFile

$manifest = array();

$manifest[ 'name' ]			 = esc_html__( 'guto-lite', 'guto-lite' );
$manifest[ 'uri' ]			 = esc_url( 'http://www.gutotheme.com/' );
$manifest[ 'description' ]	 = esc_html__( 'Starter Websites WordPress Theme', 'guto-lite' );
$manifest[ 'version' ]		 = '1.0.3';
$manifest[ 'author' ]		 = 'GutoTheme';
$manifest[ 'author_uri' ]	 = esc_url( 'http://www.gutotheme.com/' );
$manifest[ 'requirements' ]	 = array(
	'wordpress' => array(
		'min_version' => '4.3',
	),
);

$manifest[ 'id' ] = 'scratch';

$manifest[ 'supported_extensions' ] = array(
	'backups'		 => array(),
);
