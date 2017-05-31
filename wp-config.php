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
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wp_obia');

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
define('WP_HOME','http://127.0.0.1/obia');
define('WP_SITEURL','http://127.0.0.1/obia');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'M{1mU*5^Q+eT71(Z0{@MM+t{@;>/1*X>l]Z6Or63nKgbx(4^8-HwT;{2_2V6tT@T');
define('SECURE_AUTH_KEY',  '{{31Xh<v.Hr4B{^-|,8z66|4l/qTY/A<9j)lkUSDIxGqR= Zu^/(.Ch4w@c*|_=/');
define('LOGGED_IN_KEY',    '/2<h*/i+ w$YH6}~v$-5Z5b8H_$j[RwwgW7%As,=mf|UlaX!YwaDSk>B1zi0xkVE');
define('NONCE_KEY',        'azqfj=b KN!Uv4X&h<Fr+Lr[E6U8ulK`9Ct`9&r|s=w6(/mKjsF;#+4|)exYmBZJ');
define('AUTH_SALT',        '9l-bH,0mw7|EJvm?+fvN]S&bUk2~}zW7 mO016H;A<g*>/{~UB9B>!pJ$[AM=/I;');
define('SECURE_AUTH_SALT', '~;6$vzaK9D}?y+9.`Y:tV]QK}8C5 Lt5,C%T~=M!JnTy>fZpA}>JS[S/|CGy0HPc');
define('LOGGED_IN_SALT',   'tUo@5}l8Qub4{XuuT1BMDO@f31T~H~a;lhE+g9Wr<b*!:zPN-{Bd|*sy/s:v/VPG');
define('NONCE_SALT',       'Q1LaPM[&NR~(=6i>3 /)!_*j;&O1=s@t8wWfnF.)ahH,%]O1,2b7g.tT=2)^Tjbk');
define('FS_METHOD',        'direct');

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
