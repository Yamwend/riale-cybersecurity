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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'riale' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'admin' );

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
define( 'AUTH_KEY',         'o Sl,d{a[xVPsugG,.3[DbD{Ao%bng4.b59l5dUC!`&`9,4KAgaYwaR6*.*0fb77' );
define( 'SECURE_AUTH_KEY',  'n[vNdZ$Fcx#@S`JFGONyuRCX7U_^MFWD3f42:2Hd,&**3:If`J!F<3z42WK7tV&I' );
define( 'LOGGED_IN_KEY',    '<a_`z%_q-j^aviq %qd?16OHJ#&DyQ[8#DF*wLV!%3rp3_30X{pdv&Iu>9NG0I`Z' );
define( 'NONCE_KEY',        'bo.ru<_>GAgVV9Wdj 8;%K%.dBPSJKK>nt*9fX8^1Cyzv.mHLFeZx?ORgw0v>Jt<' );
define( 'AUTH_SALT',        '8_&>s}B/3#r@$CoL]2Nounb|edMPzi?W$mAGz27Iv -3dGPbGTp3hG`btqZg$.EO' );
define( 'SECURE_AUTH_SALT', 'd1U9HKPO,<0hs^vRp!{6LW9_RZaIHoR(SrCor=W:>>tHzRbiYutwMJ,peQCuaL3?' );
define( 'LOGGED_IN_SALT',   'jv:j^rw{nKM~igu5RpsIj^ s7^>lsId)i$wgW=8p}[:(7#dvgc-rut^u5VqFZKRJ' );
define( 'NONCE_SALT',       'rZoNQsM_G_snMY1EcL2k3ufmemM8[u)S>cO54{.ylilU|zkIUC+#:cz5 /6A/>Fg' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
