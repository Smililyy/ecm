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
define( 'DB_NAME', 'ecm' );

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
define( 'AUTH_KEY',         'dQ1=DkSU-aC5Oz;Y^O3p|}vu^iVqWD:|NpZ[$:v&S2qSP7+WbdiQHC}r,kyqe)w:' );
define( 'SECURE_AUTH_KEY',  '*2TwFYHtg-P}q+LH=uk>.4>6ruJIM.@^L[xb-R6g`-oAz7z7yuz~>& >xJ>gd?#!' );
define( 'LOGGED_IN_KEY',    '~)bj,-UAzbkJWGIh0cHVI$%^Kb|uFzU<<DdlM3;IEO#[W)3MICu-Kv3M(A`K?2Xq' );
define( 'NONCE_KEY',        'S&)1T&3]mr:K<K?8 &=5j~/5}l_NVW1(s|no~wt=rAAstfH(Qd0Vb-g!v5Z*<B2g' );
define( 'AUTH_SALT',        '3R?A0|~zr(V>uk f/VXM~(S_Di14$HDz^khB bMyn3s kh_XeV7yItAm=1m+jO).' );
define( 'SECURE_AUTH_SALT', 'TwlU$iP68bfkR`}mB>rkDp8$ivpP7mTWAfia#9GDI-Y::nA^GAuJsKc.biAlkN~t' );
define( 'LOGGED_IN_SALT',   '_4_JO69KNa`^hnpSNf}Wcyq,aR%X6f,{<,T8DkMP&p@L]naj:B&dx:}:{`5[Ajb`' );
define( 'NONCE_SALT',       '{L<WjfI-1_!<rNIgb~!8j@I-dto/e5:eTQ `*YDL1a@QRviwsY&ZKMP,t nt=`DV' );

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
