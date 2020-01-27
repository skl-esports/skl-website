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
define( 'DB_NAME', 'sklesports_wpdev' );

/** MySQL database username */
define( 'DB_USER', 'sklesports_wpdev' );

/** MySQL database password */
define( 'DB_PASSWORD', '072W8mO5qu' );

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
define( 'AUTH_KEY',         'US4;*e8O`nrJVE/Ct&T^yi M_gYYq[@@P+m?hwI~S<>KGPU]--b6%yzCr5/RSLyc' );
define( 'SECURE_AUTH_KEY',  'ANb?L 8aOdhwiP]/KmwS?)x6(D]q*<LoFT0JOoN,~|[g/e;aAKyP0P<B_%XqTy{!' );
define( 'LOGGED_IN_KEY',    '0za&)>;*Iil,.xa#2CFn&-Vki0(@?|`7AcsWhdceLihgz)SKjl]g~= V$sjcDKCv' );
define( 'NONCE_KEY',        'R/@6Ah<SABjN-y(p8q|f,K`<sV6+*/aU:%rt@q,V 5sw^%(lVb_|U=--{^(6~Yik' );
define( 'AUTH_SALT',        '[=}D,Py/?*9W.4S:/;`G,hqQm%Cv:lC@Cnm2?bqUb2&!!#QBZ=ld[,*RG_$~K[$}' );
define( 'SECURE_AUTH_SALT', 'Al<Wl3]c~IguqziDHuE+so0?k31oFBpIrne94z%.x`3OlGh1Q|kRF>rSr1/tou #' );
define( 'LOGGED_IN_SALT',   'cH~c^;m^UJB(.{HK,GkX??7.2&#}LJ|fV~ho3m6HR3u;i3}9.Jj4P-xpnD]1;#xH' );
define( 'NONCE_SALT',       '2A1[N%eN.RLmw1BKiyK,m(d^MixHx%Lh:m L~(FtqZiOP+fSKroxMh8;X|Yhry89' );

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
