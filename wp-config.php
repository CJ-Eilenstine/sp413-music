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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          ';1[~g(E{K$$<HPTo/Yj-p+M=k7E yxj+JeiTQc~rdg<aKR4Ov2-Ul{o`KMX;vozM' );
define( 'SECURE_AUTH_KEY',   'cXVY1WQ#)]=* a.T:xjvoOLSPDb}a4U 0>+l^)FQG+*~qJQijjTto4L-tas2>+q6' );
define( 'LOGGED_IN_KEY',     'O`ZF0@;^ZQbxsmbn5vb`f>v@|kU4b6).p`:`dM+oIeoS?qjF9y.ih)TU7}f<FLBe' );
define( 'NONCE_KEY',         'uws*<}vs/:v)Lsy.X[WX?G9E5<e87W7&gag9^Kn4$O|40-cE0LkJ9O2yOFjM8)N%' );
define( 'AUTH_SALT',         'y{+J$w:~:I2;>sX$FM#UZ|%qTkb*N!N:(Io!@s*y!E#ZYGDx2 $ `4<insyo;{6y' );
define( 'SECURE_AUTH_SALT',  '`e{emoQa1eQF3>YV^<7YY^2}sgrNYoRi~iNp{WP5GVQO1 gO:}NcXxh+nQg8Ga0@' );
define( 'LOGGED_IN_SALT',    'l`z{CU~#`cN<~@t#u@PKCKF0K.{CR8z$hZSNE<xjAhX+0RnIq;R[eB@sor~Hs[=f' );
define( 'NONCE_SALT',        'tK/9LVoB~a/4W+D*r+O=1lYMG^0DAo/+Ew)JY1{i<mN5Qk4Vx|K7QO%X3*z2@[M1' );
define( 'WP_CACHE_KEY_SALT', '.xO+Z,_G*Nv3sUm,aN]QJBgM$,aFYtpdh66}(2w_ADtfz*(Sw(]-m`(tq%s@?c/+' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
