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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'O4-YI@-3dTl9*nu@K_G9<835IdIWO_O_47|)qypA*(fb[T3OL!}Ew~[S+1?Lv|_]' );
define( 'SECURE_AUTH_KEY',  'oX-`cjbT/}ibtV*dp/K;wl3BU4:%FG5z`>1^+lTHA/>4*p:P/k5KIe]`ai#y4nK<' );
define( 'LOGGED_IN_KEY',    'I[|Kvv{s|u}eSUB@O7if]wQ9lN-C)[s&9:<F|g_?rB;mk/;{;d&~uI0!kr37?(&b' );
define( 'NONCE_KEY',        '03s[fKYeFx$<JeDA?k@v3YWI<QI^Bx,2JZ(p{}C?Cl96iUakP9z2t*^~UDN<4Zdd' );
define( 'AUTH_SALT',        '5BzE4;&}/UyS%4&JNBz2NCI|~2{W1>j$bQ)>~OP.0_|Dc3>dF?Y(Ah*Ku6k^m6y|' );
define( 'SECURE_AUTH_SALT', '9,arpk:Vho_iS@Uypst+^eZH%FQzgC_~Ot$Wu[>}E2ZFa3GX!Xo`+6WFMkBMfhVH' );
define( 'LOGGED_IN_SALT',   'mKLctH,~dz!>W}Z{Lcdj8UVmV4>D4bK{ rs_ >-_G]7b?=*Ya|@>{E<@?F2WQ5w6' );
define( 'NONCE_SALT',       '.tqhcuB4%0NkRpE!bNvox}eSuc2cZJSNd68XH?!ajzKPW_]>$fbv0Yy-zE+j|BqZ' );

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
