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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ek' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         't,9[Kv8vEu8Cb$g>WV8>M+TT{lKl4$<SUyE!6B E(}I^(%Lapw4gy:>^$d$Oi4Xx' );
define( 'SECURE_AUTH_KEY',  '=8I?Tq$pjy@5`<R%-^EvfF9tN6M{f)? Z^`!Oh_7Rd6Qn,`ab4*_<a:=6;QznulX' );
define( 'LOGGED_IN_KEY',    'W?R985VW[)j%Y=^C`Fb1mMxJ?X)hCQ:3o54Ik%FT>oWq#lJ1w+X?J8my6eiXv_|z' );
define( 'NONCE_KEY',        'ABU.2~jJ}9Vom,?(jF~b?; W${S3==eRXRC)iDX4we?KtaK6=A`>PFUnXsc=.6l5' );
define( 'AUTH_SALT',        '{}yQ<[[$_M1i:sR?qAF}dme{cUn&bQ<enk|+&F`ez@ljROKx[HF/k0U9I*CkD40!' );
define( 'SECURE_AUTH_SALT', '1KJY$W:#4%)d%@|NMBtIJB<Ec:s/@%lo4KVp>;+ZPM-h;>~I#<coSgY3DmcpK^-D' );
define( 'LOGGED_IN_SALT',   '-Im:BXMo&EHW+Yj!E#[-f8QaATVz=[Q+<^O:TRJpdQlYrzLnVDX7v!C`tj/K$F:,' );
define( 'NONCE_SALT',       'K1LuwZ<3:5WT^=e~=n@D|V:l#jOL[%5Rik}d;O 0x64IWgpv>aJbt_7KCk4-:iFw' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
