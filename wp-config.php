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
define( 'DB_NAME', 'Wordpress' );

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
define( 'AUTH_KEY',         'Myw^,RpDyY+3&PUp.Y}tm+u)<y[^Ux>k16+n;ac,jdn ki7QoaqMENTcY*f6Fe,h' );
define( 'SECURE_AUTH_KEY',  'Xd}7#74~iDm#Gk|h^PJP1w9?Izm!>:FqRR^2cP/q%jv/@DYwVi5oj5S?qnTRI%ud' );
define( 'LOGGED_IN_KEY',    'vaXTOX[3-#!mZ*o28u3SN)aH!n<;w~)ouiV2y[|IczGjXg=OJ=)|=X246}C<gsv)' );
define( 'NONCE_KEY',        '<N5VdO/GDFpx4>qy,:6_ QXW;Tc3edFU]Yzn<SbI#aQ[_dG9L*@W{@ |]o~*{!}O' );
define( 'AUTH_SALT',        '.-{NjmsC^uy-2*HjuxL<ZU*nmiEoZMP ]S0?~:eG|-~D2+ZJE~G{3}m_=!/Men_,' );
define( 'SECURE_AUTH_SALT', '47}[?tc+Z=^PWlRdZ{3`J1T5sUmD^e7Dj`Fk,W[Q#L+I~tkx0>N[8vR.j!!.7W*Z' );
define( 'LOGGED_IN_SALT',   '5m/fbFpj!?V~N5+Q7bnZ.E _Lj(uUAS/:6_eO(Q8^SN.S{#Q]rcsG[ooKEd:EY8s' );
define( 'NONCE_SALT',       'TE|=:1)Et!!ZCep7X7SdybcPJkzm)!!GI{10)yVr.*jMw >Usw3/y`RQ1Y|lH/Dv' );

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
