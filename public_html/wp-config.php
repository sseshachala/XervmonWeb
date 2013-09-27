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
define('DB_NAME', 'XXXXXXXXX');

/** MySQL database username */
define('DB_USER', 'XXX9999');

/** MySQL database password */
define('DB_PASSWORD', 'XXXX9988');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         'd@9#ya8H4I=Uf@?U>xl&0nv;x5c}Th}9gHoEK<!a$x<ud%fWh,2-oeZw5YuR~h-2');
define('SECURE_AUTH_KEY',  'G|CIf9{L!r3~NXCsuQ}G:??<Y1~=e^vUb}% X,R)Sr}noU%89]hO+tyVXRi{!/#Z');
define('LOGGED_IN_KEY',    '~1UDZ)uPiGBFfi/)d0j~1za?z7XY_>cDoSSsH:lxII?j7kE*vC-W=<(:1E@TVVms');
define('NONCE_KEY',        's.l;hho:*q<Rf](MRM}4r@Q$MZ{mWTm>dlo.=m3%rpXT)El$&s$9a/6L7c L/]A+');
define('AUTH_SALT',        'M+K!Qt<79Jw1?wd%cFZkfA5$cz#06& d[{>MVE!C7S8e_h0v(/j|U9K(:oFKa{0X');
define('SECURE_AUTH_SALT', '7MmNq%<#~N`0fOP&i8AB#V0rXKA>QUb[AU[KttQoB-H6s,SRR?1stZSZ@RWt~*<.');
define('LOGGED_IN_SALT',   'vJw~m:qr&{iqA=o,w!?=b*6u m3WL`V1#RF8H7xn7cRox]*wZ0MF|MbfvPS?P{EC');
define('NONCE_SALT',       'VBTA(/7!`X`W:8DeNNyt[#PoSek^(4xW/iZ|]P}$C%]l#=ei0mhh2VG!{r^g(WFE');

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
