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
define( 'DB_NAME', 'myportfolio' );

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
define( 'AUTH_KEY',         'ayw<@$G86cg! }:JCPS<rQ/k;e,i58Od;A_e21+0XW*!YY^sCK=C%mI.DKmwC_/Z' );
define( 'SECURE_AUTH_KEY',  'oS:~z2cM-6STbE{9R-0R{N^i~EeSdfO*.#=^aV_<!TI8u-vYVX!;1sr#.tbVARv6' );
define( 'LOGGED_IN_KEY',    '}rMrSLengI`hbv<L$_B=:+dvV~LXxOfirl,|V`l#bDn^X:PB*(i_`_)3j$Q.`i=I' );
define( 'NONCE_KEY',        'W kvWA`arBNJUmpG<]qg%YX;1/)MSybM;.yX;UwDJN78$&<$qHtMuXYFh@UM~8z.' );
define( 'AUTH_SALT',        ',yzZz4r{,8`~RPq~}/>7*.SY =S,n}j*6XD)y?)d_(]-CwKl,MiU6]1>n7$u*uA/' );
define( 'SECURE_AUTH_SALT', '6w(4^VRrSL.ps]`&cbXdbI$2hDS .%.,TiT?t;Jd,D)*3F4YlSSEd#bWM>vm*XNP' );
define( 'LOGGED_IN_SALT',   'mho@c@AleDC2_zFAvh<1,#pKc%{BC82(,t`}-&m[u(p*(Q*v(s+4D%D[7_e;-C<e' );
define( 'NONCE_SALT',       'wkB{=C}]Ulbz4Nby0O<=LK?Ym>5>nJD>d5$]1J=,DMM0afF8q_2n0ZK(o->e1,})' );

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
