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
define('DB_NAME', 'jhholen');

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
define('AUTH_KEY',         '$:5^{1=AB&dO+,X&D`ZJm8--keV]1l0{4$L|>oAZA09JPQQ]`LT=+sO4uUhoOBtN');
define('SECURE_AUTH_KEY',  '?~1R`.[`2J.yXMu{>pH$zq--u ,9tjq/x#~V80lXYWIA4J~L):LV?Ucf,GUcY@i|');
define('LOGGED_IN_KEY',    '6k5f}]/uC.+NX?6/gtlZW6wYI=45%C4RhoU(~(j0L}Z`+CMZ}Y*3HhJcmJU}sx78');
define('NONCE_KEY',        'D:/rpiw@wT[02SfJB?bm$m5ntO+vv->X`#%R]ns-w^])`7bwdq6|h|CM@Je,<. H');
define('AUTH_SALT',        'Byx<&uToJIy+B8I!odLGf)r|V)P5`GguxQ#7^aI-,+rK,wbILr1r/HYmU,j)pmx>');
define('SECURE_AUTH_SALT', 'p^c-G#rLL;6K.,Hl<{/8$dq|M|_-TOu]y$uXTSh{o&]5P{_nTRTxt IRcxT^x0J>');
define('LOGGED_IN_SALT',   'w=&@k``S-M6eopf!1S>8p0}K#IToiEx+7?r-#f69/_$ICEYa p@76 P{vjtARUUG');
define('NONCE_SALT',       'OT3XqC1mKG3>[IJ!J=}~+JP?&<oThSp(eY30D%98Vq`Z*k<5%nm_-G!2DUL2o+p:');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'sjb_';

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
