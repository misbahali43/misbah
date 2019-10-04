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
define( 'DB_NAME', 'misbah_ali' );

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
define( 'AUTH_KEY',         '#`vY$W#>[H@#u4aT0Ca4=&4mCeDP]a}}`WNhm;8sLWfjj+,eTe&sA]KQ(v%I4!.f' );
define( 'SECURE_AUTH_KEY',  '#T[Uq-qk__5H..c/HdE)TsS,,8v)`QoPLiz/]WdlKSfMhUAW U(A6P7Hb.6Z>5/S' );
define( 'LOGGED_IN_KEY',    'yg1@S*Ortx|J6J;Xv+n]W00S1];xxDm3o@XYkw6sE>eiAtHrC,Gu.+]QEP>o89(1' );
define( 'NONCE_KEY',        '%{m12P;[D`JI6RlL9BfBmWIEO<g7jEI,hD&<s<5b[AK_2LVsk@>Ao6VJ021goO,}' );
define( 'AUTH_SALT',        'L;vMK>RBA6zg%g$vYz$%j-~EZrn}lECo(ECp]mEH#(5%q2!U!a$=;9=]U?W<LN6d' );
define( 'SECURE_AUTH_SALT', 'LS]/RtUrG2RQ%#R)|+{wB5!X~_}&IvWAmHk/J1LAgCp6ws1r<A@n-B%jsZ}m<5_!' );
define( 'LOGGED_IN_SALT',   '$W)^C!f_P,6cgViX[<%0H^Ag:=}d3^quscBKL4~s^g#)6|OY~ezbsa`k]2lS?Rdk' );
define( 'NONCE_SALT',       'MW`s9C(j7XLsh^S0=)M67{is-hNh&06_<EgAs,3K6=Z/}L5Sea8=3SY^czR.}Ac3' );

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
