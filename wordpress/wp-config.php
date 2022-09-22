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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'test' );

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
define( 'AUTH_KEY',         '.cDqP(-~CC$jX%[67Grp;(cvUs,9K{P9)r|(dE8^H4$D[}mqFYV%4>p `>!m6~4G' );
define( 'SECURE_AUTH_KEY',  'le9$d,[0wC|D&+9>3k~ R&*|Sl+tZJTZzO$Ap8} (6p!(X;w>CFZ :t|n QW@as`' );
define( 'LOGGED_IN_KEY',    '|*Z~S7(Eq:7&5Eriz%euJrSKJ_zx9DvP&^Nxp(t}pG!jF7&CzJM]bz5m a`Gs~k4' );
define( 'NONCE_KEY',        'IowGV[~@}pU1>Ik1rU#>d`zTtC}$:d&fBuhKPoORvx_nv84[lz+|I+*(a7KTmQ9R' );
define( 'AUTH_SALT',        '?2b l6Xm.F928`0czEGzE9WkWn(~u.:o)l#VBR-L=JTJ2+58NjT@qtt,+<}B4zE}' );
define( 'SECURE_AUTH_SALT', 'afv([DEZ49<v:[M.5%dUfi<Rj{@=v}GhA$>Z*-@xb%J1EDXf<I*N0jpq<73:XN<*' );
define( 'LOGGED_IN_SALT',   'a%FN_yk[8bA]8,Q94}.!P0#|D=SqS_?TUAkY<jQ<GSVHyHDHfd6|+3o] bBqCpR!' );
define( 'NONCE_SALT',       'v(Omg~0sMo9N]FJHM{oe]7YAAtcYIx:)8kuaZj2IjUGJMVL_&zLo9{G^oTeAxIi1' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
