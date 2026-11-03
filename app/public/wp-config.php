<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '((/elJX_/)epW*zqe@MA@t`@OXp/9]<Odx[S55IYBm e!H}ggVcwlg$~QYIQx~sK' );
define( 'SECURE_AUTH_KEY',   'P>f./1XiXV3uN]h5{afgfJ{NR)S96L#g)Xh;?qNi~$0oE{}FcdIgBUS+YGaY v[*' );
define( 'LOGGED_IN_KEY',     'Rg] 0eb<X$^z5 3lR.M`.M #d7Uqr$[1$C:y(1fB>(0T5YL*]J$SrICk(Fo_5BY>' );
define( 'NONCE_KEY',         'x<4Dvi79LLaL`Wnj/9i&`|NH d.uTiww[v$h{x.PTwd1_d#LkI/kB&i?$3P8< ]U' );
define( 'AUTH_SALT',         ';j/Z`sWPDZj3%l.>,AKn0:g`Yz3kn+:zJ)Fw22s{7X=3kocDd50hg/|EQWBT[M-N' );
define( 'SECURE_AUTH_SALT',  'lps>0?-%lf7[}>z4oEmfb?_8T8ezs2|iLC|2x9O#m8[!s~?_0@QMa)#Z7C/+}g2l' );
define( 'LOGGED_IN_SALT',    '1Q#,LF;`YEKkt-IZwY<yJ@aGJ~AxAm.sb0Nu+MXoutPCOAwQU t51pO?[(d99B~s' );
define( 'NONCE_SALT',        'KG2lllM3mA5k1PEr)Iv$ `Na6O0^b[V,F3I}S.TTT1vQN`PX@U~(874j:wmwn9_=' );
define( 'WP_CACHE_KEY_SALT', '8G|50%|b+=WrQ~DY6=$H7 K@X=-am0d?)H]pi2ebeg$uD9=!Z06W4h6{It22v88O' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
