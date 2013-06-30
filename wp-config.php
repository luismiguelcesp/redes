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
define('DB_NAME', 'luismigu_upeu');

/** MySQL database username */
define('DB_USER', 'luismigu_luismi');

/** MySQL database password */
define('DB_PASSWORD', 'luismiguel');

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
define('AUTH_KEY',         'pM,N,>waL.6]FPr?3`cpUxUdf%t;%pmlIgkxQ]x2|?+$>6g={&N}=yuI/EV|]~ s');
define('SECURE_AUTH_KEY',  ';tOPaE i$o9^osKCdi7ad|-*6kl)Z?YXKV]P}$sA-W${huQ5Y~l(49Ur41Ror(=[');
define('LOGGED_IN_KEY',    'Fe~rXU^u,etC+R`mmVk<HX1?<9|I-S ZGIPFHWP*>{d@dl{{UR+>09SkN46p|W9C');
define('NONCE_KEY',        'uqBpibu+6TL<DU=97+G0]#5u9OTgs@nKTot+@sH.vzd%Hi+sF^<]X;QWl3XYYUk&');
define('AUTH_SALT',        'g~F^d 7f:VEv|umY^S[=XRRj`qO|NHuKyB<xQ^wU6hr5H21$D8R4Jc4E cajK#S5');
define('SECURE_AUTH_SALT', 'l^5)5u#E@pNo4T{(3:8gTotu7Lm5 F3.UxQ6}xpsgDQhWG8|q4e/O@U#oxnS.)Ki');
define('LOGGED_IN_SALT',   '(-0?L-:UA3SNp?PrT M[:CZ?ui]W`Xq@}FylgAd^RGVy^4JuM5qyL.FYPoGi.#~N');
define('NONCE_SALT',       ')2[+eU4Fy_F}C*q]F:|H::NKw,]hmq3),m>}N.ieg,CE+-}0iILVaOSe3D+w(K?`');

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
