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
define( 'DB_NAME', 'testwordpress_db' );

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
define( 'AUTH_KEY',         '^]=3L>h8_tG~T2dy:T0MTM05gWS)(jfG;t!>s<;%*hMe#va.mcXtU/DL= 4&>6R!' );
define( 'SECURE_AUTH_KEY',  'q@5Uv}dsdks@au(_]|m(V:IZ>+&NY%6uR;uS~M%2QeRlC{oQJY&ya4<7!TN-|L=+' );
define( 'LOGGED_IN_KEY',    'yis;P!FLEnLJ6q8h>,B~.75?CQ~n){08h8C+B3`d7FTN0hE)]ab&CsL3&_jmE4gW' );
define( 'NONCE_KEY',        'PXQ!:iz.x*v05$(v^AS>/~tHCN>bjROQEOV3TdW]kqr{)d9wv24:TU>O|sz-6|q,' );
define( 'AUTH_SALT',        'HDFr6r92Nv&vyPyCy-a?vc+>aHw&6p+B#w#/g<$3`(Kl5>/sh2cUb=g>S%m.f#Ai' );
define( 'SECURE_AUTH_SALT', 'Z~p1{2<_n3 MngpyV(Du,XQ2Iv.^{*^Guj$6rfOD!)LFR[1IXA0}Lcn&VDMPS8J|' );
define( 'LOGGED_IN_SALT',   '&EIWiZExoH2^Tf&q[zs|ag#d;:eG4fHt7g]:9)pTs@^W1G)2dUwT3lvlR^?|HvJY' );
define( 'NONCE_SALT',       '?DAoRko.u-c9X&M]4=`@}>eG.=VR1F@g?BF{>jut~KRPmdn[o=&MS%ED(2HBF>>`' );

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
