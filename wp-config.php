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
define( 'DB_NAME', 'sardars_db' );

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
define( 'AUTH_KEY',         'lvao;ySZfYnr[.mxS`yV5XgUZK]E<;cuo9>c%mE_(y<eAyqg%AtBFjz1CN3m|2F0' );
define( 'SECURE_AUTH_KEY',  'F N,j!R~sin^ypw0n#/Gau2c_C(f;q{yR~-4p:3iH4,lJq6*i8_AHu(Zbph1yne$' );
define( 'LOGGED_IN_KEY',    '[8c2OS,1G=KDRL`mfP1+XKoHNH.o]!a#~bz@vue iP<@hF~-*nOua]C<6{24B7gd' );
define( 'NONCE_KEY',        'pv}Ygwt0a2Bmx>7I%Y?DgA<OUv8Gc#*J%e3bSiX;>?w]XYc]uB7qIZH23v;C1E;m' );
define( 'AUTH_SALT',        'F|czk)Z`tQp(.KIgVdHlBW,w0Y#1a2SUNE5nr t,bmx5,0S^g|pF-vZPs`@m@oV#' );
define( 'SECURE_AUTH_SALT', '-pe1dUGK[^}dc :1)yO$sys J3JBFp|r@@lpIUl%mV}SmR%!L3..`*Q=tl:!OE~@' );
define( 'LOGGED_IN_SALT',   '_rJ0Z9apg6mojF@5z%Epq`{2@8Bs(,AU1hUjOr>w{bcmq./ei^5npb4YuNFN|}?(' );
define( 'NONCE_SALT',       'I3>HZZ:NKgfG$heP$^Ydg9B_3%Z581v/T3IVkDrW?-eA/hOAY3VrN}Lu=#~DR2wa' );

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
