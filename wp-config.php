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
define( 'DB_NAME', 'bdd_wp' );

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
define( 'AUTH_KEY',         'XTU<PHRvj4Zg;K*K{E*NoMtu`HgCdY}y>k?qCX #;TY#Gx=vrKbL64l~kE#ajxru' );
define( 'SECURE_AUTH_KEY',  'Lz:8qrLC4_s!2g#GpQ_k]#P8|90`[:rew]r]2kMC~HA@)>xaxO*w(#4BFylpe%C2' );
define( 'LOGGED_IN_KEY',    'r:cuT7Bx6*={BU[7PnRaFe@]aycb`a>Tib=ph[]7?8*{ p1|AYe7Ld~{T_Y;4+?J' );
define( 'NONCE_KEY',        'F[;/qL3i<vVJJef6X3gxI72[j tH^u 3g=>mjMEF/c/&[%DwR?q bku>>X2?]M/ ' );
define( 'AUTH_SALT',        'i/Cr2x}C|mrHDu9j3{$$UntMYa:yb0l#a~Rt7M75-h|#9tQ5_A,Ru{^,h6,VMSr|' );
define( 'SECURE_AUTH_SALT', '*fXhW^D/K{#hi/YJ+.Q`afzfi@*Ln<x}p|iiWNz>jxU#ChIq,X8ipopBt?E`ed#t' );
define( 'LOGGED_IN_SALT',   'vYAPTFuG5NIR}g<T_)!Svsf]K{!^b4WsX$K^@O{Lm[pdbG*&n6Ln M#k,<*4[XXh' );
define( 'NONCE_SALT',       '5@/3t34cUB~,!bDX8u7,YM:P`^*rsLs;dRt+6vfd$ TrZ3f85n[:I*)YVz`pk<#Z' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'f_';

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
