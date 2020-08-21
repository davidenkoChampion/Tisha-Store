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
define( 'DB_NAME', 'tisha_store' );

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
define( 'AUTH_KEY',         '`R_W@@x;1BC/Y/s(OpC(F:{Zu?^#[n+RX.xiyUC-sJKm3*,0^ma$ll!#}vDy^*x-' );
define( 'SECURE_AUTH_KEY',  'p^[j)&On`SW2xC2!3b,9jm$--FRz#PUh!=z9ik:sC-?$6cqXZ6=hq:UEY_d+_ttA' );
define( 'LOGGED_IN_KEY',    'Vs>RH=*d_qbc:l#ES7({z60Y>tgyViI0? 3t-E>DR]q*}&w+nhwqciv1Krx*|>|q' );
define( 'NONCE_KEY',        '!8U,+J3KmI^e>lgR|pHdC{I4CtOXnhpy8B3jYbgdvj,1B,lpt,(CIA^p(vg3G!lS' );
define( 'AUTH_SALT',        '197n;>Pl6E,:@9vz]5V8FlTS9V! yy;<c}M,z Y#*Acp*TK>W@tns#@]E0(j,3QT' );
define( 'SECURE_AUTH_SALT', 'Y%<ko{&JC2y,kc6]1-~>lOOdJp9ZgG:Ww!wN1t#h;4^<z2n54,[sCiH@0n).F+y%' );
define( 'LOGGED_IN_SALT',   'g::Ey;/mSzD-1|gL77D..H_jwHnz[4:Ulk{(R>Uy<$V,T8.eOy_l~AGH~&c5Vxfq' );
define( 'NONCE_SALT',       'jm=Sl!$YTm7L&OOARXtXjL?>c5MvPt]cM7-OC3/jI],t-znLdy}Dc`5y,>_%u@m{' );

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
