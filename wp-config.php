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

// LOCAL 

define('DB_NAME', 'biotatv');
define('DB_USER', 'root');
define('DB_PASSWORD', 'root');
define('DB_HOST', 'localhost');


// ONLINE
/*
define('DB_NAME', 'biotatv');
define('DB_USER', 'alex_meza');
define('DB_PASSWORD', 'gunsgunS1');
define('DB_HOST', '107.180.41.45');
*/

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
define('AUTH_KEY',         'cBp#[}eYR+W%tgg(a2/cGhC`2eyTN{WQ?J5|p?!Ay8r^u[Zfa^OlyQ%K41Hsd$}7');
define('SECURE_AUTH_KEY',  '5<C}/=VxmXZ%`=Ly[G6a*Y{`uT%H+~M|c4&: w;Tc$0[;T+wX)`MP(N/qS`R-|O3');
define('LOGGED_IN_KEY',    '#QI*Mt=!SAKOX#;h8w_a7Kk< /iS!O{]]>A{V@$gDPa.~+fB-%tDB]!@6`Ipm2+}');
define('NONCE_KEY',        'w^C=Ak=#6D{yzl1R5f(e&Nw(7[Q#A4M<k?jr:[-Kecgq2o1tEXq*aEB#7^(=!sB+');
define('AUTH_SALT',        '+]1;?PPR}i%1ON~C&<{.$v;mN$VypUY,2JORr$ qrSAe~KTRA+J&S8OVh.q$S0Bj');
define('SECURE_AUTH_SALT', '3PSO,I[u_$O3!dyiv#3tuM6>b:y|eh#;$VYHC.V5X6x?9v==LLzf!` 9g:%%0oj}');
define('LOGGED_IN_SALT',   '8tHU;H_AJr:zWg@z,HB!O9}/iF])RJ|^X*w<f$N*F>*n)x/sy0 {|ez+/{h58~gR');
define('NONCE_SALT',       'VSjJM*wDmUcK$^g3El;=GlK)Rs:W{:FYNL-f0LLSz?h=k`.Q6^=Tx zB(# 6Ku/x');

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
