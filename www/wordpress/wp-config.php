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
define( 'DB_NAME', 'test' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'S(oE08pn$NWvkK9uC=p]!I8F[N}lPG!K[h-fGWZDh;Z69Npzn$l4$xPYvbC,i=pK' );
define( 'SECURE_AUTH_KEY',  's<nDwEVewJZ@#(Zt&]ipGxn CqvVjhZ$kC489~}>a-DnL]UDUo*6:tGdhf=NWBVj' );
define( 'LOGGED_IN_KEY',    '3[iL4$cAD~v<ziiYWr/i<rhYo&OL:+,}/zmZl;qg-Mz(*Mx-}F]V9| A^,vxAbCn' );
define( 'NONCE_KEY',        '0$^!OvwH<jQqnOGYM)JE);9)tbjh/vk(M3EC+#:|Tnzy3A6F$i*23Pz?I2Fd2-$#' );
define( 'AUTH_SALT',        'j<r^S22 fhyg!ojO.W~8rkkU1UCoHiFWT}2A$gysAl_FGE``4Fe%}|e1wE*^E@Mk' );
define( 'SECURE_AUTH_SALT', '_/u}CDUGf)$vB[c{M$XJ3YGe!u4Yu]z^2mF#A&%$Ldl>iP;+qs+1t:X|dHL)l)R[' );
define( 'LOGGED_IN_SALT',   'OZg7fRr&[NKKY);[u>*,S7-@80g2y:t*3nkb|:NY9~{W2f.8y]C1c~/6/>&5[vD`' );
define( 'NONCE_SALT',       '|(}lIAr~KF!^9z16)N@~I*aNS(qsA;WL]F1Dmx1{CpnMT{C8Lygm$$9.VVC?Je* ' );

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
