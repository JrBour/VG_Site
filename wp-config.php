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
define('DB_HOST', 'localhost:8889');

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
define('AUTH_KEY',         '2<o;;4yrS`o!~8[7_wZJKZpkf[i-X9f4RsI)3R^J)pl]YSN;8o=O(-x[(M`m@:)Y');
define('SECURE_AUTH_KEY',  '}0WN2c(C0ZK^T9TQ2|_cgH:ZdIA+;mS_*~REboE^5=gj+j>Ad?{u>._2G:$hdDHP');
define('LOGGED_IN_KEY',    'QES?35/EkP4^=FU_fPv`{F1L)jG]-?:g^Qh-__o>hI#U#iwG)a2;mRnY=,#%+1{>');
define('NONCE_KEY',        '/M{&)A-~i:}aI9tZT^D`pDKuqbGl6m[UU|>yUjytq cz;m/~p95I.9<7w{xloVS ');
define('AUTH_SALT',        '~FBoD3ny&@/UVdNH(0:$GQswmc+aj ;#jR@q+l_.FK_O_jiDGL?s?Up<gb*t/6C(');
define('SECURE_AUTH_SALT', 'dImj5H~.@r2y?$x{L,p,k6:M4~i{hksCWy2ZgT]QK9Y4bYyp5`HO 8: $gYm]llZ');
define('LOGGED_IN_SALT',   'Ri,m_bV+hYatp*{<1csPMO1*k<]HCV#~3dPuY.1uki]_z3=.3 DP6&WeD2{HTNFP');
define('NONCE_SALT',       '$J^*jL*UnB*^!$iIR$R{v:Lkt=,w2PjssJeaig$|4^ S5SHVutXydu~Itns4B1J:');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'VG_';

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
