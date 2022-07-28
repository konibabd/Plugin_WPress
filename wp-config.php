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
define( 'DB_NAME', 'pluginwpress' );

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
define( 'AUTH_KEY',         '+v5b(DZUm==6wvM&MYS!DP}/#s8+%/JF[tsP[E>7}v79Oi<<qr+boMmoxDhk5O$2' );
define( 'SECURE_AUTH_KEY',  'ArOwr@;Npo`-?D_{ g<s@9>Ku=x^Sl{97+&L%2#R63mE$[&kEw{P`JsI)uRv:VI9' );
define( 'LOGGED_IN_KEY',    'f8w)r9<^ASMvF^1p`.HE3-]#7JB!j=6ogqzNIyGCG4):ftzNVn7:>,I:Y&wR]n-{' );
define( 'NONCE_KEY',        'Qp3*TXLg#w7F~mJbSZnho^_}@,U-#Ia98FTJ@q I$w{FR +2F0.UtHa|9Hvs>b}(' );
define( 'AUTH_SALT',        '@`-gT5S$~TAu=O!XP+*v&pw$yk#TPBj;}/7f0o@[z#0]2,vwn[_EHy;U&*SA6y*l' );
define( 'SECURE_AUTH_SALT', 'j:Y`le`Y?!YNl)cdhf8H49f6C.~Yi)iJh<y:#}[4%4=~gyEVg)[X^15W<VuR9~:u' );
define( 'LOGGED_IN_SALT',   '&rK;vZ#8qKz&&<t:@t@CQQ;T1zmo3|F,Ow`i_>=ssK_ugh^}Q3<Xk[sM{bBI8odS' );
define( 'NONCE_SALT',       '@KW>e*nNW[iRgdfJ7$y(AU!333<Y?y?Y{{uJ^oSnjKWdDjPup_>++Yx?oBL(PL*T' );

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
