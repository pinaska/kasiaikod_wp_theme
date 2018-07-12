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
define('DB_NAME', 'kasiaikod');

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
define('AUTH_KEY',         ')#E)SmAG+bb_.zo+_}-{$&XH7t]2rOq8{{C&K@8na }9W9mA^V8/zm!S|qdpWTUM');
define('SECURE_AUTH_KEY',  'Cf#a<LA#zSLO=%G$8.rgeCZ{>UyaHet;|#5)D|db3KSW.~3iK|EfX&W5Uy {6,dB');
define('LOGGED_IN_KEY',    ';nyxAeR$$)f7*~z>pvI/a7Q@~8(&|Mjq+BvY+C}fo`g^W`a@*Zms0N.og{2NG%C{');
define('NONCE_KEY',        '-Qmu99z+Nk>~@x-qbrJ66YO_(%K(M)rG1ev~WJ+Bl:}~NAu-*[3P| eK,(+X7Hgt');
define('AUTH_SALT',        'lk.>R<,.K84Vjl1w?O~ .r|*/+BoI#}]Z/jFZ:+wJt)5h&W;$k[+3 x;bt`f-]-%');
define('SECURE_AUTH_SALT', 'z3+GdRQ:v0#!iXGo*qW6%2!a)sdp6nXcs`mn<1OX-AaX5|y%nI)S8-lX5a$|p]H&');
define('LOGGED_IN_SALT',   'N*o*6LYyucCIQku<YJf{62,6f2Y_8c_-@{nIGT$$S3KC-D1SN`M4E:|@T!^d9n`~');
define('NONCE_SALT',       'VOEE&Yo0H|c3XHL5HG|vRA<lIhhk$Ue_gQxqlq_+c|(*Y|ffQR=zux:B+MK}(tI~');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'kik15_';

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
