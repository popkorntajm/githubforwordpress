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
define( 'DB_NAME', 'githubforwordpress_db' );

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
define( 'AUTH_KEY',         'TXNU ;.0Fj+xm D]*JI1a_]NL$r},G;q(K{]}u+HGP_I![HbiV/S6x8ZlCN> _S-' );
define( 'SECURE_AUTH_KEY',  'VbljEwI~`?8s%RDeZ:Nku,Ob|Y`X!i a^eo+N{c%#urWpq/bD1Dt7~xOX,BUA#/p' );
define( 'LOGGED_IN_KEY',    '2M([<{^9nhj)&vM^hM!0][q#WS6d(B/zO.f@@C9!>v0B<hOv-W:w7qdPmm>y={3h' );
define( 'NONCE_KEY',        'G*xl#F*;^?Rc4Q&Yg5Yv }+YClaZ!lVR61VpSxLUo1y4W/_  ZCauqC. HiDoXnd' );
define( 'AUTH_SALT',        'rf}Re /d@c^^PLs.6*,dTcU@_xM`eJ0%9|t5P*Cq$0v]N LrD*5Z<${93+Gw^Chh' );
define( 'SECURE_AUTH_SALT', ']]aTjjs;i24Ox4N&,/@T>&ANT2t-foCl!(<U%lN^|8zWSV}6}cZ|{S+y7XTE4n(u' );
define( 'LOGGED_IN_SALT',   '4hh9~*odiP,v!LZ6#;n9%clbvHd/W7gr8F*-UvAjA>&iR @&G)E!u<yof?mRixfh' );
define( 'NONCE_SALT',       'Vf)3]VC+Xg=hpcZW.4%AU<HY50Dp>Jq6#4^uV&&TT^YZV;!8fSGge{P7o5geXUH:' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
