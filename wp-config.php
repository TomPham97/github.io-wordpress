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
define( 'AUTH_KEY',         'v]PgzE mOpJ?)X^e/Ui9$b([I8Ovz ^is]4z0BE0Oael!4[JAf,J$(pUv;womld+' );
define( 'SECURE_AUTH_KEY',  '3zVoJ!K%F@)@Cyd_KRScDVsuSij.a2:44;z~glvvd#m(kMf{<i%]}-DF(|)o]ws>' );
define( 'LOGGED_IN_KEY',    '6$365lve$|tPHC@}Hn:g`0^AHKX.%}|mA##/YbaBM!PN4EAe<wA%[J*qUwu.B<Yp' );
define( 'NONCE_KEY',        ')/d_# !aqcc6(an@}9,sZI7`Ip31*d!*-;<Y!88$k N]):6CYd`dTIw)nd@.G9tW' );
define( 'AUTH_SALT',        'qG^)88KC`z%Zw%YN>3j>LF%(#{A-z{!:9#G6</-)vkTfy9qW2ipxViK)E%Bdm7;}' );
define( 'SECURE_AUTH_SALT', ' ~Tc{fomU|%LCjo:@SWQn01B@C+mkMS62PpG ps3F`n.urk*.;.5zS2dSuur64ih' );
define( 'LOGGED_IN_SALT',   '0cS#.z&h>M}=5QS|5swn~T[vqk *n Lp$)^.bGL>PgpbCI`0T.P+$v12Zll`bF7E' );
define( 'NONCE_SALT',       'y,Kfl#]j?RjdQAq]hap@qQUW/+rRlF}N8&M7*{38<dfP.5?f}o(r-]dP}s{3(w7m' );

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
