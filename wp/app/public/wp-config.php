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
define( 'AUTH_KEY',          'P[U$k(:+$df#`{xGa@!j)L.]xm;M@aslId;/|lMLJr+!fIYiUmvm>W{+cy6my:<E' );
define( 'SECURE_AUTH_KEY',   'c.@Uc:3GvaO5(&p?EPYRw>|S7dTr64@.ij|uEVC7/ R&g(gtpCtJ$?,G:DmVL8LK' );
define( 'LOGGED_IN_KEY',     'b%:2{!`LP-NobYKTQkfP%=ObMjx a.1`m]XJ-3+:MZt+g h@WChiF,cLDVORWaAH' );
define( 'NONCE_KEY',         't*KN>dJfOhR[^yr WjJGAFTT^tD5g)R|7[k>RwZWC{(6(96V6N}=P+Nz_dR09&zB' );
define( 'AUTH_SALT',         'eRK#]+R04&.Ozh=]M#qdPYX<x-96}t@|ia|qp=^9sw]Zp({n_PoV5E]oNXS*; EB' );
define( 'SECURE_AUTH_SALT',  'o%eIR[5]<SF&-:eqadt]8aZT{W+BgnvAhhJ-jE4TH!dqmNLmk;8YNJ4234Z<%*3E' );
define( 'LOGGED_IN_SALT',    'hqQRsTJ7Rb1_qh%W<L45 gY79.*EGkEPY)9eW]{)Wg#M3VRkbo|zyt/=<JvnlxhU' );
define( 'NONCE_SALT',        'GO<?+X0:${*1paL].Jmuuw<N</q;AHON{u%MKHSF}=qWEE2{Bio]^)_?.S)h/2q1' );
define( 'WP_CACHE_KEY_SALT', 'lc*d5:;=D6J8OE!8>#k]uSeG1>RyZ7ymf&g8pn)z=}`}Ob1j0(EZyy)7gMq7Qd$P' );


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
