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
define( 'DB_NAME', 'hafiz0107db' );

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
define( 'AUTH_KEY',         'X[9yz1rgJH9-Z|PzdXE-yw;Kh NOmC8jOY.RPq?lFikys@5A5H|`6O0d%Jd5{Pno' );
define( 'SECURE_AUTH_KEY',  '&}>gz;3H*xh`RJ86]z&@8l8G.QZf2D$.qWiG_?]Oz)@LBl-gMO!:~3o2xK+GcF_E' );
define( 'LOGGED_IN_KEY',    'h^Z:2cT:8[SU>&_X})9Bpte_LD.myds^yEzFpTLnjE)~L|8TQX>[D(AF~,atJ7?u' );
define( 'NONCE_KEY',        '[8)dQVPHD@XH!s!yRh/i,2O^s:,x6vCsJ6YT?:s=yr>gmks!#}3G8&UvnfSSn2dL' );
define( 'AUTH_SALT',        'CFN0UT<:3[$| w}&v^(6Nsy[unexR9rji 0e#TF+dIxFzjJcbANKPe^n_e E8|x6' );
define( 'SECURE_AUTH_SALT', 'sDaHdo(!-`f4P]9UifRdtg,855s%$]) w]&X_94<J_>hDqUOe?ONjq`_vSUbfO*#' );
define( 'LOGGED_IN_SALT',   'I2 6T2iIdSm=KAI(0q0IH3-*O:tBX(}kt7i^tON+T%MS]XEtGdF:VCEakg:9/>%g' );
define( 'NONCE_SALT',       'Wv4p*mk=Z70MUf.YtuTB-Vc2d,7jk&o~1m]#/Jbp!m:FTljZ_K-8j[eNEu)cs$Sl' );

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
