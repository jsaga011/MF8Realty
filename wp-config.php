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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'mf8realty_db' );

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
define( 'AUTH_KEY',         '&?_KF|>T?sQU02#XRFa|BN[]]zlH&a8w{*_kTV9c{MJ;8x}Gne%!nv{/_n&j[Tm*' );
define( 'SECURE_AUTH_KEY',  '3W+bh`w]Eo(KcGW-]1%:) %_myjSh0YI6BdY[gO)z_a*hCV{5zg|.UJ=2FY:/IbF' );
define( 'LOGGED_IN_KEY',    '^MU.Z8W&k7rtBzD,%:cE$5.,m%sExtnc h}LE18-1G;6c$TBMgU^(4rOrg!. MTO' );
define( 'NONCE_KEY',        '`LZ(uYt8L*L_p]ydru&+`^s:>]^t)Q6,IkquQ7UBtda/9ElWba{RC0D5XK:P=a.q' );
define( 'AUTH_SALT',        'RV+&8 MgI*Ay@<?M{QNg!nQ|R7UnueDvrWkO%f<XO!?S:F!_dp9cw$Mu4_bSZ4qo' );
define( 'SECURE_AUTH_SALT', '<jQ>dI9RE$O{kGQn2^>Im_8+1E*LGt7q ?!) ] XTM-1u>?,j/T][4[I=Z3<qGfG' );
define( 'LOGGED_IN_SALT',   'X<zB/w*at{q`& 9kUDt&}-asNM{Ay!5>D[LU,hhg7Ax S@$0f=~l$GSnlUqG`vqv' );
define( 'NONCE_SALT',       '_.E&wauDo8pbo,3)0w;Y3WIxBDEG1Q7yE{wiN<3?MD;S?nnR%UWvuI/p(IqLm2%n' );

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
