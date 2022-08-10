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

define('FS_METHOD', 'direct');

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'tompham97.github.io_db' );

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
define( 'AUTH_KEY',         '^##@wX{Ex+$t$J3[JtDaO&EXK_-dgC~eu<=bQw5tpaU7DV}Ey[K~`f-h>v~.L.,1' );
define( 'SECURE_AUTH_KEY',  '^7]yfC.rBb(0s3ANzeG3:%C^5+H/nXF]u<ls4mlftKbv2/,10ASnj7%F+_ L{3#r' );
define( 'LOGGED_IN_KEY',    'Yq6+|r2%Zlnr]NlfII~=J.odtuQDhIpbRqr3KSf7h/MDjsi:Iw9-FiH[6YG Zv-W' );
define( 'NONCE_KEY',        'to>#f2pU^OzFA)]*)l#EXQ70Khs+Yf^18{[.grM3J~{Yu/x3O_v0&(=-Z}K>syts' );
define( 'AUTH_SALT',        'gZH0_Hs^;Dh{1d;/=cp)JP=d6CT#OS$KY9uN=~f@Xn%dOj,6a,7.m+(bRA*C>obn' );
define( 'SECURE_AUTH_SALT', '%^@Xz}D|*PkwL o,z #= 8)AIWB#G0H)_o5+2}ML:1Yl5GsGI] iG>>w!4R4MNOM' );
define( 'LOGGED_IN_SALT',   '5NJCNmBV]|{%yKUy$ ad9{X_,AX:vLMfEy,X$ @,i|/vHdwfgz-Z[}ot={!XMt1>' );
define( 'NONCE_SALT',       'MTpZ^QIJSBx}hk93^j{||;V3<Opg*uTO-g2w9#VyBb>7TT/~Kjj.VU.[N,P_%#;m' );

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
