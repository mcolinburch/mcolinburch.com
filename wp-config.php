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
define('DB_NAME', 'mcolinburch_com');

/** MySQL database username */
define('DB_USER', 'mcolinburchcom');

/** MySQL database password */
define('DB_PASSWORD', 'kvxYr?9^');

/** MySQL hostname */
define('DB_HOST', 'mysql.mcolinburch.com');

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
define('AUTH_KEY',         '2ZSTBnON41tRwFRLz%ooPA^2:WWJ7c?Bv0emdObfch7FiGZTN/H:E;YJ^qh9!&Lu');
define('SECURE_AUTH_KEY',  '2iwU2l%7(eE:Ge%a28~oy++^EuT37?9GdMn(`%pj|cIfqd1%dV/|aWSnAa?*3K!7');
define('LOGGED_IN_KEY',    'Ue41!~2sb7GF;E5@gmS!:qPJrmhgG;&B^D@w9$%amox1p#9R?INiUSMXQe~sMW^4');
define('NONCE_KEY',        'LleOP_N1Ja9?)"*^LK6FC+iLZ3xTNL4_ZC@(5dFTb%dAaOA"|~bz7iwvU/1Q8:0@');
define('AUTH_SALT',        '~^V7tr^vI*J2Jdb?d|Q*p7qAcm4;uNw?WC)+_Tog/Nu;;ZQW6yXpnTno/%s|%*fJ');
define('SECURE_AUTH_SALT', ')0!uvu@4A;SR_z&C??Rs*eE/CWA"HTVd4cm?&fgRU*Zf4C(/E50ezT!A69#t;Chh');
define('LOGGED_IN_SALT',   '/S)#Jg64J_Y(tEe5vzH3PG7shc7f5%|`d&~xCL;6:sZfFGzqzT(ps_A(/LC&bVM2');
define('NONCE_SALT',       '3|jkZ7j?tB:@M7ux+qOlByfa*|g#zjHAlFW1%Qbaq6Gx"MTwVLgkJoK+(hGbos!D');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_dw485s_';

/**
 * Limits total Post Revisions saved per Post/Page.
 * Change or comment this line out if you would like to increase or remove the limit.
 */
define('WP_POST_REVISIONS',  10);

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

