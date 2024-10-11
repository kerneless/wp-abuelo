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
define( 'DB_NAME', 'abuelo' );

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
define( 'AUTH_KEY',         ')&IyP|o|9l2%ezg:HAU^ST2bix:)eAYGgi`{ G1pc.Qt <>fT_b-8{g;J{)>9!vy' );
define( 'SECURE_AUTH_KEY',  '+O~.<CTvF^Tx:V_BnEXt nBO$/wFPYl(G_$zE, a=+{+|LWQF{5uG^ R<r4?-RQe' );
define( 'LOGGED_IN_KEY',    '=;>~:T-cUB$oN+7]zpfV*@Ud@x![:cI>Q?RR5#_mv PgosK]?aVU.>-SLB=`ZWGL' );
define( 'NONCE_KEY',        '<)-%K-^vM*CzR0@J,OX&1p`v{.%6f/B]_[`cUl2.2jljp^KrG(Dv`^VN`f><w5<$' );
define( 'AUTH_SALT',        'jH>*iC1RFb?XQnr[27!G~Q05_qY7if?|D#v;8d8O(Q&WeF;R5$hJ]d?`>/==r_BW' );
define( 'SECURE_AUTH_SALT', ']$IBc*pU}(qK7n)VoJM!~17.3j (2#19cQZU9;wWXZr3/7Mc0s.G0(*gRNJsE?9h' );
define( 'LOGGED_IN_SALT',   'q@NELh1]S3kg@1:r$,P)?^T:sgqOSC<y!F+gF#SH)a|.|k?_(_8/>g$!}z}f:xVT' );
define( 'NONCE_SALT',       'iW,YOi#)DAD+KAb>|MZFTg(+F@)g!=4?Gd8Y{XI:^y|-Fh<dpVR)deY#YOD8Ue<h' );

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
