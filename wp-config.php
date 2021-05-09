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
define( 'DB_NAME', 'erp_db' );

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
define( 'AUTH_KEY',         '7owS,p0|&fGyZP>/-A,q{!cS5c|9OrXL[R{HFKVS5|r>,D^}LOx>dW~=o/%DDC56' );
define( 'SECURE_AUTH_KEY',  'g<rr[^g8lo2 o3ZTMY]jd*SV$Y(,:%si<sU{=7y/CR}h^`C+Wp/a&4#I+}n*nr {' );
define( 'LOGGED_IN_KEY',    'HFTiM;+;,z`1^^iJ-?^sH8To8X/<9q:,?JY5bT]d8,Wg_Rw)0q,,A8QLX2X00%&X' );
define( 'NONCE_KEY',        '_W,jg1l#Tr[mdw|?HZO6PKq>_FJybV~5N$y/xYM#J}]cQj2YCSwNXa*TtbcIkxEs' );
define( 'AUTH_SALT',        'm[3O4=W%y~3}q)$l$GC%,W^>C>y4].b[tz6I!wjASZu^[_@<$;Md58hT-iT<u_6O' );
define( 'SECURE_AUTH_SALT', '1Y=e=XB>A:f6[DB^-&s%H|23>JJIlV*UCOP_qpl}!w`Cx&p-HpL2&6~L5z|;]*b ' );
define( 'LOGGED_IN_SALT',   'y}D#jtz).[fX1P0F]1tQF7>SgZ!$hNIv 9[^:SKNr9lni?_@ou?0+AJPa-j<.R~J' );
define( 'NONCE_SALT',       '@r?%WKG:sQsA=j$rv+Fa*W)B93JB%.krz45rx%@(>[)-T9sH^++%{;s`?znq={5W' );

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
