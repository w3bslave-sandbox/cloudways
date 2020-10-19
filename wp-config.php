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
define( 'DB_NAME', 'cloudways' );

/** MySQL database username */
define( 'DB_USER', 'support' );

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
define( 'AUTH_KEY',         'Ey[wpF;qE~h,J5_sE(#&_O+a>MQA:BU668pkE&HRTy7~blakjq+q*i4xw}B:7_9[' );
define( 'SECURE_AUTH_KEY',  ';0x31dlK5$tyi=Wx?a:%U]3:<7jG@30v|**BT^T2`{3$4IAonK_jEmli:9jL&|Qr' );
define( 'LOGGED_IN_KEY',    ')|ct({XWA.;XlPC+`Btn9d;h!FVA;g,SwQGE:>vC5NOqGp|Vf8-St zQwp+{X4@h' );
define( 'NONCE_KEY',        'u9ORYEJf h1D|RT(Cqu2g;HG*_ lIKecA$FSk&,#]<U$EE~w-?AC_4<+sdiIWlw.' );
define( 'AUTH_SALT',        'Zayeu<IoOvAN#} :$+3RI5>;KJp(&d+C4j.|CF]0_vfKt.-p@dK%P-;g6+PJGmgT' );
define( 'SECURE_AUTH_SALT', 'xSV^?MCnqV1YYCsA<U|$rtYmb$gEaUIw*Ca:-A$+2k(s+!sq/.K{*6=*~m}I4X:,' );
define( 'LOGGED_IN_SALT',   'kmEu93D]|XGx/c]BaJd_U`7n*ByN0.Gb[Ws#.&@M3B=>kV|ifUimBy|/moWNCXD[' );
define( 'NONCE_SALT',       '-}g-9*jIGR&oS<5aYER3~XU/gQ&R5,${eFhfv1b^o^LW,h7wO$AZ&X4!c{FR.I0W' );

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

