<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'patrimoine_wp' );

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
define( 'AUTH_KEY',         '{VA_h,*x ty(Q-W~?de&DsLHKDXr.Q.(%o:gpo:d|p(%(8{_)qSk3S_7y3)uS9~3' );
define( 'SECURE_AUTH_KEY',  'r&c_BgT#iB?s{^##!{kY+%24R8ls!<(Q/}6YMo2^wZTP;.FB> eifvsE.iD:i)87' );
define( 'LOGGED_IN_KEY',    'Y)v{poA&zW-_hEh9c.C,N:tUTtwtZ9,QQ#T9nojqd}^_;LKEg5W`ypO,f:-K)[RN' );
define( 'NONCE_KEY',        'OiYJt+[|-dvs1m ~uf?7U1;cD#]x^?p)tb(xS4&gG7E(:dFy?Q;_^1YM~9FhV{Em' );
define( 'AUTH_SALT',        'x0lm8: sv,;~eCuU7:F(Dz(IqC),|BaD+U4^fW,r?9J~bCD|51VeFH[f;Pg!PZed' );
define( 'SECURE_AUTH_SALT', 'p J@*}QfN+Jy6yI]vl&j$V]ATR-z$(np~F_]]#K?wMvwoY6BkfbmF)<5f:F-Tg%-' );
define( 'LOGGED_IN_SALT',   ':[r?z*`F1^wdt9kTh^?rg*Jrbep_,W5udDmQ~~2.]v_g^q-+Zr#q~ RjNf.z,(!.' );
define( 'NONCE_SALT',       'sbx i$= V(6Y|]P)k76oR6r.4<Ro$:I~7;5xO/)v~YPOIO~)Y0|?2OKK,~Z}&WAo' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
