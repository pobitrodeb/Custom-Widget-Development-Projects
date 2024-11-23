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
define( 'DB_NAME', 'wpcustom-widget-development-project' );

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
define( 'AUTH_KEY',         ' $MMp3!1!SG;a@CdO{ozNt&m[7a6`4Kyxm)l*{f]F!={I%A[m}qV60^4(6dQyE6o' );
define( 'SECURE_AUTH_KEY',  'ku!nQTF%lFV|PaRA&%QeLIzoxjX JQK@0)^mZ@k^`nvKtFo%c@iCHe^oB{@k 42n' );
define( 'LOGGED_IN_KEY',    '5]`5Oq7tOXr1xoAUFF!V,n)j=LV01tbbcth&SPJjs|c)Nm@J/NvxSR[UPL!1Qwrl' );
define( 'NONCE_KEY',        '$ZFc{T6AU-(wna$Bi[o!fw{(@P9[iE2g_!K(I9hFK!Pl8#p>3m;^w9pxU<RTEI?l' );
define( 'AUTH_SALT',        '_lXzMj3@Wb3}Mu:Xe+BoX2C^teaQF-2n5Y^3f`nu{.ALdE~:DBL=+vo?1lynZdK*' );
define( 'SECURE_AUTH_SALT', '- 5pDLx@mELFZ}qRoA[.Dq4lG>_o?iK!2^s?mU?:ydMR7WK=u3)5kerG#i&}{UWR' );
define( 'LOGGED_IN_SALT',   'W!piFLBy%hH#hu%[|?6pWTJ.X-.=fJsQCs.T(IO+-~H_wDmD|~3.N_2v@zy}-+(w' );
define( 'NONCE_SALT',       'BTwBqh=5_4<pHvi%(dJDsmi~Fdy@+H(e9i]62R<#42#$=@4kDK&;)j6tV@%5^V@$' );

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
