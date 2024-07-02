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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Portfolio' );

/** Database username */
define( 'DB_USER', 'Portfolio' );

/** Database password */
define( 'DB_PASSWORD', 'PortfolioPortfolio' );

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
define( 'AUTH_KEY',         '(^gkRG{38=85<Fc(bT&J~=W>4u<a~4{<yxB3gK7VhLleU<@rGIvyiFj4~ SJf!R@' );
define( 'SECURE_AUTH_KEY',  'uYeBiJ+h%j>@Y_}Tc8.W??Q$B%+HuvKSu/&_A<=$Gx69Vv* ,Zb|bFbObE.%!P4Q' );
define( 'LOGGED_IN_KEY',    '6FwlG>VJB2b5*GOfu_Nn#!qhvmsSO(f=v dpXwmP.X}BEpm-h)7pW5LQIN E}WY2' );
define( 'NONCE_KEY',        'L5v7$LSaZ#1JV!KYd2(f}^0S~V,H:ga-L.~iNBV$3Ek/mO#hO8W8Ha:0i$5-(!_O' );
define( 'AUTH_SALT',        'd;w!`IgiAAwSxJTdCywJ-Qvvh}.a]Xu$-i{A@3P_}>g64)WU*QBhU.8zX2#<ctk7' );
define( 'SECURE_AUTH_SALT', 'jtqB{tbd]S;1MB~Av~5%giG>32$b/8RV#yAU0$U#hQ#H#DuQnz&)fvqwqI]>d6b&' );
define( 'LOGGED_IN_SALT',   '^|{U94@dsA3%l $v-Gy3 xv]P=.7Z}G+1?:+`UE_$g;Pei2ywYa|&tbK*P,6b}[M' );
define( 'NONCE_SALT',       's^JI@-MIF/hD[b>gx*6C!?_9!=rya:CyS;Gmi;wdB[952D2Z|v_Jr.(w#`t!X`m5' );

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
