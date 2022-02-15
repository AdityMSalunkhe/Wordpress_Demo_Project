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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'nh<r<}^vQ]bD:ivd4Pu:gMq2i3LW}Dw32;s`i!QDd)y0m@T-=hIQCmM9&-FFUgGo' );
define( 'SECURE_AUTH_KEY',  'tern/2d<D8EzrU?sDf6Ka0:>w0 %7j!8H%5NRea-xV-8(=x4GH!(*J^!`<%rw;XF' );
define( 'LOGGED_IN_KEY',    'zNJTVefZ}U+h~s)6~^xv?<WFYs(O]mqOjKHkz,[s0Nzh<*;!MN,m[8}Flz$)^N4r' );
define( 'NONCE_KEY',        'r9_`.GPHDEbvY@yfff]x6Q#Op/3+vH! YC@Nr<Dptm|f+wE&mn8VA8&CC,<>|*_]' );
define( 'AUTH_SALT',        '%tBj{t<^GSSwq`%I<DUlm{ThzbMVj:s=.WcpR@**Y<dWdAaPMv0,Tj w<T/)(ti5' );
define( 'SECURE_AUTH_SALT', 'F7<$>U28A^kh^(i&LT+N?A*J!}?$~h&cheg|>lLEn_%/*D.DWS`_ 9)UYG!ST/dB' );
define( 'LOGGED_IN_SALT',   ';sCLM|+&0k7:mUa`A`141BVFVqs>v$PL$/o! tyGS`:$:BuwB~1Aoqh!.qgjaPdC' );
define( 'NONCE_SALT',       'G&DZ?N$QN;WX}YNS{Q-m`pL!s)#E!p22v^Vj`S8l@; 7$.9n^U`GLQn|)I`l;f[(' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
