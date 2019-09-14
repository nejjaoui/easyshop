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
define( 'FS_METHOD', 'direct' );

define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'XQPjk4K-6/Z !<HHWTv|p7yta6(ab.w^ZwueZZf8uU8lq^=(%7jT0ePcx|&/&|:s' );
define( 'SECURE_AUTH_KEY',  '~W9dJD%CYW.#w/TqvPekAnjT^uX8*Dnc,=:lXRC>5=zy_ 7Xq`P7yb(0*[FR8Ik!' );
define( 'LOGGED_IN_KEY',    '@6+wmp8t7#pLc>~djB&9qY_0KWbx2x+21/X+ICl9~xzQj-DviI j03ar?^kB*&4<' );
define( 'NONCE_KEY',        'X^BI+Pj .<9ZG-DT~00ek#$Pmml3R}c[m_9KCE/YrtL:/m_3@VHgRBRhk/.:Vamq' );
define( 'AUTH_SALT',        'wy0cHD9dzx8Utt{[i}DbPLj=KWrGqr?*OyD(mN&2@]kF3Lc#gqX=D_a5ZAeai/*H' );
define( 'SECURE_AUTH_SALT', '<~D<1|1i7gK/)@40I,=RFYy{L,=:K+g.PAwrf!e.#9#Z/qja{4FBK2a|!yg,N]*,' );
define( 'LOGGED_IN_SALT',   '*&#o2m=4gC`pRX*2#d$KbvP2u{gHvIo6=G[<^RtA4,Gt>5Z!34D]}z%tC^hTN<D9' );
define( 'NONCE_SALT',       'w T(AdbXPknWRIk+oZwk<=4nv[TaC%PK^Tv#T-W+-.A0ph]]ik$1hgLxsQee%!7B' );

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

