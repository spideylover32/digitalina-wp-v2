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
define('DB_NAME', 'wp_digitalina_db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '*HD1412*');

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
define('AUTH_KEY',         'aBD34xy7nS:0@5b=uB7qq6gb;xddW.n17fapP!X#a(I4S[LLnl&y!;lTLAXaRIpV');
define('SECURE_AUTH_KEY',  '3|s<H^+1_o+/nC~5I7u =P[IsJl@[p}fo|IW~R[ZckNbnx$Xuq#[g_wn_L!jEmeC');
define('LOGGED_IN_KEY',    's2yh$jd<Di-acSB9WW@7p3T?v.)7pK)n8@mi7A)9i{V1|Y::N-Vz_@8:bG)lxH;{');
define('NONCE_KEY',        'xIs?YCGmb;o+I!`q%yb?#kx4en)_auhL*mzhw}Bk+Y}P00l1^!+~eKqt:;iS3oX9');
define('AUTH_SALT',        '|tK|4]9R&63M?I?^vC]ckvR>R6{y7kL,6:DOiCf&c6)|3AiS#uR^0i<N`TBZd0  ');
define('SECURE_AUTH_SALT', 'ReB=}&>WZ~{DeAW9J-ld-vbVl?dNuPT#r|iwdsPO~,^Ha8.T|+kK]*#p0ql3aHOx');
define('LOGGED_IN_SALT',   '}.c|0z[<GSQYw@%7yudc^nopwM;19Wul;B+fqEC[2$W^?K5i>h><5|E-RYfdD~gS');
define('NONCE_SALT',       '0W7hO@eR^H|s@2F!6SBrp=E+_U#o MmNMc>73S,y1T`zyC)t.XJ||%RREqMI6fL]');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'dg_wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', 'es-mx');

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
