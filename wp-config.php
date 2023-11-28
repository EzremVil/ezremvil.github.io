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
define( 'DB_NAME', 'ezremvil.github.io' );

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
define( 'AUTH_KEY',         'x?A#6=<23 1PlylBrM;(`rfy9mS2Vq$,o]/vv:R]V$}c>.c#;{<70cNT{Fb;m)BE' );
define( 'SECURE_AUTH_KEY',  'a(kvS$r*,y!u*~|aYJny#Hg]*@_v9(0BwcI+!rrW$w|SF)kOB+|!{Q0tm;[M6NUV' );
define( 'LOGGED_IN_KEY',    'l,&6|_>b)]t9W->O+)#^~cSEzlfb;~X@wcX^d|?<y~o%Yf0qT.T7i&#g267s/~so' );
define( 'NONCE_KEY',        '|O*@uN&LJbe6`8%E@ GRBB,d8(uP(8BE/U`H897lLG+o.[+$Rpv0[4X&qSkBW<y:' );
define( 'AUTH_SALT',        'l21BWy:RswZ{<rK:t[OAh*)*o_*S!`R>ke!xhR^g(c>Amg]hBiDVw*:NrPBY0~Sn' );
define( 'SECURE_AUTH_SALT', 'E8s]Qlh~$&R#L<;F9NT&Ob&wE6vU7{NqI6kAC!#Gw}-7}@oU>[aK@q<<#F6;w/~P' );
define( 'LOGGED_IN_SALT',   'KrFJYtG&a6xb^Y=#n,}/n2/:ok|7.4o*r18E[>WAA-;?(ZxaKJv3L}=Ak|0+gLjz' );
define( 'NONCE_SALT',       '}SjAz>H(!RoSblB2cCmywQ2ldjH}B:fCN^kZ)IHh-u!O)o,*$)+wMF6SN?~)R/9w' );

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
