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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordprees' );

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
define( 'AUTH_KEY',         ':#8jbihJ8(pgSw$VHvZn6v4M#<{125## ~v-3^ZCeacfZ>b)PD3;**UEE+kR)vXD' );
define( 'SECURE_AUTH_KEY',  '|IYpEVLmU6BPg^}`.AR[[y:zRr:}$/G[&?TJHUuQ=pjC)B>|s@2:!C-+d8YMScaH' );
define( 'LOGGED_IN_KEY',    'z_m2h2S<V&-,4{<R:92%]|uH_R ;JL<ritx(rKhb866%fk$zp?I+DpjcFLOp-F>7' );
define( 'NONCE_KEY',        '#EX-yK<yf*vk=;@v7%(Pj.t$TO}TH~AY{I,6}Rv,$SbXm{f`PeC,rPR#yCGh[7Jh' );
define( 'AUTH_SALT',        '%Yy#DQwu:g_1lw}x.#cGjAsN`mNr/{2.z8+bG`/9)5YHb/n5645fKNQCP|k>O!1J' );
define( 'SECURE_AUTH_SALT', 'Twr&Wn.G&vFa<5aRmtRWY}R&Y<.`mW}QsgV6g~EX[Mu?qxD=3`kN`Zd=;n^JI_?.' );
define( 'LOGGED_IN_SALT',   'v,g:*hj624#=#k`i$qgC!c3MCwnBsi$3.n</bjAq_2>[bV$1[v((t+RC.`?u,sy[' );
define( 'NONCE_SALT',       '`FF(`A),q7}9h^aog=AhVX>-1]U@ $dGBtty0dk5xbl~%5czDr:L,YY8S<..Mq=u' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
