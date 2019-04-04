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
define( 'DB_NAME', 'fishinyourear' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'Z@.R.~].:&|c$(ZYE!nI0e5-=@,!09lcbSp^7!OfN~2tvwA_kB]j_jN4Z}zp.wL-' );
define( 'SECURE_AUTH_KEY',  '^$I7*^}hQrRol83io#<{C9aLbnk),y?}q{;XB:H}?O9!;iYg_#b!zp,o,]S3Kyfu' );
define( 'LOGGED_IN_KEY',    'k@;/rW OpuUk?^9/C]n[_|NNjmsz;m%-NWs/RB(7ID==yvCk90VUq>x{<&:aI=f|' );
define( 'NONCE_KEY',        'eh/K(>nsZp$GIM%n $z#iUK>GK]AOB#q~[@Fh.5$w8fUdoM7r !9lHJ6`~jC# q>' );
define( 'AUTH_SALT',        '`]~_f0*y<Vg-WmC1OKmB#o?MKb/+H+ARTj6f/[8%Q)>]<EE/I4SZLg ;r^ngNY_;' );
define( 'SECURE_AUTH_SALT', 'eKj._W~udj<^{~Nkk;cEq_qQ;tLS=pR |aC?Vhq&38XX7Gt.2QLZsAXmu)n}0@K]' );
define( 'LOGGED_IN_SALT',   '/eZ;59V-#d?4RpS7hB|j%+3sVQdpVsCx35{1)fg*+/WSPx!42@n;d=vkF)e/kr(7' );
define( 'NONCE_SALT',       'PR%ajc6sI/tILc;2X{F;yBGXz=hN3QayfHYO5wXq1OdFN)PzH[s#y(F)+y{sX%er' );

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
