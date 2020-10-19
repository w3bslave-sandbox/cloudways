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
define( 'AUTH_KEY',         '5>:@|:dC`H|yNs@,NfZbC&+_T>Pbk%@*)`GQze`3=opd7Qa1Vs8uV`|s9pTT22ki' );
define( 'SECURE_AUTH_KEY',  '%?,2`Ilqgny$Vd7nh]k>% n]q.mn~-(iS>8GXw,58(_jS>NQN:986On(kL%G|17%' );
define( 'LOGGED_IN_KEY',    'DH:Z!o]6JsQn7.6]}y6pI2y{=X:Lr=hc%tva~=iuJ;V; *T B&jHCV@_g6h04L@_' );
define( 'NONCE_KEY',        'af/ AwUJ|F<F(5vdAQDgnu.@[T;8mv,{gEUXjD89?DvQnL1/}Zt^1&&A80Ct>C|j' );
define( 'AUTH_SALT',        '5sa,e/BjwH:=)^Uy$&_EXNM>ICD8iaix25PNJqjXw0xnhZLCn5)Co >oj>zU7pR:' );
define( 'SECURE_AUTH_SALT', 'Q!27YNO1hF,hSQN$p)b|}4jy8PxUFqo=Fd2JD-EMYbN)y9jUSnaj;8zti&Ky!#jm' );
define( 'LOGGED_IN_SALT',   'JexGKuy-:7a5P$9tXs5?_#=}3X!;a6mxZ:P(t$/P4>,y1*8o)/7?2P*arv;;f[:i' );
define( 'NONCE_SALT',       ':/jgxQ!D9F-ra$?I$GnXp?~PGr~x]ML]E2EF]CLZN%&U}*#DPTMnk<[#*/9n<%Pg' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'clwp_';

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

