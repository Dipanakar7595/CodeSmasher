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
define( 'DB_NAME', 'Wordpress' );

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
define( 'AUTH_KEY',         'OLj`,RoO$xccH(0RoZjt9nE#7}gXETh8=b*>8mluw0udSHNyW8kR:>hqU?rKtQhN' );
define( 'SECURE_AUTH_KEY',  'r2dfmL&[QW@)]k^fx&L_Sk8Kh8BnpV%Y8{Q4*QN%ne4Rf6kqE!XvyHjlK9;BEz9M' );
define( 'LOGGED_IN_KEY',    'y+7z|0p_T|7l_No9dpb^Q{N#<[sq&]Y0Gg@G4T=+qZhbU>y*myJ.0g-XnXM}B]5!' );
define( 'NONCE_KEY',        '2@P+9TPEfQ<w^Q|yqqy[vSetM%7_&Xx+>:5Urj/DcOyH!plga@.mrbB]U`/w_aHf' );
define( 'AUTH_SALT',        'Q= RCNCG#UD]2Dn.aodXt9%q5*=aUt>uN?Kdq|s%<:m*uXwMB/m@c#9B8AJRTDdS' );
define( 'SECURE_AUTH_SALT', '-a`v+%3Sqm?%}t-QDHRN?guLpOw WC:laa!$fJ4kGt<MreS4ZZffkN|vZ?w0T#%!' );
define( 'LOGGED_IN_SALT',   'DCvq>B30+(hyX1O[qk4ySc1r)j6ZnqWVQD`p)b >Z~a!hcUEfW4cQt:R506HAF@f' );
define( 'NONCE_SALT',       'FHHdFGi}NM0^E;o;9P7`%?_-aJyd*tB *>@Vn$JGS=)C lz@A</(Oo}.AJ5Xw+f7' );

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
