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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'w3bslave' );

/** MySQL database password */
define( 'DB_PASSWORD', 'w@l@yp@ssword' );

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
define( 'AUTH_KEY',         '<C 5XpFK*KtfQE4Fejz>@0JKiIOs<m%a7< :STt]s8+j^{Nq,vg5w*y#/8_vkzbD' );
define( 'SECURE_AUTH_KEY',  'x8Sd*;I kA6<y]@WWSGsyz71Wh[klz*q;@MIjCZ8YpQ5rIR<^10wk;!gd<9H5O]0' );
define( 'LOGGED_IN_KEY',    '3{<k!Gk&{FY%7OCAaIK<Ve^v.>fsG^wH`OAoG)NPcGo$7}q{;h-l?^ ,J)M#G?y8' );
define( 'NONCE_KEY',        '3,l|GHIIx_Y)]Syl^xT{egq]TYSClS9cxYVSC.Y5tg;X@t4s mVN.h:MfLTg!iVz' );
define( 'AUTH_SALT',        '_7lr,N&,eAeAIfN}3?DyNcx^Jy/.nYWOlnM&MTVFG>V05$NT,&&6h{=;s]$@!V2u' );
define( 'SECURE_AUTH_SALT', 'MQaLT.2]sG;-YI> yT`P,%!5H[&jh-pcP)Q;fibjv*YG5K<^pN?(fC<~CF<(usDt' );
define( 'LOGGED_IN_SALT',   'y*TStGz1;|Qc:| z%9]K$z1P;`| ETZfee-fIV|^^I2qW%[+tyT/KO8S!!~T$#z[' );
define( 'NONCE_SALT',       'l%.ph`2J}/&DUnz.Okg?[2G2_FxhSBT05z~Hh,Xk? n&w,59pZUN_i7qRJno:cVk' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'cwp_';

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
