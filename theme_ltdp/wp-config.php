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

 * @link https://wordpress.org/support/article/editing-wp-config-php/

 *

 * @package WordPress

 */



// ** Database settings - You can get this info from your web host ** //

/** The name of the database for WordPress */

define( 'DB_NAME', 'mhebert_pfe_ltdp_bd' );



/** Database username */

define( 'DB_USER', 'mhebert_pfe_ltdp_u' );



/** Database password */

define( 'DB_PASSWORD', 'TempsPause95' );



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

define( 'AUTH_KEY',         'dMv T6uI3l$|s8y1mnXwgU[6alWed=u`(6YYJPc5UEAZplk|jg*6JktB&d-JDrD,' );

define( 'SECURE_AUTH_KEY',  '+;mdAq0OP{#^`^16?P9Zj#/Qb:Byz*ay(D[d?ZR=8F9VWT!)7~o=1UoPv% V&}#P' );

define( 'LOGGED_IN_KEY',    'b.e(h?k%2dIvD3TUQg`?(x9^vyi)X4s _7I2tDZlB(gvnG/x3OcCC1F^`wvX>;dT' );

define( 'NONCE_KEY',        'q_$v~0AY9VGu[Cl5v}QSHWIy+=p6u@r} ZIJ5[-Y/o;:0Z]+v1b!=yc*`M+ynC,M' );

define( 'AUTH_SALT',        'K9Dk-u&z^ID W:/|5*uyMi4`O fQiVA9.NGTt(}WaL&+%2>1}I>DI/K9WC:KpKN`' );

define( 'SECURE_AUTH_SALT', 'GT&o_G!dB`:q|S-Th#Wyj(-tQNmx.74v34az1Oc]AqW$8KHF3T,H^7]6n;Wb4n>l' );

define( 'LOGGED_IN_SALT',   '(-%<]2Ay^kO`r8GiR0zsi(PO<9G,HuB/Ld,}E9_?XZV_B08J0rBp~e=N?[p*S<H0' );

define( 'NONCE_SALT',       'NVd?)9D$Pa9O^fV1l7luE[q67KRPIdV&7(!Qz,xK$:]nL+`7.qa5LY7CXbOgDGWm' );



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

 * @link https://wordpress.org/support/article/debugging-in-wordpress/

 */

define( 'WP_DEBUG', true );



/* Add any custom values between this line and the "stop editing" line. */







/* That's all, stop editing! Happy publishing. */



/** Absolute path to the WordPress directory. */

if ( ! defined( 'ABSPATH' ) ) {

	define( 'ABSPATH', __DIR__ . '/' );

}



/** Sets up WordPress vars and included files. */

require_once ABSPATH . 'wp-settings.php';

