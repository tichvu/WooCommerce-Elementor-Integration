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
define( 'DB_NAME', 'WooCommerce-Elementor-Integration' );

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
define( 'AUTH_KEY',         'Q{R?s|8Kpvc>S4d7:aBbBdM7.z&FRLTia4wm7}@ |r4q{YFQvdg E<8nWXpj]idg' );
define( 'SECURE_AUTH_KEY',  'PJc~d<Dpp@:Xw8.IsVkeG2LQ;47ZO@6>^D%-p!XOF>{xp_#mRi?yM>Kcm%/$}1Ti' );
define( 'LOGGED_IN_KEY',    '9tecRF>Pf/|#e#l3Gy&433[hd)HZ4<)E:yc/)?YSaGK QJ]c&#O6ne#0%L]I%hnv' );
define( 'NONCE_KEY',        'jVb78=pd?GG=lRlbsY/L|u:|Un]Y~~YGi.nafkHL9MkRTXXrYfL4V}&=112~kN)m' );
define( 'AUTH_SALT',        '+Mx`2DHV)>q^ R6!6W>1/%AAWJ.ur(.);^WS9x,(_9|hw`Sn/(UfB%Q6%VSv*Mtx' );
define( 'SECURE_AUTH_SALT', 'e`#^_9w]@qeZj /Uvw>#*Pgz/adrG:%K>8[,K+fv1NtUM7Tf/*tQNFVU6<VSr9Dh' );
define( 'LOGGED_IN_SALT',   'D^y89,vV5yP*#I_Xzv:F0792tiWyfD29*1BF7iFbg~p&BQf|<[q5[[1&#=.u&Ulk' );
define( 'NONCE_SALT',       '.pU8@pP,8U27Z#haVPO*1zd|2KwE7:R[8VZ$nHplb6s2}7w+?+j.&)NCF&5fRF6p' );

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
