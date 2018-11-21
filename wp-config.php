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
define('DB_NAME', 'adic');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         '6i?}>6QC0r`,S%/&jNh/:JC0=V2!EBAsnuu]l!w$`SA$%OX22sS@~iHjcl+JJL1#');
define('SECURE_AUTH_KEY',  'URCSzYlt4oSld%zjTpU&e=b&A S6|0z+=YQCI{[H^~h~5u`2&=40ZwOJINDOesGD');
define('LOGGED_IN_KEY',    'wg.<3(8eHo9ZNjj55AX>#mDZ?dOm$w,V,9SE_+i`(.L3Dcpc)7s;o h!m>Y)L?T&');
define('NONCE_KEY',        '6k>[<gQ5K*t`@cx9aYH!arrZ{V_<5G*FRgak_8Kr4TC[VysR@g;EmG|~~i>Menk/');
define('AUTH_SALT',        'nEz@RPy9.E?@Nc;Hk6q>E2/i3NM~}LU_4BxXW@PseXyhk_jGI]TCl5Y&lEOO4UD/');
define('SECURE_AUTH_SALT', 'vbx0ZU81oK=>yxZ9`jfD^#T$G4Au;cr] &4s@$a0n:{b7BAYwlE9ffvxz<F}*uNR');
define('LOGGED_IN_SALT',   'Es&Ko-D{,eQ3ID)9+l2*  AbfO6~|OOq@Z/mF6EePFqiOZ7K21-lviKj4~D%)?ni');
define('NONCE_SALT',       '1^OU;SQ*=m(Wli08OTUo^qxnRmj,mT]tZ}C>^Xz#Q?QI8stcuU UnO[]BCb)T)5P');

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
