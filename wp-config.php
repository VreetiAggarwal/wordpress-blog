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
define( 'DB_NAME', 'blog' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'dRD&4sk%p!eDE4zHF?j9W[Xaxo- u|TffHC+|%f/4Qj.}^fb8:)p-,@f}qKt,e~&' );
define( 'SECURE_AUTH_KEY',  'i!c*Au!9mx=:UccosUSWtL$$1^Tt3:(6[;d<nZ6n/$Do9/an87+fna@mKa*~<=II' );
define( 'LOGGED_IN_KEY',    'k4{N&ATo(#euYBJK0G7lC66rHK;xEx.D$o2ny-B7$,ggVMq[^3aoIP+ntNs:Fr2@' );
define( 'NONCE_KEY',        '%e~!mQt@Qg|Md$fbe- *hh 4kyiQQE2jQDzFj(z}Rj$m[pZnG#l}!8[@+-giVi>Q' );
define( 'AUTH_SALT',        '<SN&<|LwW,]bc0[4V$|b.(xELZ_<*|d5*fE4EOdATiIUs6,KXW92]vJoy|NAehn]' );
define( 'SECURE_AUTH_SALT', 'aADHFZkW;f^F#HfHATGy>y0=`CCm!&D#`f3_t@e}+sd}IZfyh*skNT2,Qa-rr>H;' );
define( 'LOGGED_IN_SALT',   ' 4-@bVq.i%ut74kJR7KH<at}X%a|ec-#S$xFg_BbfR.o)!^w8M7z8TX,s%-{f*u^' );
define( 'NONCE_SALT',       '|*1| ,mcXB0d,_Xg&:zY#E0Ui=N8[z!*tGHQs zOTM`*s3@?$GcFo)%oB=Nd~Ps]' );

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
