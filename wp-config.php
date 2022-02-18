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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp-theme' );

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
define( 'AUTH_KEY',         'p:>g<q?GKWyVjVz++qx`P,C|!dru*O5K{x:IoS-GuDw@7%:/+/oM4Yx/K4d,RMr$' );
define( 'SECURE_AUTH_KEY',  'X|c~.u*tJXrm!t818dmnXKmL*Y:3FZAAyc_wnX$?}rV,jnNn.[vgrx;/cB_Gmgzx' );
define( 'LOGGED_IN_KEY',    'G.OXdOJ?9 CJOn/Fx [>3#p:ro*`QM Jipx|vL?u88*4Bau]7N;+x_!/AYkKP9&q' );
define( 'NONCE_KEY',        '&)4a}q9>y$,GF^Tt:Wt!ji5]T46;-&$|@.B7ZxJXCyz+ks9q&K@bKRfXWCNA5T3e' );
define( 'AUTH_SALT',        'Xd9O9:r/:(].K+xJ 0WUiJZa6$|:  nW]Ny&]g4K@*clw{E(-.G%uw?E8}D?0yXX' );
define( 'SECURE_AUTH_SALT', 's7Qd}BLlj$?&iMeF[SI?x<abk4Xid$ncY`lCCv*JA5eFqRTo lSTS00%S:g~3F!@' );
define( 'LOGGED_IN_SALT',   'zrPa7p%V>8w:o4l%.822:+tCRD%hN$whw5~k]FNL-5SVPJ.^-o7,m]t0mZh}m(rX' );
define( 'NONCE_SALT',       'ByX$GqSlNX3y3snH/0<4X_nQ).#UZA.`~9_]u:n]Ux-`Zen9/QfcoDi3<@:SZb>4' );

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
