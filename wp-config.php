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
define( 'DB_NAME', 'malshiportfolio_db' );

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
define( 'AUTH_KEY',         ':SxjQo6|nn;ouQlXCJQq$R_1Z[y@f3^?Dv]/!yubA.O5w}YPR5cq@E;!J~x^XXjK' );
define( 'SECURE_AUTH_KEY',  'l[>Ro;]* k={7!r92b-1kgpOR%)*y&+Fn6afQquRrpviwN?2XE#`Yv ^rJKZ8*_H' );
define( 'LOGGED_IN_KEY',    'se%ye_czAB+d[qbbO1^+I[~QwJqeFcu02_}{+&YLF7o8@e.i`2zEA62JBPW2*m_R' );
define( 'NONCE_KEY',        ':-<i4N@uyIQQ=}aUVj5Ks44lzl$kf9KEiPj?i10qeX#8 F. 7t*:[cl&xfsRV}3q' );
define( 'AUTH_SALT',        '=)y<`}<ySIY5^M{?nV<I@J:H1-B<P4]uzS;DTbub`*bX/PZ@+Z?A6s&88Bbpw^*z' );
define( 'SECURE_AUTH_SALT', '^K_D4#N+W^(8&*X%JESLr/KX*Gz9]rE;dF{5;8 JnxI${R/[rr}zz9=j,3FbM#cX' );
define( 'LOGGED_IN_SALT',   'c[ <l pK)vao#LMTk~sxK_b.{8RFErBIoax;@I0,cW17ab#NRSN1o.PxlfbXn*VT' );
define( 'NONCE_SALT',       '/`sH!6Az!XK!u@-emtT<WQzE%UKXFHI&k>&F9]#9FwTH;AkW$@^dD=zQ(r~||H x' );

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
