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
define( 'DB_NAME', 'fashionshop' );

/** Database username */
define( 'DB_USER', 'solomon' );

/** Database password */
define( 'DB_PASSWORD', 'solomon' );

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
define( 'AUTH_KEY',         'htcS*0P0WHfUX$1)!0~:dR09=]oCxY1/M-mTH]*]d~2X?y/-b}2W$pC;=KVnw|B;' );
define( 'SECURE_AUTH_KEY',  'h&,_<P%eVAoIZL,?xyiP5K|}GJR#8u#q6U/)Uhqc6 K=:S|GTo89K=r0N?P1gP6_' );
define( 'LOGGED_IN_KEY',    'V>pj)4]zsBa0,{iT18#2wD(8}u[Tmd!-,0Xt@6TX#1uLQ$.AGX})P~h6[^CZWA{H' );
define( 'NONCE_KEY',        'gSv.PpNKGqF[!tW4ds`zMR6z+;oHk4JwHtG/=TJ`qC+tL!V<>*F+FhU:.0iquS,c' );
define( 'AUTH_SALT',        'TeIDna1IE6fPOL7[=cuZgQ!/SEJEWWL~htN/~`JX53Qy1tlmn@-@5;o;r<O DS3Y' );
define( 'SECURE_AUTH_SALT', '6QIN=rVXX]OLVIqQE0CRlW`B.-|:G!yE+Tec*lIsKzc&RAG%Y1u3KB-OcsIcaM=z' );
define( 'LOGGED_IN_SALT',   't+|xmit[OU oJ:C:<G=X:Xx^q#~(TX!K##TAExA7^t:7y<EKW0+(rteO<4GT/ol>' );
define( 'NONCE_SALT',       '=^TFrcBw9 }*YRbN+>?7=608O1=`%s7qM&gh(:,,a6mwf^|kTf.vU9*{g9s#sb.v' );

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
