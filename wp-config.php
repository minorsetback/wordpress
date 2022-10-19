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
define( 'DB_NAME', 'test_wp' );

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
define( 'AUTH_KEY',         'e~PQZX-/1j]W6Ao c9GTN3&U`=z)6%LB_%Xc5aM?}iJaSd3jNQTJ3wGFE[YLy#TJ' );
define( 'SECURE_AUTH_KEY',  'D-(c8(6v%Pl5rnMQ^*1gqZ{rc@<iE!eD|w{u;BMh!ImHx=>7A+.rlQI;NG: f)xH' );
define( 'LOGGED_IN_KEY',    '-mW92mM$kXFkYlvY2;%Y3Ds|.ZsmKuXEs)j:`El#YysA3I_4aGm_A1bHSVUIX`{U' );
define( 'NONCE_KEY',        'agBiAQeldg3mV+ph%oi+BAV-2f(?FPx@r^FZ=?SzQh/~5by+29t)}cz1 *YjnjL+' );
define( 'AUTH_SALT',        '[NX]`n)F= 5cq}/E9LG]X.b]}vZy85`vd|&v`LzPt/Q@A]-r+1%nv4/:sNFEDV0E' );
define( 'SECURE_AUTH_SALT', ').Xx?E2b0&W~?d*fhX%o-GLR!Mv%UUSMw:8dac?e%0rklr%ObRqhz:S;f gWvxv$' );
define( 'LOGGED_IN_SALT',   ':Ou?:65^+ r^L,aVIau@5 p&zR0=xq1c#oRjmbc>Zn5lVKW/cDzRNyFuVrIj=oem' );
define( 'NONCE_SALT',       '(LyQD|RN*<jU$kF (nmRpK}Alp_#(N;B`,5D<qful=d;=oDMU5Ixpg|5cp9aX.K ' );

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
