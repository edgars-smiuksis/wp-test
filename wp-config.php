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
define( 'DB_NAME', 'skola' );

/** MySQL database username */
define( 'DB_USER', 'zulutech' );

/** MySQL database password */
define( 'DB_PASSWORD', 'h2so4deamon' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '`Y<R(0a{WH<-7(KK_BNqQhCt?@C`D#P_A$KglI`^L]8]CSQh:DUQfijm+<= @81x' );
define( 'SECURE_AUTH_KEY',  '8G4hvi#k*UJ  +ldc,j`,DXBu#>yH?m:p:XAw8mG<}4Wbq!Ob{.<M?3jNQ$jsW)j' );
define( 'LOGGED_IN_KEY',    'F:G$v3Kw8+H42j&u}Mh=S3sk|9ysdXP^G@|):ZgwIDkRREe3-^j!m{VD/w(zorX&' );
define( 'NONCE_KEY',        'JA>P;J+|JhKl#xW)k|km@&_x79>B!|k&B:;(c|8`I~=j:C$][`Uqa[*yGa&olzU!' );
define( 'AUTH_SALT',        'ycLA]IA2;9,jtp*Ck0er0Uy]eoMLyJiUbdN3;pg;58nT*X/rOyxi%VPMBj;U: OR' );
define( 'SECURE_AUTH_SALT', 'yNDjWnVIP.-<HD9 .cpW2g0 ^hr0&+>0}mUEO4k/Q#AkEq)lQz1FQweRI#Ny0({:' );
define( 'LOGGED_IN_SALT',   '_^3jl;y=pNjX_<?aQ.88r)ZjC^Q,)zOgFejZes%4SNwo]l3FQ~LrTr0^MUFVAnCC' );
define( 'NONCE_SALT',       '!2vT<s4~(V]yMiDV}K~rwVNQV b8|lRXWfDLpc. $NUA6.P8`Qj#M?,TIXBnvP] ' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );

define('FS_METHOD','direct');
