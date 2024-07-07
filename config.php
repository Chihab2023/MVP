<?php
/**
 * The base configuration for
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
 * @link https:/.org/documentation/article/editing-wp-config-php/
 *
 * @package
 */
define('WP_ALLOW_REPAIR', true);
// ** Database settings - You can get this info from your web host ** //
/** The name of the database for */
define( 'DB_NAME', 'vips' );

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
 * the {@link https://api.org/secret-key/1.1/salt/.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'K2;KjxJi|RF_GnSBsB@PpBAv d%`ZUi}g?^><[^+<E^L6|8$o44K[vwxvE L.5El' );
define( 'SECURE_AUTH_KEY',  '@Ft!eq]^*p;/STJAE)AIGtmJ5Grm4mz(j/*e?#cKt;wL+gPRtwDN8L%Z(W1v&OEA' );
define( 'LOGGED_IN_KEY',    'ZBS#b4g+m0DCPd[p8JTm,OgctjM9I2K2|0,QU_2nSi6,PaB[K83t_4[-,e?BGRWN' );
define( 'NONCE_KEY',        '6hbQ/G72}0t/?Q;_hJx+C~y9T,?;l`nV<~~kA4K7uemYKNjUOc. _pv<b#X&M>k~' );
define( 'AUTH_SALT',        '}iq/>-[Y(L7`UH[]lm(%dy[gh51m2w^^Ar)try8_,tUaWgX7yAod-ocGwCY#RIvc' );
define( 'SECURE_AUTH_SALT', '%0u[d?51.Qe`^[QoR^[q}MQ/wvo4c2rNWY]zXbk_KQaOB~I[Pwy(zZQnB5$9hgDf' );
define( 'LOGGED_IN_SALT',   '9,U^Hqcc@c5W,nv#63p /<svs]GGj b>l3Yiokd-%[ Xbm5:NMbdF2^:%EIQc_xt' );
define( 'NONCE_SALT',       'Q]2.K)2dxHN@p<}XM+9JqzRP]n?O)Yad5E`4~~1{0?^[Bz.}<{h|AtiIP6RLdKP>' );

/**#@-*/

/**
 * database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https:/.org/documentation/article/debugging-in/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up vars and included files. */
require_once ABSPATH . 'wp-settings.php';
