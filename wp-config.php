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
define('DB_NAME', 'VG_site');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost:8888');

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
define('AUTH_KEY',         '9.;r#2<H?*Uy#yjeT.g&>M`P63!(ZK-_eF{-5d[EusEb~Qv[Ns}HF#786Qh;O!Ou');
define('SECURE_AUTH_KEY',  'b5[tI3Mw-v{%|Z{;lwZEAP{iit*z%>MvxZ.5!Wz{L$hjspzek@Oq,wluzA');
define('LOGGED_IN_KEY',    'LP-8RzPJG.F{7aF_~u!ZB:fTi73_(JH4T_V[^im6UkQ+J6<RXWLRQa0!NKQ/:H[;');
define('NONCE_KEY',        'i?YAC&8?#6X0a]?Pv6V*>v=[~?4)@sEk.F` tAo$@e[9ZK@VLId 4V^pehwKA-(_');
define('AUTH_SALT',        '7z~9sYydk=c!mtM2C<vn5z^*kHj@u=X&-)wy(-><~>@@2I8l5kF-G~JEP{pmt::t');
define('SECURE_AUTH_SALT', '@cLMUi~fY7*Li[zs]mN(HK*63[4OK+v -:Cr1F54CSh9>-(MCP4;0{l|`S((q?:}');
define('LOGGED_IN_SALT',   'SL$-G{rV#:f(kXsFE1-UPH?^cBHtgz _Je/^o#Oo!VaX2Vv;fgm!E6W69QhW[mT>');
define('NONCE_SALT',       'BHs$c%EyBv1i1oQw<JeC)}]e{2n<4_ ]E_?[Zg-l[FhV*&xk~q;%9}),O!+,,T[9');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'vg_';

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
