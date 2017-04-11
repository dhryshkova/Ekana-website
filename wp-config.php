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
 * * ABSPAT
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'ekana');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '`5G>d4iyn)MI.An+,s%8Ip/W;9T_Wj9{o<+c*P.6/H=ovj+tchy:2[4rQJ`Cgx|i');
define('SECURE_AUTH_KEY',  '$X-}D#t`7QaGPTR[X7EaTkic+4l9>eLT,KlV^~!o4Y+sSmxp*<pU0Va 4)%y9#1{');
define('LOGGED_IN_KEY',    '|;e9le*9;t><@k$fuq@lQfN0`H^DC`0SIbu7`6n;M*FsPHmv~$xFGG-f5%8bBjRi');
define('NONCE_KEY',        '4ey}ac_P $?qV6RQQWouFO2u~G(34hAzqF~a2Fh2w[NP@E(LfRuA(W_2T0SNf==V');
define('AUTH_SALT',        '_30T=B6r{B#x*Lls vOL./ea2jni+]6Lyq(L8?qL{IOI*&1~5z~%3tosgb>OY=4i');
define('SECURE_AUTH_SALT', '*KBf~~_`!)E81hqKv~1/3oYEa3C+6MrtK^[@rV+VZJXiXFO#d!si]b.UjMy|AZKf');
define('LOGGED_IN_SALT',   '_JLvxvpx.)r@iNG`s6nVD6g*wm5&W|0=eyys5xu>VWLH)3%K:%PB?G)R~[hm1ujf');
define('NONCE_SALT',       'X2DtK;tc-+$}>#:z=,LNADVU?4VR$%{&KG0S`Iu</1f^UKG[xfRVO6,B1&!g8Y6f');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
