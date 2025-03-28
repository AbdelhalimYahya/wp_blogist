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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'test' );

/** Database password */
define( 'DB_PASSWORD', '1234' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3307' );

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
define( 'AUTH_KEY',         'hKWwY9q$Jlr]0d*a3S%Za:Zq)t,31$H^Tvlchs,zQK<5q6_$ZtQ5F9:C@srJP11]' );
define( 'SECURE_AUTH_KEY',  'gm;jAZa`[B /m/LzIppQNZHGgh@7&S4y?S3+3>{eBep_P2 {1q} ug0=cqANU[T@' );
define( 'LOGGED_IN_KEY',    'Ix9@=O@d #NYLL=HcVx;~We,fFCB^([{PKmCo1L]_0,G4zI=8Ktrxn*dwgy`(Zd}' );
define( 'NONCE_KEY',        'q*r%E0wf{ee#pN^V4~7DSo&vtE{u*T`hW(O-r[[Cc4c=nSeF3w!zDbx,]y)qup8;' );
define( 'AUTH_SALT',        'k3ycS*# ?15Jr$kV~0.OYx`-iqliP0[O-;v]{cvvICf:d;M5{~. 6(%}{~pw-E//' );
define( 'SECURE_AUTH_SALT', 'JvE/^rlPs:5bYEHk7bEn/&V)8!>B8$(,db9xGr`.#R=6V0rj`N0#wp*|*g{N?+NN' );
define( 'LOGGED_IN_SALT',   'xbBK}D{!x$FAYrVQ-n-2K*uz%>2?Z25LEK ;5V>@kU6#.WU4`Am=3Io-KsO2m_LM' );
define( 'NONCE_SALT',       '{KJi;?1v~ppp|LAK<GFfEY$-xKXtxVs]$|d5!Jjj}HIY~_Vh:VS!>bvy^oL.*x;+' );

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
