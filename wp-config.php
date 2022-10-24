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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'naqshdb' );

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
define( 'AUTH_KEY',         'v<A.^|o#hOz)~7;i/AT!E0Ti(c#P8VpKzHCW5]n})UMx5#9De]R`Vi&;}6]3E=-j' );
define( 'SECURE_AUTH_KEY',  'dg9N,XsH[wGX)=U2Im/HrPS>sdX:BB`>L!Kh/3Qv:} r/t3h1wt3cm$Q](g+`X`H' );
define( 'LOGGED_IN_KEY',    'j$[*N3`5kx;v]^&gT{3.E1H>,8m0imb?fkUr#h()ke7S_Gnpx+0&yir[Kl8+?9}A' );
define( 'NONCE_KEY',        ' eR?u6]_4O<QEibkg$:@dAFS%;Tb&b58nFAC3Y)Fly+dJ:3#eg)m2+Lmn#p8k^|c' );
define( 'AUTH_SALT',        's&dF~JXsks=gC mZd-?{j/r-xbLg<Pl7SQ#WW>jtMp-*q|[FE6hwZbEc3@`XXoiq' );
define( 'SECURE_AUTH_SALT', '-_:,9Jf^qnVqFzaqdff0w&(+cv mlXkg&Hs`PG@8WU2^e<+0qfZ(E=0qpK,%jOKk' );
define( 'LOGGED_IN_SALT',   's3Xdf050#BQ$Er5!(a^gtRJkN~B(vAd[y|2McIhTl,dVl2R8.Rkr^,8TCZsBo6m4' );
define( 'NONCE_SALT',       'i%zil8pexYX1Pt|tMDLD^#-J6mjcD~$z28J=f+f KS4Lc38I5htIWnnNdYu*O95=' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
define( 'UPLOADS', 'wp-content/uploads' );
