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
define( 'AUTH_KEY',         'kjF`+iG>Eez+3.9;.MgK-.W6Vy5ylc U->E^$jnJ{{zejsgOULW-0Y<7LQ */<Tn' );
define( 'SECURE_AUTH_KEY',  '}wTZ!j3Up&.iv$hCi29_.+u6-iqvTTn1!?]~95;Kv`;9EDf@=pAE~unHkr(HZ1#O' );
define( 'LOGGED_IN_KEY',    '(g!L<S(OD!pG|*mP@MgR6?t(OMWGJ/B7p#4+@lk)*fY=z$>t]h3K|,V=jTmKz[R;' );
define( 'NONCE_KEY',        '/b4Q<;vDUz<x.-PCyRyBmOAw?NJptpCug+}5Ge{M,7d},i_G<DFV:qlQycL+bU9:' );
define( 'AUTH_SALT',        'AT48_v:H44/3$Z4v-`[?23P#2@-TSKIiE>e>OLjWej2!H#01_^{xsjUu.D^e4j44' );
define( 'SECURE_AUTH_SALT', 'Ozj,i<q]ji1&^1ONO}#LYNMCbaQn#.jzDDF6.5=JAMJ<AcMm}V0{| G &}%T}>ba' );
define( 'LOGGED_IN_SALT',   'G))AtO/%Vnih<ib}K/xK(/>D}jaw3Z/Dilg&p:`3y UJ)kA0VI!dQCG!6((v<a<E' );
define( 'NONCE_SALT',       '/2`tJ. zx1r#?$J90yn)fH_-WUggwHxy0mRyWIgk@XYu8x?#(UkD!||S`s3DBoQN' );

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
