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
/** The name of the database for local WordPress */
define( 'DB_NAME', 'visa' );
define( 'DB_USER', 'root' );
define( 'DB_PASSWORD', '' );


/** The name of the database for live website WordPress */
// define( 'DB_NAME', 'visa' );
// define( 'DB_USER', 'visa' );
// define( 'DB_PASSWORD', 'I#@@utOTj' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define( 'AUTOMATIC_UPDATER_DISABLED', true );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'J#_/8[1JU.ugtqF?o+qfJ R$0zJ|LxUSw*NE`-lqQu8>(bey@v[{#TC2WYjY[k) ' );
define( 'SECURE_AUTH_KEY',  '/lh/jGtR8aO]00@-HZ@tMvdqJVwYZ [F}B f_@|;4sZP`h*fUm_uDq?Oneh{}8Na' );
define( 'LOGGED_IN_KEY',    'OW_I0GH_}fo!/jxj^0)*J9j04# H|7?s69DM+IKSSk<qQ;P6AY!i1qKhvuOZ6 W,' );
define( 'NONCE_KEY',        'g &^$QlYTj[8LlD.+Cfpm!SX?k~iTRa0s{WUVqSF;Tdpt4mj*W%JcF*+K)r<%cbn' );
define( 'AUTH_SALT',        '~x!L^nYKC_xZqG:GEW?Z1zSD5i!hx#9-mG(&<->aK4l`>_-<qLx-bgIXRZ90~@)O' );
define( 'SECURE_AUTH_SALT', 'vL|1=!N2UU0MLY7,p(Fe]*K:c:Iz.#{+#;s*yWrNrqmwz:*i} S0kv3`=qX><pt(' );
define( 'LOGGED_IN_SALT',   'G&])+|F#VSWMs37COkFOQrOfn5[C07guXATD~W[f Yg<OQ#aU&@R134FQa_%KR5:' );
define( 'NONCE_SALT',       '_6=X,i.|ZJ^CfI?ZVcq=V.3s$Gz6`%EUPTvM7`PRmkH@d-HI|iW%~U5&toR;{lj*' );

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
