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
define('AUTH_KEY',         '!&MEjJ[oXRQg5|)`xFB$d%<MQ%JLN7t]e3w<! GS|$ghw^zHd6`@+oto;f|EBZQO');
define('SECURE_AUTH_KEY',  'im`QV~@EfUXo1d9;uL2q^ejwK(h0^|])d21$qGN>_GZ^?N&|Fd_I0T-m|V;`rpkN');
define('LOGGED_IN_KEY',    '_7.QU4Z-H4wxWN;::C;m[*!PILki]s1omY5C{cvNBk>ml!U4jzP_z{;^VcEw5-oN');
define('NONCE_KEY',        'l,ZDH?HfAvw#s;fIqg:A3LiZ~s2rCp@I!FM{(bSp-ZRKJ3Et #LuU_O!Z)1]|qz&');
define('AUTH_SALT',        'Bb_[YNlp})Da;MSjt`GjPB#sZ,eqW+g1A?[C-Ikl2/vl,&`2D4-|TUrw63&?P%EQ');
define('SECURE_AUTH_SALT', 'C IF+lB-|iaq$=ss2f1C#m`rPr&M=w{3-]/?d&=IS`Uq/@UJ}6;u--r3p8]JQPjP');
define('LOGGED_IN_SALT',   '];jB/&Ij|XhSy~^pbIQpe#QVC%{{*z2}qY_s@&JB*lz!L^s co p*aF+tvp+z~FC');
define('NONCE_SALT',       'Q+ w_X,!!7f6M]}?lP#8cyb-)4D>VBtC_HF:lbl#4ymS^%:Hb~| OADtG72.w=1y');

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
