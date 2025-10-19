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
define( 'DB_NAME', 'perps_db' );

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
define( 'AUTH_KEY',         '|m4Q*?.#~78.v#3a1T{%aP1C:!lI<R1g#0dCO7A^a?.OB=?@Ac1-9g:HSQo/LHY[' );
define( 'SECURE_AUTH_KEY',  '{lZ1U.{]E8H9x &uP|r@YIyaYtbjT,^!gV1[KS:d&N[=^-%C3#^P[EEsGF4>_>HU' );
define( 'LOGGED_IN_KEY',    '*$q1{_=5?pW_:Kb[soJ*4NpyQ9ZXI2l72E_EXRl_}DkT;s`5Gv?MF-keUMeTqCz/' );
define( 'NONCE_KEY',        'ZI0OAE%r`CoqsRwTKg2dk.n;~9>LVYdC{6,#,Jn.8g+AS. JZlprl:|Oxu=ynWTJ' );
define( 'AUTH_SALT',        'Zsv}^|-GN48]:T4rtGKoSp?Chla<QDX5!jIv!]!g|,M}VC+/HB>Gv)muzb]3/)5|' );
define( 'SECURE_AUTH_SALT', 'E7w%N7V,1_12VwzUfoMe9p_Azah&O2~AVD*QY/)1[%[r0408Q>O+)$$75[*Y0#iB' );
define( 'LOGGED_IN_SALT',   'Zsdl2%orL}_w;=3a,#%nL>bw`_fokV$c<Ei<cc|e9yZF)OE<8Jj_X(kw.S4n,(Ds' );
define( 'NONCE_SALT',       'LZp1L5q>-D@UH7N2m%@`/wdXC6aW];~4)d=F.?~is+<x;<+/>j-dJgh8gKR+@sd?' );

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
