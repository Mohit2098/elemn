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
define( 'DB_NAME', 'ele' );

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
define( 'AUTH_KEY',         'F`k05@k[>H#Ib Ttvx9zBve,TT#?);w]M~~^%9ZevyRd[lYs>Re!=%7.wE3=S|[h' );
define( 'SECURE_AUTH_KEY',  'hqkb(yp;z4&IQ8w|][jOz47kS4>=KEWd*5g$n!.OP/2k%i kG&hq=`tswBWC|cg}' );
define( 'LOGGED_IN_KEY',    '9%Q_QyX!e)9fW^`+IWM Im^gKC>)kYA![?l.p5NgIPBf[uEa=E|7F%A=SfLIuO=_' );
define( 'NONCE_KEY',        'm2erU[y73$ VLS:?Hm~ >NyAB:k;o6R&`DXr[lH:9+.d.?yY5VVnv{+=EiJ<Jv/7' );
define( 'AUTH_SALT',        's 1qN>*L/YO#5ea(6t($Q~d%3ak&g_F!_;S(-A[E.MT0A}i~2.rMPx^ASp!Htlw?' );
define( 'SECURE_AUTH_SALT', 'AgKZBUA3GXi(vR=/<sN$#rgb8SK#E0||4~}@5kFhRS0vL@QQx]y^6y0Zs/n1iB@A' );
define( 'LOGGED_IN_SALT',   'EYR8$>omU1xoOaSu>q#-3h$,Eu^r;`U.mMAVl&E:jqt+EO1:5 2# El,T+nMnn|c' );
define( 'NONCE_SALT',       ' WX4Z|Rmcp;%.fTSm @}@TGl[7l:Eqt_mU%n |pcD,;|;TK eb~+5IS}{F3UqsB+' );

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
