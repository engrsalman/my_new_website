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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'mywordpress' );

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
define( 'AUTH_KEY',         'W3hf%anTBOMJy2zHy?_;DlkYDww1/~2_!dF{X-#r1&o2_hp2=c>^@Q9)@]GL?CB_' );
define( 'SECURE_AUTH_KEY',  '%_|5{}-V+t}IRV&>t7R>PVAx]x1s](21+Q[_+RNS+#Zj{f Z#.7L,3YtWY%.FZ3=' );
define( 'LOGGED_IN_KEY',    '[P(1@|ZgN%_;Q u>rslD[y#*yd<o=br0XkdqKD+E34!=zghj$KIxkUX|J+e)_|&~' );
define( 'NONCE_KEY',        '>p$.-G~vMkJEVafUeTbxX_{3|qs18/4`Mb[EMaldRVe-s5&Zf>hnN!%-`aWC_!nN' );
define( 'AUTH_SALT',        'JVr+$<}E4fp}K+LqI6C[ O`.@S}-g0mwKadsq-.0z4^`FYW;|SnMNlYA}nWi9?;>' );
define( 'SECURE_AUTH_SALT', 'X?ub6s+c^|=0Y_|26CR/t[%2;TX~on%!*k ]wz:Pl4IH50d[D2? Mf-(v?G9dsA0' );
define( 'LOGGED_IN_SALT',   'K!Yc4x[Q6<w?[P7lo5KV8${M?U~d<tXY{5qeWrmm&R#}0;LZQOqK.09P|FN]`Y9A' );
define( 'NONCE_SALT',       '+6`{8U$DAY=4>+ZYVQ$sc)LmR-XDZP/>6thU$oC+fn#A+uX!>gp2<B==C?e_vNz|' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

define( 'MULTISITE', true );
define( 'SUBDOMAIN_INSTALL', false );
define( 'DOMAIN_CURRENT_SITE', 'localhost' );
define( 'PATH_CURRENT_SITE', '/mywordpress/' );
define( 'SITE_ID_CURRENT_SITE', 1 );
define( 'BLOG_ID_CURRENT_SITE', 1 );

define('WP_ALLOW_MULTISITE', true);

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';


# protecting the editing of plugin themes etc in dashboard
define('DISALLOW_FILE_EDIT', true);
