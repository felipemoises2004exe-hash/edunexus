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
define( 'DB_NAME', 'edunexus_db' );

/** Database username */
define( 'DB_USER', 'edunexus_user' );

/** Database password */
define( 'DB_PASSWORD', '/123456' );

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
define( 'AUTH_KEY',         'qM6!.m_((yYE$@s6.1#F>%mp6fMl1C|^keYUlF2!aF$3:Pt&!/MabQO)E~qu!sy`' );
define( 'SECURE_AUTH_KEY',  'Amnzh#;C!ifWFowXsWwF6z/s>3xqGdVX(mDOVsV?}m/KVV 4h@8cdm 8u]wm:_9$' );
define( 'LOGGED_IN_KEY',    '/;:W_=Pr}J&rx`Xa&<Ontih>9N}r7?VMjt~{9&`Bw/jFI =$0}I6U,;r<+CZ{ZWE' );
define( 'NONCE_KEY',        'f` 52B&d?iV/5C$f3h:F,A?W_qa%vg+34T6TI8-|%a_TG75uwyN-YXbt!F1hJL,j' );
define( 'AUTH_SALT',        'Yy_T{$OY&[]RDWlK?TLN7h50x=F^)gC^L}SgwbTWmx- Zh[ah85M}f|}G;5M^?vR' );
define( 'SECURE_AUTH_SALT', 'p>J<OD!z<?/x7[n5{yA{O+2.:X[ rFB9:V@XRC]MZsBV-u@!LOI!D^?tf=g!@3|2' );
define( 'LOGGED_IN_SALT',   '6Nhcf+ndfj6{P^e=V#2*0;=7f,f}4**/IX{g9t&</1UeBG;X1&6yphIx>|uMM/=Y' );
define( 'NONCE_SALT',       '>.EVFOJ`?gaUWa/X-tgMp5*$VmCb^VkQ|#H2S>3|JU[?f#[o~C+,f6;AxVVl>RaI' );

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
