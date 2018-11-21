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
define('AUTH_KEY',         'k7Wi^w]^,y@$9K8dNIO$jO6yK92*rXJJ{>l1S !rnvq{bGQ#B26![1rUSW]svqs+');
define('SECURE_AUTH_KEY',  'OBOwo(W;2}i^:PV`{im@)RDL^Uv36FiO:hwW+R7iY+Q8;$~sc<hgxD6Fu!5;9AMs');
define('LOGGED_IN_KEY',    'M9~mMH{XA$2$t==-^HlciRo-pM,Q|;po$XB>X,8L%<iGi%sb)rTKoza2$bcN|>*^');
define('NONCE_KEY',        'oi_3{:~DAc$Sr*r]j#tvbi,:d-._%W=rh94(*S[v|M~YV@<bX>u?fQkSJ-,bfA6_');
define('AUTH_SALT',        'm$J5RAUEeie0lHnMg1d~{8lvHhvs0`UMSh-p4[4F`<g~0%fkX~lupfZjY7gMCL^K');
define('SECURE_AUTH_SALT', 'j@O(=d}CjDtsFOgF5Y?feOM?drS2-UOdz4TWg~G@0uCA-C,i)GV-{eOh.46L}6?@');
define('LOGGED_IN_SALT',   '({HDZudo&-j lJrL_(nc~XQtFNe|h?XM6zAbT}$E+7,ueR6X4f2wrxqwQu5bVIGa');
define('NONCE_SALT',       'U. 5J{W^l N6;!3O`[`O^L8ioo9i-udKq#f&)KN$b3;Ib<F`|HR{UW8DiwR!s^qS');

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
