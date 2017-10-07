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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wpLocal');

/** MySQL database username */
define('DB_USER', 'wpuser');

/** MySQL database password */
define('DB_PASSWORD', 'Ho!2#4%6');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '^M#mU8Q;(})SaB?(hH*[X+eQ..wnKb@I8-I {W}<qjNr0nBO;Zd8,fonV)PB3we~');
define('SECURE_AUTH_KEY',  'r6hHz~l!4D#>XPwG_T}2RrA5kG^o>|Yrn;g`a.3W<0MaP`[Xo(kn*?5CM}Z,vqH9');
define('LOGGED_IN_KEY',    '<l(}^QlSbpm|BLhZ95`z{ETNH]~;4GZ.bl*1J;~AM<FLOn3uY6r4bYA4Z%] 6d2B');
define('NONCE_KEY',        'jVISkrngjaiJ*J})w^)&qtjUMV-FdR^ Yt&+_B>8`}>CHZI%Ci@Hj:oS~?{WimX.');
define('AUTH_SALT',        'f`3%A,P6?VjEk@znU{KXb@$h YLNq{$h!wj/q#tIB)Te[>5=r1RMd.v>?hKf5Et7');
define('SECURE_AUTH_SALT', 'N{zC(5Th;`9{DPbH[nB^49B]NFd$N0md6k/|{%|9yFy!r|g)iPEfl[,~$F3`z4)d');
define('LOGGED_IN_SALT',   '6FQ}02&}PaTB@/<Y)n:nH4l9|),b)hQl+)QE.EO-b~G!$d4y2}`^gI>{9c-AkF}*');
define('NONCE_SALT',       'KRm 2G3+>~(*<ZqAg|/6+[>Kp#$=r=~w0pF`CI+Uhjjvl0.MQ}&#ZAY[|$9F!bjO');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
