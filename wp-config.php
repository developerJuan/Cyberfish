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
define( 'DB_NAME', 'wp_cyberfish' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'admin' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '94r;#$4J QCh_y}6BE*h;@?IS8.Ny7x%L[U2&MH@Q<h^srJAQNs#Lb~;#CeYrNT2' );
define( 'SECURE_AUTH_KEY',  '@,l<bB&TDDA^UU{E^X^2!F::H}Eg]<4C&%emFQI_&PFn.Bd)iGre9G,:d$c}O!~S' );
define( 'LOGGED_IN_KEY',    'S=XeT|PO{aJeq[q5t4BNrx=iQS#kPJXTLAbW$ v>3Uphe9-0QbkKr[ QU 9.gUEy' );
define( 'NONCE_KEY',        '4Dh4M->,]}0(F]pM^5<]RoVh<:4xytpY]ZPub!VKkO-|_7<dwzH-uz.*-M]+`(0;' );
define( 'AUTH_SALT',        '8cbd^FfKE(y!gXx;? waQ;l+9RgYpJ,;JeeutIh),:q:,TP&FAz:,Z:4zQjs`9+A' );
define( 'SECURE_AUTH_SALT', 'S*2@5 ;}m7M3%J)&8)USoczi3E!v5ELF49=qm;|jkNYD=ldj;[*3`z<(P|Ei/j!S' );
define( 'LOGGED_IN_SALT',   'I[{Esz%{eEGHd_(l/;BokL~L<)?tMn@cjWyoS#Z|93<Uk{ev<G`7~?lKF _ErQYg' );
define( 'NONCE_SALT',       'k.B@{x>10%c[#*h/{z<ZD6m6:Me!eo0?;8brPfqaR.b+<4*Up$A&Zo]i/c,ObUP(' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
// Activamos WP_DEBUG
define ( 'WP_DEBUG', true);
// Guardamos errores en /wp-content/debug.log
define ( 'WP_DEBUG_LOG', true);
// Ocultamos errores en pantalla
define ( 'WP_DEBUG_DISPLAY', false);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
