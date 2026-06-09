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
define( 'DB_NAME', 'houses_bd' );

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
define( 'AUTH_KEY',         ',A~Ss(znvBAXmo_:|[c#Fl FxUV~ob0mNkuh4A0yIo#uwj#3T8QBho51z(+qWc~S' );
define( 'SECURE_AUTH_KEY',  'taMA3H_v[V6FRR[[ov;#0}=F<N!o`Q`5pI#P#1d/dsFL&su;SV^eaI8d/cisBOn4' );
define( 'LOGGED_IN_KEY',    'mbsR)#gQ>J7B#7yW$@(/gaVjUksapzRC XHRoG]To.YTFH?#O*JZi Ruh O3Aw2!' );
define( 'NONCE_KEY',        '97kte0*8t(oxC?wD}iv{Sh4iXz0E1OwX!oNCI2[?]ZzY>?^ps4A6SQyQEvAq5HzM' );
define( 'AUTH_SALT',        'p?eeeyC#d+=I?jEK6bIs_fj:_WBK]%2bD>bkA$no>lQf8]_[%;q&INvch(+:[z!e' );
define( 'SECURE_AUTH_SALT', '3~~~{c$aTvl3sXL0r],9yuK, Zys-a):u_]WxBNvgeOcefW6/2d>ct0Xq3/z&[HU' );
define( 'LOGGED_IN_SALT',   '@AJ9W-+}z<ALj P?`s]Fw%RK4H{#2}A]i/s{OoLr%o71mJbniw!zd:k51Fh|vYFA' );
define( 'NONCE_SALT',       '`Fd:Idpo|@,SxviZ;P:7<vcx)J6Zs2Fh}>:+27jWC]Z6AwNz1,NiL-N;Zau_qcg ' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */

/* That's all, stop editing! */

define( 'WP_DEBUG', true );
define( 'WP_DEBUG_LOG', true );
define( 'WP_DEBUG_DISPLAY', false );
@ini_set( 'display_errors', 0 );
/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
