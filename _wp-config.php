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
define('DB_USER', 'jhholen');

/** MySQL database password */
define('DB_PASSWORD', 'uq4cBJiU');

/** MySQL hostname */
define('DB_HOST', 'jhholen.mysql.domeneshop.no');

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
define('AUTH_KEY',         'JM;~MyKp[kW`J,THs:|8j[j8+ +mk-UdTAOC1N#<Ib@3ez@K|=y~dcBwcFFl7`j+');
define('SECURE_AUTH_KEY',  'Hks?oZY_K*01F$:kV}-+O?S!2Keh,VqlA+I3uH-^p$slW$ixr+edI8X/B(%A.|Dt');
define('LOGGED_IN_KEY',    'JqPx+F!?f1E~Xh}srr:]v70tU<1^0 jg2a%({SkZg?2<:@Un.&}-V`[Q+g7qH(- ');
define('NONCE_KEY',        'Jj+#wV2,!,:lzz_{Qh|_|A0-F,{o2_H~&c>-~Xc1Tl{|g!uWoiB[MKl+#5=Z*^]&');
define('AUTH_SALT',        'g0}p_E~[c+p#g$%OdUaZe.u+FMEp^@;{COqtf@0BWA@cq!., DEg8pvOmnNuy(=%');
define('SECURE_AUTH_SALT', '4?eXu1).^48Z_$>*UWwSV4*+Px,(4uOC+@DlXcn/@f)[^_08*wZa1~0/5>(52$<m');
define('LOGGED_IN_SALT',   '/g0`-$G#hr3s.+[DAc)B*)It<+NIJ!L+cy^K,p@?LmLfhm&b%Vp!gaZ^GyF>u+&Y');
define('NONCE_SALT',       'VA0o*XJ3GTIvD|(sW@m34,GkU&^A[m[|rd(@tkKk=B,MR1C2gaQ:G-hLn oQ`mg%');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'sjh_';

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
