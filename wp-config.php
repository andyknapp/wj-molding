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

if ( $_SERVER['HTTP_HOST'] == 'wjmolding.com' ) {
    define( 'DB_NAME', 'wj_prod' );
    define( 'DB_USER', '' );
    define( 'DB_PASSWORD', '' );
    define( 'DB_HOST', '' );
    define( 'DB_CHARSET', 'utf8' );
    define( 'DB_COLLATE', '' );

    define('DOMAIN_CURRENT_SITE', 'wjmolding.com');
	define('WP_HOME','http://wjmolding.com');
	define('WP_SITEURL','http://wjmolding.com');

} else if ( $_SERVER['HTTP_HOST'] == 'wj.andyknapp.com') {
    define( 'DB_NAME', 'db173289_wj_staging' );
    define( 'DB_USER', 'db173289_user' );
    define( 'DB_PASSWORD', '4?exf?1GnK_' );
    define( 'DB_HOST', 'internal-db.s173289.gridserver.com' );
    define( 'DB_CHARSET', 'utf8' );
    define( 'DB_COLLATE', '' );

    define('DOMAIN_CURRENT_SITE', 'wj.andyknapp.com');
	define('WP_HOME','http://wj.andyknapp.com');
	define('WP_SITEURL','http://wj.andyknapp.com');

} else if ( $_SERVER['HTTP_HOST'] == 'wj-molding.test') {
    define( 'DB_NAME', 'wj_dev' );
    define( 'DB_USER', 'root' );
    define( 'DB_PASSWORD', 'root' );
    define( 'DB_HOST', 'localhost' );
    define( 'DB_CHARSET', 'utf8' );
    define( 'DB_COLLATE', '' );

    define('DOMAIN_CURRENT_SITE', 'wj-molding.test');
	define('WP_HOME','http://wj-molding.test');
	define('WP_SITEURL','http://wj-molding.test');
}



/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
 define('AUTH_KEY',         '56N|oQR|<VQxH~+DDrQYu/PW}$EgU&BN!mT]B_+Kjx#}21YR0>iiTa+|QY:+/(5L');
 define('SECURE_AUTH_KEY',  '2YB;pG81qVEd|IQ3ZwtAQ^5eQ>eNXFf+b/c}r{w6a-o]%X[2xOgJARzcB#M/pCI}');
 define('LOGGED_IN_KEY',    'E9?]K.B.`rkapN2&| Yn.hE0-%{1Tjl-hd+K4jdkPQ^(zz(IM@.Gpj=vpdAH:Oos');
 define('NONCE_KEY',        'RwZ+naYsqav%$]X/ew;LT ?/yX9ZBd}{?U-RXZG.TM_cru)>pXu-yH#YL^k;Q/21');
 define('AUTH_SALT',        '/D$_*i7D6.wUK$F*LG6!bnB,`G!#|Zysm|V|P4gG-(`f@oPRe~uJ3_-I0imL~XJW');
 define('SECURE_AUTH_SALT', 'SDH5N7:K?jF8ODTa}/VrTzbQi ?gEyROJ<-q|L5<kn%jo=MKU7`&BdcfI}P+nq >');
 define('LOGGED_IN_SALT',   '[X-g:qaw`6TW]]_cRmT s!@96AAix1V0Uy^g6%eW8AonM?W5e{CL:(fbKp,Wd$x[');
 define('NONCE_SALT',       'N/6_:<h&f! x1h<6we9Q|R!#%gjQi.5o2o?dRnMK;TdeQ!{#2K2?<D!]o2`sv[{0');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wj_';

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

 if ( $_SERVER['HTTP_HOST'] == 'wj-molding.test' ) {
     define( 'WP_DEBUG', true );

 } else {
     define( 'WP_DEBUG', false );
 }


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
