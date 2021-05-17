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
define( 'DB_NAME', 'wp_db' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'admin' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql' );

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
define( 'AUTH_KEY',         ')[de?&4pA#8LSDg1-WFP&plL_GuPkD20,}gCnBV{eM5u=)l2L*&yTG)#@Rj:b1Q#' );
define( 'SECURE_AUTH_KEY',  'H?d)iiigpG-wR:f9.,]#2::WVGN6A4l(nKH=D]ejI-?3Td1J:jf0DUj=u!VJZ{Gn' );
define( 'LOGGED_IN_KEY',    'Rs$.@ps62Z2N*KU.T-h2!/j JL,jfX4gxU.@?6l?n~ToWi51M> pkZaaeoy7A,Uu' );
define( 'NONCE_KEY',        'k6,d9|/Yl40%PX~.[`XkQG4M%$$nGospFEnV|UM(TzbzQ.`az?PW~Gi3`V+Dy5`n' );
define( 'AUTH_SALT',        'qlkmqhTw(h5o{vS$udV3:#Pu?vpl76C?YX),Z& -ykIR80gva_ptiZ5+n4rmeKmg' );
define( 'SECURE_AUTH_SALT', '(g:Iv[4*xtv_`JC] |9LrpbVo$G02!EbhIyz0PpEP4r!^wz.a^Is#;@9:Q0 hg0m' );
define( 'LOGGED_IN_SALT',   'v@^Eun;W&n^OD=:>RauAbD5X@4w}tuZDB9pDiS8u641;#;Re/(x!xtVA<z8ek}.#' );
define( 'NONCE_SALT',       'Vp%=7jExC^}[x(MP=y0 VGc,AOe(KX~a:,<28Uh6a$ =p:BziI65?AS#5bsAi+Ra' );

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';