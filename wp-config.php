<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordPressBeta' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'za3.Jvo|<B}=xbZJfo3C[`L_v6(|P)cR=I,@^_<IO^Lw+wi$0RL56LPT{D*^Dj49' );
define( 'SECURE_AUTH_KEY',  'r4i-1G|].{o;G>jH5t^n>BfiO}26>~;r^0%DV[jM2ao{ngB)Yc=U|2=?#yWxz_s)' );
define( 'LOGGED_IN_KEY',    'xZjN(Q(=v{@^|, oCMq/jy$+2H:um`*}O=09+ZuJYl[6s1K:/$UUR`-]409wxrxv' );
define( 'NONCE_KEY',        'U6sk$Q<h=AC=jOQnE/Zl#CB$i<?%K/Rz-CRG&cYuOCzZYdRM[Ndl0c0FE/Jn/~G~' );
define( 'AUTH_SALT',        '%.*>@..W]jvBmW@,]Ds%Di$B?UA,mMKx,GJpj2!g=_+tH|ks!QA+H@!|[Q_Z8-<v' );
define( 'SECURE_AUTH_SALT', '^TK4B,(qz?7$6^).f_W=GR|[lV?YKp^6;Y4zD:QJ&_xf6#5gUNIe.EIS.`9$7daJ' );
define( 'LOGGED_IN_SALT',   '3_x!S(,E.7(j6U0x+-+*ip(OE~$VT5aoV{F7YjNDN~+{Z_nan?ov<ZS74A1rGSYo' );
define( 'NONCE_SALT',       '| <Z_>K!g[2%Mb{tQCs8GKv&T_??[BbQN7ak4Tp@&[ww~N*Zsap?M`H?ugbER<mX' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * visit the documentation.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
