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
define( 'DB_NAME', 'db_nikshopper' );

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
define( 'AUTH_KEY',         'uC|wj)Y.5I+k-g9?E72M]z$w7;f:GEt?*J ;V@)61FUPNV9</l.f!m00h]9.iq/E' );
define( 'SECURE_AUTH_KEY',  '!s!*OaROZY]>1CYQRH-+eiRUWUs n:K.AZZT?:FSuDgtxsY!CaC+?TC_Y]+$J:sE' );
define( 'LOGGED_IN_KEY',    '8 Uyyc@5^w<K%5uQk1mU=eDt2y6eeo;4F,r^~GJ;?K(R|-:ik.x`Zr,!Y$04W~Px' );
define( 'NONCE_KEY',        'OfAbdD.JI ;iZw@E{${P:RS1D06AD9e+H]3a.]e4.^feHAjsqF.7|O$|tvK@If)#' );
define( 'AUTH_SALT',        'Sb615V&sj~Nz`OqnJ^%7~`-!0w70mesh~&-!p$8H1d$=@ST8{I*V^Zjy8iX8CY;}' );
define( 'SECURE_AUTH_SALT', '[%ASq4byfPmaixpCH@OHOEQqr1,.80%{ME_oL[J6G#,C.7`NG;%`4-hE3.L{}I,Y' );
define( 'LOGGED_IN_SALT',   'iA~s,-dL/rf]]ZRrjvxv<p+hslM+q^H)@_Xuzbfs@?sZtu`N%-(qb,L;2Sd1QJpN' );
define( 'NONCE_SALT',       ')uY*]jlT,ztpM4`4?3 &LvOcAC]JM&$js8R(S$uO/rJ=vttu`tqmM_l yKyTnTRN' );

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
