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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'admin123' );

/** MySQL database password */
define( 'DB_PASSWORD', 'admin123' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define('FS_METHOD', 'direct');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '*</fTYb28+n2  BFqd8`K+F@S=#HHle~S|C`[ y,b 2GtAn|b{hw|4JM,A+t!E-x' );
define( 'SECURE_AUTH_KEY',  'S>p6ri+j4vd)wmoO>]>/?LPwb4A rm^hHd,uv7O5{Y0kH$Sv-Q[/bO1{~|sj/N!_' );
define( 'LOGGED_IN_KEY',    'B#z%<Nbta=sq&i-K$&n/.wCuU/whE,xtvxI ZX?*{6j#zA:%jy0+M8{j4ntz|*r?' );
define( 'NONCE_KEY',        '0I7cZm|Q. 2]I{:}sa[tf@BRm/HyN$Jt0y:h38+8~O*/Qt|U|n|JP0H8@{4fF2o|' );
define( 'AUTH_SALT',        'uk}FSadC7uv3`z7jImgWImQTP~QC|-R0m,)}`M ;|J&[-32NSB<Kp2]xj<I4n^KM' );
define( 'SECURE_AUTH_SALT', 'O`#pFw;eP2BiPZAIfZK?8]ZL9L#n]_jqsH/8F7`a]yx T~yK&@-(.01:x9Sc7}05' );
define( 'LOGGED_IN_SALT',   '=N5PvUZzA^$`+NicktmK]%jrR!ryg|F[TBLZw9lzgKmt_ohpVzlQgEaq4EhjtB*r' );
define( 'NONCE_SALT',       'FP|mmaAB~zda0NUeI%zJ)E+J}1.PLUoFopCws+vHPLD/gXur)Vl_ZZJrEK&+5#[w' );

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
