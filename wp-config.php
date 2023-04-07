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
define( 'DB_NAME', 'admin' );

/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', '123456' );

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
define( 'AUTH_KEY',         'FQ<E8B*m-4;o-c]^Mx>aR!n`bu[l ~bh$R51%mA$D$lDPQlO?ok&/5N//kNyhT6+' );
define( 'SECURE_AUTH_KEY',  '{.R4{@;4WJ|}:Aj_!k+K8F7`C*7W, -k*H>SJIp:`{:-,(fjd>0c744mHb./AG+l' );
define( 'LOGGED_IN_KEY',    'WQmjFs*:-^`Rc6chOj_>*[%1uNBiT!AG:8=vG?/6I-7}od4kekE_w8NBeboDD(i ' );
define( 'NONCE_KEY',        'B%eKWVhU5_n0=lF^v**xPd{5Na$4T#P>E >!O{j8mlE) XBY,)Xe#W=7=?`LHZ.$' );
define( 'AUTH_SALT',        '*en%kTu8,Z>`n6nsv#DHoa,;1M`*u:?`= +S+<CU2p+8Rre0GE9KtjyOlSCpUB17' );
define( 'SECURE_AUTH_SALT', ':9(o+[3,k~z3nzoUyU^MxCg58(d^[|pa6XB!lFd4Xdf7<U{Q#k>!Dkf%IurxwzSY' );
define( 'LOGGED_IN_SALT',   'a[r)[-fbjtfjiBtb>E*oK63;<UMY.u=wc,)>1^fd.P<:?1RhCq>4t,S0^3?X;4HS' );
define( 'NONCE_SALT',       'Zx%<qV$q|5KVK)t#6ITh71Fn~ bEo,5`7Q@(|)-M2Ap(=`B8[|yQOjR5i~`61m1!' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_admin';

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

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
