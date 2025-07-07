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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_dance' );

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
define( 'AUTH_KEY',         '6B/*1dZLIzKkDaZ|!rmkB*kRW==H?u>V(,lI*j81^|Z^4RDN&|h:ozVYy/jOP(?R' );
define( 'SECURE_AUTH_KEY',  ':%-Tcq2VFia7gvFuoxpj75gU8@Nv(?(E7xZP5l/1!fwp4U[g]|-MVYZs{X8|HYfy' );
define( 'LOGGED_IN_KEY',    'Y$yp~=a.6{68j_1_oB1tFjpERCYgVk{wN+HdN`IsR$?x>~Jyf}`y~TDyTFPB?h>`' );
define( 'NONCE_KEY',        'tjKEhP|!5VpEOoJb1^+Cv~S)1NIy[#6`BCk&?YA{zybp+K@9e;CnF3&qq_c1oh02' );
define( 'AUTH_SALT',        'V8n)bT`L5xG&csPSh8#XTuxf0dEN%N-BP8RADdztOJi`;ci%Ele5aqN2});T~IED' );
define( 'SECURE_AUTH_SALT', '+1Q?;h|x-w0U=z_gir,_;c$LB@o,Jic~tm/SJ): p,jCvcJ5Vlf~&(z=;iZY3,IC' );
define( 'LOGGED_IN_SALT',   'L+FPN-{NWI5ck_b9M9)?I< &c}=uoj2ORf1? UOH8w/[-*e?[;E=n6m$+16BA?.*' );
define( 'NONCE_SALT',       'r4ZRBc_DE(mgMLWPP5E/yS5kzz-NR o3*&N2_q;$plKTtry/ndFWaEl##h4e8,{^' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
