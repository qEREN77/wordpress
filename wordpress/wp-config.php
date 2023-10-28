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
define( 'DB_NAME', 'online' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '1W+_ym9Ec+rMb$C:(}qA=Nq#e0?sNpA-&7yr*>i<Z}Q?,[,uW*E[qYMoHk @I1Qb' );
define( 'SECURE_AUTH_KEY',  'S3(4zhW/eZ, <`LGu0tqt.{ >3L,ChiF?7VE!7aJ#6dg4~1z^vSpm!1bRuZ(:.I^' );
define( 'LOGGED_IN_KEY',    'wcR #:vO!>(dFzn{.MRsNu+aR[AMo{p;-aJCv,_>48QVK`K_-7Zidj1vkhr>u>RV' );
define( 'NONCE_KEY',        'gVX2M1Zb&,G>}Cc0*1+J2^E2Wsq/d;cTO8iVQdo=pky%|b.PSBzexE}&ZfDK}+?;' );
define( 'AUTH_SALT',        'C|[J!xT>$Mc<@GtI6Q!lBudDS0/tPtoNuE$hVR#O0-~z1elx+n}| 6Z~N:LQ=29g' );
define( 'SECURE_AUTH_SALT', 'B~/9G/Fch;wc~} !Ak;<8%a9y4K@1MO<>i1Nw%/?&/yY6eW@a,oH*Hx `f`~#cXw' );
define( 'LOGGED_IN_SALT',   '*E#^xm-# ?iL@Ns)#?IX&Nd#tfZ.`_&Q;sGtDu^f^8F87FTF(Vo_))N lp;R1lwZ' );
define( 'NONCE_SALT',       '31`d5GW@[Njp:`_/|q{cph4{qL/3qt)g2rIg1d5N4.G2$dj>tl,p4U5dTI#GLxJ,' );

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
