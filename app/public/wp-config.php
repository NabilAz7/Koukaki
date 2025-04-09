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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '}]^eEE?c{< *?[lnamm.Oxho(d6}qkmA|jc8AFXQBgOJqKc2.4`ZQ:<fD:O}VNE0' );
define( 'SECURE_AUTH_KEY',   'iuXxEv6{KXguO-_D1M897z4|h;PWhStMEfPXz6BRnsM`HkSnt@OuKX$_~5j,y)#Y' );
define( 'LOGGED_IN_KEY',     'ZU}AJ6@~jbW*w0RwwL%f/:Fqn)C8X7P^1nO ZW^?%I_(:t ju8-L=DDnz.@;oc4,' );
define( 'NONCE_KEY',         '4Uz6 >_=)|Wsu|p}R:8<|k%PC53bERc/n5c,u%f5FfF8*|ZlqmKCOUxMY:.g*]2Y' );
define( 'AUTH_SALT',         'W}[p-8O@_y;W2,jQ%TU|q(~;|SXoW@(cm>ycjoy+Y+oz)mT64sla#b-w+Q2ju*Nl' );
define( 'SECURE_AUTH_SALT',  'F  u>1Nk6yb]0(f^c;J%X(`&De%X:]?)vjBkGXR>@sav2qk-*.YO#NKB6d`rDJ+&' );
define( 'LOGGED_IN_SALT',    'PZQ!7Ue&pM7(o<o/~9itlHLC+lIKA,)Ym#fV1 t{hMGbuK+~>_itxQO4;ItJN0Hm' );
define( 'NONCE_SALT',        'd_&t9XFtNFij.i;Akfk<$[p9ZyLt>yXryF9j5*u_WONJA|jNT2`wkB^(8=D^7n =' );
define( 'WP_CACHE_KEY_SALT', 'h9[zd%?-2I#-Nrko<(#[#x;BD/R}v{#(jm~z>Y1&;Ov){(,Pb3PY^aefu7[:34KJ' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
