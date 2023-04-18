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
define( 'DB_NAME', 'ori_db' );

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
define( 'AUTH_KEY',         '[#[cb,1-^S|c0pgI J706(Ge_%TjB-$tV=0.B$3T6%.1Y)~h 32P7}bAVK=W8QXt' );
define( 'SECURE_AUTH_KEY',  '-M=:A(oYC)gx^uSF)-`Y=T{+HJQ4$i~aa8+{RB >gVGooFYl#$l*nU^E:WN#lJuE' );
define( 'LOGGED_IN_KEY',    'qvyJ& [y8c7qJlo+/A0{;H<GznQ3Gy{eqqoFUw 1ep&J:9PqRnr(+hgd{J`&bXTq' );
define( 'NONCE_KEY',        'f3q+rX0%%QJ-*TlBwoA{G7PS?JGS;fzmg<hTNnE/_!g2o$`1BI8@12k#3,=xohK4' );
define( 'AUTH_SALT',        '8`.7i1.UV:~aD*@^z>r_Q*<e{K/+P?=uH>j-jI-l#[`tB.};_]*xSL*b9r^#[;_>' );
define( 'SECURE_AUTH_SALT', 'MkoC48h95MH`TrxU5nWEzT0h:vi*<G.8KBK9}p`z=6Mcd+v`@N8rpvA@  ,:ZKry' );
define( 'LOGGED_IN_SALT',   '&*4c5L%n|N~Xxdx=gK3d>N8)jCn$DE;))Gi(,I~vA63wm^~xT<L+>NIc5R?{3+<6' );
define( 'NONCE_SALT',       'P*g](L)L=aQ`8^*NELC&<F3N)dP}j4tx7$q*)B%rnoIA9huo;m!F}W.}uCl5b1H5' );

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
