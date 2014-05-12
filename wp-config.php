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
define('DB_NAME', 'premium');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '?.sfY)+94D,]mF-|G|KE6?bl$`O;dtCnS1)Kwny*Sd5;MtFZqPvBt~EA,MPZR|y#');
define('SECURE_AUTH_KEY',  'M7ZzqW-4T]cq#3>)hPQ-+k.|@4&Ud?OBELqb)p ~5!/!jsBL/B)!:#2tJ(3N[He}');
define('LOGGED_IN_KEY',    'm?C{OZIIeZeU3$o0SlT|:5Hz%0F(*cm&3dDC41n5m$V}93?UJx~l8M4RUk)kW49w');
define('NONCE_KEY',        '9kARL;dwun0Ed1+]}vx =HEgH3:bF_2Xnv)4@TJOipRrpk;4o<)sB)g*ex?q]^u4');
define('AUTH_SALT',        'Ph ./q%@dKlS4xC$4AZRhv{nQ& w/Y+faotR~HXq8h+<N71/![$a=7{>_%+-.Hq3');
define('SECURE_AUTH_SALT', 'V@[&pW|!$N `--V- Jp&6b3O0B]i-3j/>mcjZ^Xav~z@Ydm9b%KVIA <U_`|!}@|');
define('LOGGED_IN_SALT',   'moA.iX, S;qG~S.e(@_E`krFI4-V `-fW%*+Y1Vu-|9,%BJK<(]^nLV {Xnq!t*o');
define('NONCE_SALT',       'ipGoJ=-xMEXNEbi~Q7FjJ5yH@{y>1:3,ngLGIyB(R:MUDWge>?bkhlf=WiE|<~TW');

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
