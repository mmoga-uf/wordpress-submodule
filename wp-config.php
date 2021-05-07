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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'a6Z9UHkQeUbgNTEJbHOCHKymmILnzpN9TRI/uBYYxCo8xg1BFSmmY12ba7p7VvPREsnRbUlq8NPrI5Qmm/Qi9g==');
define('SECURE_AUTH_KEY',  'EnXD7o412/r/M3EBSTxJW6ajIzYGpTo61y9cZ4AFRSvDR9gxjivOl6LkPDek9vh45PkuwWb1av53YDc0VzmKdQ==');
define('LOGGED_IN_KEY',    'yAxsO5G0BreEgzbrMBAkEpxb/Hpy5DGfY1S9IzPDtXOJrkkfEd4cdOfppfxWZMkzVpH774Uqs1ZR1JjckMXd2g==');
define('NONCE_KEY',        'KHdpPA8uPrQtegH3mTqRp0y8ieF11j69jPC0bJvKbnl66BO3e6aVngrKWO4dZLCDqdJ+UWxGy+2MLYbAReq92Q==');
define('AUTH_SALT',        'gn2UCpMoW5KbZGtQCMWDwaWxtxiJGmVtzHskTSyWTdgyamzrwxwqujCwOkAw0w4o4J4Jat32kdPaBv5PJxhhNQ==');
define('SECURE_AUTH_SALT', 'f4CPl7Sm3zmsv1FjcBeEZsrhtRg5ZV6Qv4zSfLvLrvhWXy0eEoiErXykUdeJ+FgY82UubR3Pu6hV/vTjO6JkUA==');
define('LOGGED_IN_SALT',   'crwRHqN4glOvwoPP20l5KOhUHoG9ZB1JzcWR2cHyDBEN323VniA9KA4A5AIz60U73sW5m1SAN+HLzXk6Vv4ATg==');
define('NONCE_SALT',       'ig4MIvsIprKMIFLELz0oM8kQgzNtH8gW/ghzh0994sS6xd3FOBhhwpTrfajaDP4BGO0Stl+C9EcLzVsmUUKJ7Q==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

define('WP_CONTENT_DIR', dirname(__FILE__) . '/wp-content');
define('WP_CONTENT_URL', 'http://submodulesite.local/wp-content');


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
