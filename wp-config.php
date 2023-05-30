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
define( 'DB_NAME', 'casino_db' );

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
define( 'AUTH_KEY',         'M<oxL:x)&/Ax<meqa}ZehKUA9sR-qc%<=|ft;qe2^#C@8q]W7+!<lwl+q!p=[$#2' );
define( 'SECURE_AUTH_KEY',  'N$+_vtU6N~IPqvu{ZA-LwB-N`#S1Q?2s&i]0x).UYVwj)`Z]cP@@80.x;Wlf_H1i' );
define( 'LOGGED_IN_KEY',    '/8,lu<w7!p4-2Zn9*^7Io+cDm$e&(Z)qxuuFh]Yr0%M`Nu`%=VL+]l&!Tdl0MEq@' );
define( 'NONCE_KEY',        '_VLtnzQ0K_Y]dKx:NQ2gZa}*D|~Yz f!a;%:XcLradcg:yZ^1:Zbu^+;bO/k&Z.+' );
define( 'AUTH_SALT',        'C-vPP9aiBw>5<sv?yD>ld(qI. yp:6Ph@-t=6zYFM4m~&C2`N)$DN3`ISVrO]c##' );
define( 'SECURE_AUTH_SALT', 'FwL.Tr4C@-{@~0peJ)@>^BCdJY{]1w)> UdA+aS!sfn>H9QT#Ykbz#VKm|}87$wJ' );
define( 'LOGGED_IN_SALT',   'VftNwVT^D[ Fvf47:$>/CqF:n:SmBK]&0S3Kk_l6Wv6}IJG}Ois<Zo_$1.^Nx;/L' );
define( 'NONCE_SALT',       'EM|`1d)TV`8.9#PNf-yX:#2J}-@M=0Sjc]VzJpN{l<tF]$Y(4>q3,,LcBU_;ug^y' );

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
