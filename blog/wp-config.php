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
define('DB_NAME', 'simp8013_wp743');

/** MySQL database username */
define('DB_USER', 'simp8013_wp743');

/** MySQL database password */
define('DB_PASSWORD', '!!P1SSQ9Y0');

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
define('AUTH_KEY',         '3tdmpd6mykxjd1memydbhvgbmyzybrqqbfhofg59nwisofe7mlcpohdssqrnuuny');
define('SECURE_AUTH_KEY',  'buuersj8jtog2wuacm3kpqz0zskuj4pbb1spzwkg2kciyazroingoqxkaxdhydbb');
define('LOGGED_IN_KEY',    'j4dmukbg5ochthsic8qiinghrxlpmn7n2n9o8jn7jxmu1qesblu6ezkiewkwrdyo');
define('NONCE_KEY',        'yaxnsyuyxyiijxokcar8phdygojnk64gvkuwy8dkmkdkae038sflsu9av1uovhwn');
define('AUTH_SALT',        'xd11lezt46xsfu9gkmqriep33xyvrczgnmvvpr7znobkatsuj8hrruluextlwubu');
define('SECURE_AUTH_SALT', '7wwjj9yswagx89ihprew90mp7xkk7g38mplujbg975vrlwkfmd9xx38g6tg0qd8l');
define('LOGGED_IN_SALT',   'qgtsdms0gpibr5qecdxcntnut9di8kl6u6clkgfpgy8itquyaghxyxgjeus1hd7c');
define('NONCE_SALT',       'xylchx3scop5dtuhfsjnjwz6iwaaotlpxx0xvjn5bdullanqbuupuptagackn57z');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpra_';

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
