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
define('DB_NAME', 'ppnh');

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
define('AUTH_KEY',         'R8|-jf*MlXKLpP> >fZXpp_o9US4LYyuKrrmCy,lbF+ *=hFG`vy(*?@I^7]:CAu');
define('SECURE_AUTH_KEY',  'tb1?kdVLW,D+%Y7,=C5/|}g4i=~&V7RN8ZPhI*rmPeB2mm/2F$Bdk a$Ukv:zBP!');
define('LOGGED_IN_KEY',    'mrh[.d6!G@`hWjR!>+PU?M&%1z^^_w61vdaCS8~[t*]KV}E1.zv5LW1R1pYwthBZ');
define('NONCE_KEY',        'Sj~? ~F&Ah4(W26lx<Jm;IA019TR[&>{>BCE|IGCU/u$6)Ql%f*r5VM~E5y]bP!:');
define('AUTH_SALT',        'd@E.]x[14!vG2R9F*f){*[=QnY#Fj.xqq_nnAW<`M272mhe?A HtBW&Bw>mWYs%_');
define('SECURE_AUTH_SALT', '`w9ydi!d;t] AKsR1gT54K]J$$c%^(o:jBQ}8#*2/;)=r5MtR>nDHyh(!+*QI.7]');
define('LOGGED_IN_SALT',   '?~HrP;>=f_*5]_q.ISXiL th.j&a<v!kCPm<[u]t+eKuDm,Dps+% j^1lr[?lk0&');
define('NONCE_SALT',       '?Ci}kKKi3:j?lBU,zC}DWg][rb?nj;CKBOFNEJKQ@H^VHJmTnPP|j[[cPE092^6l');

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
