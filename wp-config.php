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
define( 'DB_NAME', 'Rabita' );

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
define( 'AUTH_KEY',         '}GV_JwF(xh#6H!;umMF4g!1:w:5mk6n?ERY}EBjP- !5tDc1lInmLHMeuNhV#Kyj' );
define( 'SECURE_AUTH_KEY',  'SovCutsB[[@*Zh:ere~HlfJi[GBw D$qsT2?~`!ETfCDpCd^;,(0dnChvt*lR;zI' );
define( 'LOGGED_IN_KEY',    'ZK5b><k,?OjRF83wrRp7;|==V<%NBbB~l3^O+4[.vf<WWK]<|a#x59_VAmS;@~!i' );
define( 'NONCE_KEY',        'j+Y`BgMD&$j;N&tDCNz{e]nCT(o uB&7i`8fH61WKx0YM{;WPRwR%|SZ/Y5?L[;[' );
define( 'AUTH_SALT',        'JEdemRu-kf,kXxS[HszJ^Rwf9!<j>[~&J=jZ6&scTKh`o>TW4Vi~wr U1V/H1`~I' );
define( 'SECURE_AUTH_SALT', '!_OGPglBuq?g&KW;z6A!1DJ^V6vC1j_>|)U^8qwb0<75EHU@KsIjt/fZq0k1eP5k' );
define( 'LOGGED_IN_SALT',   'xugH#>j:zWLizou eJRo|^FL6W/MoE!lq+AQ9Y>daJ;a2_=Hr)., %JSz`#Qeg-E' );
define( 'NONCE_SALT',       '5Iz@_K`&a>U[j#>n;#Ttyth8|^Quap>r^msApK)/irL}Q6(~I:c!-!Sa@>]mqQy:' );

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
