<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_goodfood' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '=SOL*mOY[j_z*UV[#].) Xx@a/pGs0%:,.n<7J*md36~#ZR?5x8%L:S>v1#iRoW?' );
define( 'SECURE_AUTH_KEY',  'lZD*J6ay*3k&23x31$VqKQB5Ihk1{1,tv:3%I>;{<,]nXZVZ=L8~yVblao9gB6?Y' );
define( 'LOGGED_IN_KEY',    'Gvj^s*BxauxQ8XYoTG[a:RR>d8M,0<5cHp5y3,wb()P>[1bT_ >2?SB6[s!0%Kq|' );
define( 'NONCE_KEY',        ' 2&p%ydW57il6LM9gvdUyrH{kCelMwc+/(}Tv!)dkSTG[E>&&&+n{!zrnXZEkn?=' );
define( 'AUTH_SALT',        'Gb(V61_Oww8V=gl>M[v_TMpm?EBipZiaEJ(/:N(rJXI5e)~:uQ1/DZc*eQ??EY?F' );
define( 'SECURE_AUTH_SALT', '^(:s[H (o2>,?FWvLk,fBiHK,9 Xk~*A*CQK=QR2jK&QFn,Kx3!c 5q6 4~,+/WP' );
define( 'LOGGED_IN_SALT',   'C-uOHX{`cOHG2UU$n/!Aueko97F&CS%aQ7O!-VQ/ K!S,/;c>52An/})uPM*h7`3' );
define( 'NONCE_SALT',       '3g*&D-?e:OUBaCrT5cm4H`S^itDou]k%nQO8{E^3D*}8Da3I[$-aA;KeSkaZ%(ES' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
