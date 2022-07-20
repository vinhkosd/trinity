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
define( 'DB_NAME', 'trinity' );

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
define( 'AUTH_KEY',         'K7>0yNOPd]/xsnSF<s9>anU9dbs$&<x]G%;/yAmIOD.K2BwkDFi?Vmt<ul3q?S~X' );
define( 'SECURE_AUTH_KEY',  '2+y9o`L%jqZ^bwxRd<^=f4&3>PuNo[7?I%{1LQ?Q7E8Mj`.w*lJp`&!w:wj,$,E*' );
define( 'LOGGED_IN_KEY',    '_pzN=V;??#(][`jEC9xJZ}$1-THoSp,U0e86N$6k<6cy8ntgc:WA`2X1),f/N7rl' );
define( 'NONCE_KEY',        'D+|..P(*>t[g<0f6V;zu4$6)5,ni6g#@]OwygZ&MRX^f;6%V{V rU,wLgQ)i`;Hm' );
define( 'AUTH_SALT',        '4)~}q,/:ZnF@l3~EeWYFONhO]Z=g@Ws5 gP:rEzFMe<A-.ylQJs<8@w3Hd})A*X;' );
define( 'SECURE_AUTH_SALT', '#,|]8Ms@9xQvh6%k4hADD#9$-M^h<.-3!g$9!=9KAbh<b@F$d0$1FdDhTeqtOH3H' );
define( 'LOGGED_IN_SALT',   '=6pL}mtJM>vB(}cG/`N)}m{j{]jEyD#cID`5uOh!],}Iv){nS;@2hz3!or0e4wKA' );
define( 'NONCE_SALT',       '2[2#_k#Y{1 3oMPBvJMoIPz7+E}W0t7+&[KEOCBY`q2B~9cksXu,S_HX{&Iw@{x5' );

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
