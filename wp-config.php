<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'woocommerce' );

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
define( 'AUTH_KEY',         '#C$52u,Jyd7bI>zB6_FG&^s@:JCXS#aj3zw6+cgg*f:]UBE~4!oFjyN~U`tV!,:K' );
define( 'SECURE_AUTH_KEY',  '[@^q`2!XOR@^Bv5j07@d4RO<SI$R5G`:l&NT/X!Xfo9mQv}sD{7G Tqo$y_kp:OY' );
define( 'LOGGED_IN_KEY',    'X*Dxs,.QARd-!&wfYQIdU}~!&(,`(JI%S>4^N$tZMPK%3@t`{|Pb=OM?J;= 7<Vl' );
define( 'NONCE_KEY',        '~{5V3uf#:0v]FRI;xL44{wO_E(zSX-$@M#{k#R>UKTKs>31-rb^@NaOKbnU ;d-d' );
define( 'AUTH_SALT',        '|WT6KnXss2f1%,>~+>bO]4AD%biVr-C#XvB,O?_iJLK2Jk-I42*WZcZHrJD|u-ph' );
define( 'SECURE_AUTH_SALT', '+B*^T4ill4~(,z]WlU<js[M$%ZSX l4V|LdBMXC?;25X6EXJ 6a,c4;Yt0.l5(Gw' );
define( 'LOGGED_IN_SALT',   'm/V pEfq46G5G/yZRBC0bemUm7Jl&/Proxv<p~Zofs;57RpULDEsLv0-M71WeeYI' );
define( 'NONCE_SALT',       'cr3#[3@4&@z*O@{Pv?J%1+:xO{#U4..i{Mh.lO>c$fb~T#G#I.7hX_tO)#I2Q7;W' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
