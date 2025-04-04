<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
define( 'DB_NAME', 'sb_pgdca' );

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
define( 'AUTH_KEY',         'Io8`NZwZpWk%@|*j9v-(DzS?E9$^iU4(DCX D&a19yX3tybTpRse*+oCl_qgu+@>' );
define( 'SECURE_AUTH_KEY',  'MfSg7Hbioz?@(${A(%H8sS(=%Y/.(%mmmO#NsL5TheB&t[fQ%@Hh><jJ(7U2<9tv' );
define( 'LOGGED_IN_KEY',    ',fqjJKMO)N$Qdd}KSgcWZ;9f/4KK,cWeLcU@bMq{x`^V9IP#DDIqHDcXfaxltN3w' );
define( 'NONCE_KEY',        '4TZ3fKnB]Q3|B^Yh/Ij>xA3)m$HRS%NCK2>{XADsa;i0m2ejy^`81^v@IlW],Pne' );
define( 'AUTH_SALT',        '^S#qfABtYu7:}Dd7J#B;7c^E{OAc[;a9*k6n ,*zseCiKx9-5tw#s,,#NC}Yb)fM' );
define( 'SECURE_AUTH_SALT', '&*?Is^:po2f>78mIy*Nr5ld7,O)L#(75:AM8:=7~>~e4l)A<?F>h8XxDun.?(eP~' );
define( 'LOGGED_IN_SALT',   'c|zu(_t@Xi$Gd5FvNE`TvAZ&Smu>8W6Gp;d<T :-O36;NRdN{ ALX>#?NIT@E1[!' );
define( 'NONCE_SALT',       'gTuSIq(pa81a3m,)NDvpajVw:O,tu7W[i5k}2ah5A3jgs{u*4VK*g2%Aju$#Z6c!' );

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
