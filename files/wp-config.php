<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', 'wordpress' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'ZQcJ%Jbhy#F(Z_?alNbujrj .P`oJFG=&yfv 96acp8I#chDPZZ50Z>T/cBj+qfY' );
define( 'SECURE_AUTH_KEY',  '!Xdpr;~4QbGsyrf0*r~ko-_PP=A)$8{.^$SqkfNONit.|v~s<w`)V_<lmV^+*%4G' );
define( 'LOGGED_IN_KEY',    'u7FS/7wd)!+-1n:i+r+#@j*szCZI(;Nf520nJ)6@`Fyc;SEMUclBAlx.+{@|+Q-8' );
define( 'NONCE_KEY',        'a`xBB@ak@MT Am8J1s%ll2Yi]c&T_vxeILjHC0@EfUEv5(re#VUyjNwSc=BCd%E|' );
define( 'AUTH_SALT',        'J?RFVD.k-hz)to^%_q7F^*FPEZ[8.dI{o)rSGtXhjo+8S9p%oy3AP*p{#J&s*+oe' );
define( 'SECURE_AUTH_SALT', 'EgPnkgsJ|U=@ :Z5&xq$QkC (C!N?nDV5CXx_Uy&=Tj>E2tm}.A55PZm;T[^~hQ#' );
define( 'LOGGED_IN_SALT',   '|p)GY{G3Vvz<Kc1Me0IV4!}_$GH>r0fuG)Gm@&qo-#fb@4)+6}*-|POE6[80bK/)' );
define( 'NONCE_SALT',       '_|8_{1Cu*pQX?2F%AB*_zdW>zZu4*=%(!WHkp<2sr@@@]&=A}mtKX5J$y>8R*y<i' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';