<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'cci');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         's_`*N H4Y}%biDt]uTO:WGo@*._P9W+3yMWXoj1>n0-Hh<K/}L(D.KKY!T -;X`6');
define('SECURE_AUTH_KEY',  'Dm8A]tm4[v(C^g1+f48b0c7Q,A~B+[9{- O4J):+n}fA*en+z-45ZlzR;kA|}bWm');
define('LOGGED_IN_KEY',    '_=3QDp;8fJ+Un6}W2g@y7V+NvB6K!WvuK`Yg&T4)ChO(3RQ#-v6@-#S-%EgYzyN=');
define('NONCE_KEY',        'dj#5?1Wlr^-JLrOr5L<NvxVuX_uDM@GMzxKn$=!n~1<q7I&v&)P)BLWU`u(~ L-C');
define('AUTH_SALT',        '};xsSe8QccU_T@y!YYL)Bh)ptaXC8E24idvMaC?!pq({tyY|GEAzR(;c(;3=@=km');
define('SECURE_AUTH_SALT', 'dS{VWK_NcRSGy7M5rM?/Jd-Id!ZdVsC(X$% yp9X<pLWt>2qAPS8cUxW#bUE-c14');
define('LOGGED_IN_SALT',   '~ij-is)n=~Svb&lM{X%a[{^fT[F(o+?=:[ano7_-?sia%,v?M+.!6{H=6}TviQBp');
define('NONCE_SALT',       'A 9ud7M[r&Qk]ML#6TVCx|$9m#a|;zaUGrjE;}E2_=5&(Ya+j@A+<CxDAw-O7)|s');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
