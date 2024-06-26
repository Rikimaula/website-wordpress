<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'smkn4bogor' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'aqj>AMP<_<,c96aPT6jq|T;Iw;[OR-p^Y,,K~^yua<mQQ.?aZ/b01|+*HFJ9FI 3' );
define( 'SECURE_AUTH_KEY',  'TEv!.0e29EHwXm<97%l5R>/=Y2;a3y.[>%{H!M])QnHzC*_oaVieK^$kGZR<[HX~' );
define( 'LOGGED_IN_KEY',    '*0|XzmkmQ uOs4#.]6,yAs-GZXJ!a{{ziFZ0u[~`ft`O1P&88)!1,jUe%Rr-Q}&l' );
define( 'NONCE_KEY',        '%N7DdK;C}Gv<gF(0%VCv$zXI4xbVcMnm![%SR;o6v+|hWXYAu}9._TuipWlLlY+0' );
define( 'AUTH_SALT',        'zu7i{ai;OCvy4*z)d<)W3j(:gD#-cSm`5 :c(Yc5~@ +ul0e&]&hxprzoh3b0]]U' );
define( 'SECURE_AUTH_SALT', '?;_Z}]f8DK=0+J;I3;>Zd-PKE<Q&b%#9+b#C*WumYM_cn*~Ru# 2EfUpUT%.sU9[' );
define( 'LOGGED_IN_SALT',   'p#on*vHV4<L?:qsLo/7mO5bLJFy$VIqr1`&_BE);C[jy*P0r*GgsqMEDF+;y7Jq/' );
define( 'NONCE_SALT',       '$ik P`2*GUy~cmoI<_Y8{Dd7~KR4CMQnOe248>=.zu&pD]|9uen7$=2kn(X8^;b ' );

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
