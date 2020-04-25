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
define( 'AUTH_KEY',         'fPDMd+qm}wD_:D&X|GGi2{6m^?-$L}[SM<Z<Z2<u;V3A7bB=.4t<o VF]0bP]+yW' );
define( 'SECURE_AUTH_KEY',  'j*?7$xb>Vf$O5>Qp,:9{xkb45K1=l17QCy`9b)?@VT~hV9K^>wEXZCe;>E2C<~z<' );
define( 'LOGGED_IN_KEY',    'oh7`LS:>.AHWqgl#YV,~]%IZV30Dy8qS1aP5L b:_=zTV3|?#iaFpu&+(zX.w{0}' );
define( 'NONCE_KEY',        'n=H0YJ>b#1sz>m*:>ds`]m:Nkuuo;@.~$s!*qT&*J?g))i#GXGczqbi#{V;bzhDF' );
define( 'AUTH_SALT',        'tH*$kT(@,a|-n3Wy:>AIzF}%MPY:2>Rr/FA:MJKCfaEH:#{MCKV+U3X_FStb7!}Q' );
define( 'SECURE_AUTH_SALT', '1&bQePw+[n kvo;s8epwZ/:98M=NjZvQhMIZ%}P8!1}3MAy#]aS%/(6CA5hSD*5j' );
define( 'LOGGED_IN_SALT',   'XA`x&Rn3Jvv?7t/ &a;@a9e+5%o.y$sPUkJ{,s][a|_+})IcQx+ZVh+}(zo<lT4z' );
define( 'NONCE_SALT',       'f1eK_IPl-]ZodZm.Q1Rd^YqBrpm}O)TbMMJ/JmuJRUFet).37WKGi^eDp@)9^lby' );

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
