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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'restapi_test');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'gcc|M^_ibf,R[#0CMFP1LwqcDdJMn<RPgdcpU!-Up*9-E{q,Be;w+;qkp,`pR^ s');
define('SECURE_AUTH_KEY',  '$E/J~)2ayl6Q{e1!*%nd2!t)R<ZLU&)Fv1_z#jAndf.mL-hiu3yiV|7; DFWwd8K');
define('LOGGED_IN_KEY',    'DOkMsk@ GHjC>TI}XA`vPHi@@4:X>y81GfAu)ZJLfG|NKN&g2>v#-mgf++x1_K1.');
define('NONCE_KEY',        '(<.t3CuJ+bLtRI^y0t&w];a:YSBYk{-NfsS.AP~](TDuDtvTn GoT0zX7igg+b|s');
define('AUTH_SALT',        '~Hsv|<_&<i_2P]@q|=_># :n>A*Z>Fohy:-K@{]jmduJ6JiF$M`7p7DM$$-7SO.^');
define('SECURE_AUTH_SALT', 'pE09.t^NKo;y1@06TgB7FMg^RkJ.TQ|E+pTUlyhL$}OdUP?o|OkB3@IOda[(.8S)');
define('LOGGED_IN_SALT',   ';J`qgpeyM|L}C<_md4RsJeNx`2]rOM,QZfC}gEY-QzNT4(+c4sww!(-HP,z^;Oy2');
define('NONCE_SALT',       'PY0+ew6GU?.C6r>b)C?h]#|I<k.?)|H.g~tNKN6 b1:-*-ln$MbX:!n@5n@@FGf.');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
