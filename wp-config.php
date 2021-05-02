<?php
define('WP_CACHE', true);
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
define( 'DB_NAME', 'Food' );

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
define( 'AUTH_KEY',         'pU$q_;<U`e!?>v[}MNk<lZ2uwS[i$Nzvyj`%1E)8B6[+3fr_s^4>5705,!Z k+gC' );
define( 'SECURE_AUTH_KEY',  '2NR*!5*eU8(rH9^_Z2lw5bba46#bDb?VkVK*iq-JLjc5uq!h$L)1,4]4Px6ij,?j' );
define( 'LOGGED_IN_KEY',    'o8,QoS[L1gqYMw7U|B|KG}TMU-,#CDuzvVsvv4sfNs}jC$kAwZA%N]&5nK2oqd?t' );
define( 'NONCE_KEY',        'JqNag(K),MV*fra!Cu=|LVGw8oc4|O1D<bRcqDqx|8+l=%Dh~Fads+D`:fM}.,?=' );
define( 'AUTH_SALT',        'pb;T:M,h7Kh(Sii!^|L#85eTc+}Sf_rB5_Rj9<jD%Pc)%Zy@nS]xF@}dBr<ah4Vp' );
define( 'SECURE_AUTH_SALT', 'o-YgtJ;EGjBi*#EbGIQnK9>m~gQH}=Lf}W/+{>{AcK5uz :FI&zc$12|JfGfB`JP' );
define( 'LOGGED_IN_SALT',   'rJ~t59HoSt;S]JxV:`;jNs,B4tt`1%=>1(X|2.{tuFRd$z5;-%vmM#SlrfPg7@|b' );
define( 'NONCE_SALT',       '#hgjKE3A8s+AK$3@^BoP4Me1?,zx cJusy{CX85Ex|?{+ry6-L(_uPMIQ67=ySI0' );

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
