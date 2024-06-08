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
define( 'DB_NAME', 'chandinait' );

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
define( 'AUTH_KEY',         'p@J~x^oDX}WR`x0- :a*>gvT-aNVXrW&5vBW!,/$$<(Ndqm22E)6Rp-aj|j5t:7 ' );
define( 'SECURE_AUTH_KEY',  '~yN.Bp;{Xq{E.T88KU@c!!Y9YwC75fFZLyM7]c-{!r?RbNIR=j-gA7:!m-(|BY#l' );
define( 'LOGGED_IN_KEY',    'jjIkY@[,gl <GmfX3F68`&Urw1j9Ad8fzW.D 7P3eAV(0({lgx.Jl~ps=jT*/;d}' );
define( 'NONCE_KEY',        'ShEKN;G&faB_8G`JBy1:Bf/p23Bq1F?C^v@L*pzao?IJ)q/y#X5kW69ZiEAd3 ;U' );
define( 'AUTH_SALT',        ' s!,Ec/C;S3?7/%g-kP.GMCvg>sk2EF_6 D=?Yx4yQ.<PZ50<bg6j.RYL%oe*I q' );
define( 'SECURE_AUTH_SALT', 'S#f6@pkBvWn#GDBsdKtT%O4vO`#f|l[DM{0^M5hcr^}gi^K1[>?ooVll{zDX4jQj' );
define( 'LOGGED_IN_SALT',   'v~`d[L V.IH1/XAw%z3_J.DQqcf=uRWt:zP0PMV[hg*Lwr>rL14LP*sY+TwyMD@}' );
define( 'NONCE_SALT',       'zhAwFB_E$g77xt5^n|apl[rn-@B+9ErKpNx@ET`^l&Hu8XhikXsM@N-E#DNTz! u' );

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
