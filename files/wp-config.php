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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
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
define( 'AUTH_KEY',         'm^VGYbx]CYB(prI<(v+0LzZs:;hWZ!{)Jq_[XYn<&P$1(#VG6[}9(7JoTTR^LV8u' );
define( 'SECURE_AUTH_KEY',  'y[X)!6lZ&O8`FZ/az_$2V)f!JW3--D~8HD<<K]T!Oty)gXIbxd68RyC=N$`8K ZR' );
define( 'LOGGED_IN_KEY',    '`vT#q~)nFm]/=t/}}[{%fk*V{CwV,Yh{^p:r.p@gY)&,2NGB7y#KRjNB@-<:EV`S' );
define( 'NONCE_KEY',        'hdu<FN4F~:JC.mhj>lpUzH1<-(KxgOSx[=>=Zt3)ICT9HQdYG.Y{}2Y(I#k+Qr|h' );
define( 'AUTH_SALT',        'TI+*Ml.NKA`rOz2rm8e_Yci6/Wst^_giNM,sQYdu$)|wa0u~&($Oq#>@.y@92c1M' );
define( 'SECURE_AUTH_SALT', 'P^<#1|< 4vA.:Fg+aHq%A}9%x1{b`%HaXJ:O56b@Nx/)&$07r&!^Tl4In6(lPDpM' );
define( 'LOGGED_IN_SALT',   'Y6q:)r}NGYU)zV}r;;3MzvXEgKXk-W$,vb,Y(R OSe@Y%eSf}Lhs%s]3o-pG&:ag' );
define( 'NONCE_SALT',       '$T:? SmT9Vl?^swr>I^tT0PdOT!4E[e62$Rk&tUm1%7vmS^PGneh#>*vbC)F@IY ' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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