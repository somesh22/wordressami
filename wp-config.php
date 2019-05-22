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
define( 'DB_NAME', 'wordpress-db' );

/** MySQL database username */
define( 'DB_USER', 'wordpress-user' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
//define( 'AUTH_KEY',         'put your unique phrase here' );
//define( 'SECURE_AUTH_KEY',  'put your unique phrase here' );
//define( 'LOGGED_IN_KEY',    'put your unique phrase here' );
//define( 'NONCE_KEY',        'put your unique phrase here' );
//define( 'AUTH_SALT',        'put your unique phrase here' );
//define( 'SECURE_AUTH_SALT', 'put your unique phrase here' );
//define( 'LOGGED_IN_SALT',   'put your unique phrase here' );
//define( 'NONCE_SALT',       'put your unique phrase here' );


define('AUTH_KEY',         ':32?1DvD:Zq._=%iW-8zCTVeSm,|/~.<%I/gtC]e1)^r3b`+OPMz|]Wu^5|-P1bN');
define('SECURE_AUTH_KEY',  'BiiLVD.gLuPi!w`i9Z3!%9`}-s|op2g|C9PI6YS,|@8|hS# c-xFhbr y>ks]SVj');
define('LOGGED_IN_KEY',    'LF);f}_b6D4-!`gUU:)UV!yv1O+lg]K0= ?4?5u!P/1X~V8z$<mA~hnw53}tYTnD');
define('NONCE_KEY',        'C+b(i>tz$6i%{N)|Ei+Ly|G*wX0%@.:5j{?!-?[Hj{ni:D=g`x_q4G2hQ%,,mOn-');
define('AUTH_SALT',        'G)G2q}qL@&Y~r9uljvuzMu6RSRY2/{#aXskVEN=vt:Y7xKP8#6x:KY(U|{M#m[*h');
define('SECURE_AUTH_SALT', 'Zz3g]VA+&z?Ui! @4<j#|h,$kEqx<I)--$}XA +1#dy.&M&t3%~>gSlV3/_<,>qQ');
define('LOGGED_IN_SALT',   'Qi8tvkD]=PfxMXTBzOj!OF-8Ej&:IoZM,MBzec%nN;(&1m?2w;9YhDe|*CB 5_cj');
define('NONCE_SALT',       'M_L}7]-v64:5i7Zz<lO(*@i>rTEp-DAgS>VZ,41eN[WQJZ|#eb|Lg<Dkog<$.eh%');
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
