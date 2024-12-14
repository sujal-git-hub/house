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
define( 'DB_NAME', 'home_db' );

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
define( 'AUTH_KEY',         ' =!r5IL@BH~*6cZ<3hV6.R%* A -koS~z-#_-|vn,qKzZ##j4cpvvJC_;F(CG*R3' );
define( 'SECURE_AUTH_KEY',  '*seF)-j/Ou( 3I{u m{[-nW0$y/x?N83Q yhN5%N/#sF]B,<Eh|SC_RE}i:,gH.q' );
define( 'LOGGED_IN_KEY',    'qp>FR<jfDb3@uEb~fbUpaxGQ>c*L3)A+B)9$~Ya;Gvuqn|:y##P(h0K`?h_F%U]6' );
define( 'NONCE_KEY',        'q:kRj$h4JmYGam4Y?WS|M#g7>ttG<{P$zt(X(EO:I7#zK L+*3+`^(^;gGD3wqs@' );
define( 'AUTH_SALT',        'V7RG3&O+/pj/1UQ^dMXd$bd2g}P,s]n55L%:))Yipk~Cx~f=Wm6MB,kk]`d|p#BN' );
define( 'SECURE_AUTH_SALT', 'Dw^$N_R6wU~lIM.UI|3YADB b#i=p,,3&&|eBA12/&(R#*WH~9AmcU55JRSE`4n:' );
define( 'LOGGED_IN_SALT',   '38{kd7AF6!E,d5Z/zX#vSSB{p]rz5ytru*4<q;Nne7JG{iV< LZh%M(IlUr.wQHl' );
define( 'NONCE_SALT',       'bOe-ue^%NvBgbWP4V818pPN7|Z?PQ*n@fPsOut3xw[yQa_6~M;Fa]?/UJHW;Ge%#' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
