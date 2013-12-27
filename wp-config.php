<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'HjnXq2A7cW6GL58n');

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
define('AUTH_KEY',         'c1r;1|5^CLUw(:GaciXA@+P+|B!Pjo(eNWGmG5GX6>}E<hRQ_O&Q /aW,)oQT-,`');
define('SECURE_AUTH_KEY',  '{b__DC7ATz3M6.~rqBNLC+UO,_zkNjy{?aEj%-:d`osV:QP% 0tf>+mm^?yGchT ');
define('LOGGED_IN_KEY',    ',A)GBM;%L66g19BL-PYE/KN(B$WR?3550Z/})|a`=@Log&F)wZ/x6eX$u,f!MH.F');
define('NONCE_KEY',        'z_Oc!#-YxoYTc*cF<|w5/|rOZ}<m,uMU?+P[S.,+Sfe4.OvGO8$?H9.cpQ%&KsmX');
define('AUTH_SALT',        '+KY1|U7uN|^u 0lbQ~+`ss,J:[VwoE jOh;MnC1pa49W|+b&|u;a+[SnkD2eA8X+');
define('SECURE_AUTH_SALT', '=|T.]#6TRE:: 5nPv#~:(T!]rdyG@+c_`P{$Eg;AbC&}BEf$=6xUl<fH&;yMUmIr');
define('LOGGED_IN_SALT',   'O&<~vD7@e9A,Sae9m@)yor_4{- >hm);|+2j]pDw-~ {ixoUy6NRQy*O~7_6~L4*');
define('NONCE_SALT',       'Ir.L8O {)=w0|)q*15@yuh&/e836_5-ceRT1<}-PX6r&}em.DH/X0X{Q<JR6Fv!?');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
define( 'WP_CONTENT_DIR', ABSPATH . 'assets' );
/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
