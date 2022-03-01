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
define( 'DB_NAME', 'hvu' );

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
define( 'AUTH_KEY',         'f3.&};90zjtKXW-[DtMb&N]Ai14O7Z[}~J}>/h?0@bppclTS{u1@3 3j~sSb&8}6' );
define( 'SECURE_AUTH_KEY',  'o)7D[Sa<vbMd^0R;~Gq_U~bMR5ghi%QbE<w&{6IaLsuwCS$0}&ve%jC)H{P=nLA;' );
define( 'LOGGED_IN_KEY',    'S1`Bb$0`BO+V4*YjBOm4}T<T0,/X#sa$DHp6CP4lMXNcF|h-eR^Q~]:q7NkqMJyk' );
define( 'NONCE_KEY',        'raw jsJ66bDX+9>ePs}`$v+Hh0SFN:+)w`7+&!|b=/M%pHm8PYnP]M4%>]k2|ldz' );
define( 'AUTH_SALT',        'H~#dGq]Up7Ir9,IF+T1&4N|%d+j3#E1gkG29!iJMC}73Zv>qc,X[0jJ+zaTTCVt+' );
define( 'SECURE_AUTH_SALT', ')sN3:e@wG9E_ci:A:p,;g.rO]WyEiMir_4<[gKHe+[?SQ_tG1,-o&a_Wk?o*)z<%' );
define( 'LOGGED_IN_SALT',   'Nt9^jMxpjhSS{s_]e7tyYHs$WdfXd[7S-8q8@oTk#H@KwC!:kpoCsUUSd[$l@GKX' );
define( 'NONCE_SALT',       'K*t.?SJMw<?OgjzqI_7;26aB2]_/=9-m#rJI=?)01HX!(X5S*D08DSH3C{orrU6-' );

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
// define( 'WP_DEBUG', false);

define('WP_DEBUG', false);
define('WP_DEBUG_LOG', false);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
