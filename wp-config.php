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
define( 'DB_NAME', 'arkenea_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '_VHW5(sZWh::cYHRa;=9$!7s8!E^!wE$G)p3.BW65Tn8oQ~gY7B[9?6&6L.AoSD|' );
define( 'SECURE_AUTH_KEY',  '*IQQ7ljK]grSTU)JLeN,s K-B0p7G3un(VKPKfR~*X}`v>>[lLA;~;ScvF)8V[`|' );
define( 'LOGGED_IN_KEY',    '!sjk 5{cImm9J=+WluGHEO9|9T*&q&2>d:cGXPy5ox%Ac8]dwKwF^1Iot8WkN?oQ' );
define( 'NONCE_KEY',        'GTWMg(&Le1lrs8Vyo9UNH0.%=/FMjc?x fV~_1%vSBtn_qyq NBg,C51Q#Ux{O,h' );
define( 'AUTH_SALT',        'gJW&J.Q%<4m4b(SL Ab.@Zs_s6r|]nnF^:bou|9o.u:C@g6&plrA{>-g?dN~4.GF' );
define( 'SECURE_AUTH_SALT', '?FbULuEenufDbYGan}3@WXOqq$)>z,168}2p$W&!:]j/]M9IzW9]W1DYzBEBL`oA' );
define( 'LOGGED_IN_SALT',   '^7M`#`YDP.sQ7K*.KP_1h[_M,NLfBTRqexP3Lq8-c6C_)&*K-dZY>4gc(#@7P/g@' );
define( 'NONCE_SALT',       't%L!?sg!t(wPz) Cfw=pCsSdcMHpLPSwo}Q<I%`}^n)iJVjWzX7fd+X:}y,SIoX1' );

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
