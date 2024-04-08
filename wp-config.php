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
define( 'DB_NAME', 'wordpress_db' );

/** Database username */
define( 'DB_USER', 'app_user' );

/** Database password */
define( 'DB_PASSWORD', '982hhfn9i24ugh925hg9235thrg39w28014t08hij' );

/** Database hostname */
define( 'DB_HOST', 'wordpress-mysql' );

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
define( 'AUTH_KEY',         'io#BMSD 0&-^E;XAoWwQ~W<l?V?v1th*}<&&xJ[GLXG%u`%T7^L,JR %a4mD3jFZ' );
define( 'SECURE_AUTH_KEY',  'la]?u>QewWVlS 8+  4C`Dv-*ha ?*ZNZR7+pvY>tLuRe$]Nsb{?cr#{yQ%vq~XF' );
define( 'LOGGED_IN_KEY',    '~hFjS1=)aGN6JzCBpD`4QIj|tf7[(<<#|6XQ?G2*Nm}^(dI>74^W,`I]OaxQgHT2' );
define( 'NONCE_KEY',        '4j@2IOg!~GO{]NO1+r hN89l6$p$KU**T/ZW[3cujq}#U{d]nt_*#Ocr*W7ceMv^' );
define( 'AUTH_SALT',        'o@8$:T8dKo+X:>TgK+)!so)Ql0!f+KUkt)I_&u_s@I;DW5Nb(|f0Xr])@L=R+wFj' );
define( 'SECURE_AUTH_SALT', 'F$EpuljNT4#DL#<jhptfWsGzRGYX&FKJ[vp4#- &E;<y;jH*F9jUsLMkHf-}dm^Y' );
define( 'LOGGED_IN_SALT',   '/CFSH7c@d7vYs637xtu2#2zrFv2!E*?k@ns|uT[UC&Z-s*MaF>S]]-j.91[t}ADo' );
define( 'NONCE_SALT',       'gR/P+hv:lIg1|Rw4cD^GMvBr7,EVcx6djXjsE?c[{`-,U|[;hUMVI}E2(LsckamI' );

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
