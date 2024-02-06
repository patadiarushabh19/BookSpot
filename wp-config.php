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
define( 'DB_NAME', 'BookSpot' );

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
define( 'AUTH_KEY',         'sq)o`av{.J26rNwR;bobvVcH+.A`A14RpmS(j|/yX6`Npp=[$4@5oZ^kI/Gd+dj2' );
define( 'SECURE_AUTH_KEY',  'K`p2DtbKt<-UYHuw@LCR?>pl2^7{2%9d:ENqM.L4.>RE6^C9#`-t3xRvc+2pJ4Wb' );
define( 'LOGGED_IN_KEY',    'mVlI_f]S_t{pbC1D>%7 T+n%^]3@@7yHfgR!O#UwtDZR`hr1G5^,8f3:^vHn~}7T' );
define( 'NONCE_KEY',        'G@S!<7w,n5<+zXj<bWd{?(e2d|1q;XPSJtA|mb[pUs+[|=W,Ii7rP>6ph^fD<EN-' );
define( 'AUTH_SALT',        '%tV8TARi=tYI_3P=NUrGULDs6n(kxN_L)P1aFEDoRfW4sFr9&YN]L9*Wtq3@h1eS' );
define( 'SECURE_AUTH_SALT', 'rHy^+>3>;oqX7_4k1I5h8`S~<.wkN}b/UQUx)ZRChOM(T].DNQ,2uNn1zfJck B$' );
define( 'LOGGED_IN_SALT',   '!r-B4 nU[JbxvVz6Jbm:@::6?z[K-b@}NhR4{@IN?@b1:4qbkXL/s0K`0i._y*%n' );
define( 'NONCE_SALT',       'L=~L3QAzRz^Q0(:-jM2m$ENbq=Os6PwoW{Ots@>ey38uautg`g# 4&Xq{:W1&`v]' );

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
