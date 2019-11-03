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
define('AUTH_KEY',         'fx23HdKXiAKi8G79kl5N7OOPhpHa4wEY94RWMEZozDfquwBmlibkIdmlKl+v6lpE0s4ozPRh7ldqHzRY//xx+Q==');
define('SECURE_AUTH_KEY',  'mjOpArZSVmI53kLHgDEYstpbQbUOTxTNx/ZdduDYOiqb9SMbY94uIxiLqxBkiVEeUp8NXYhDU5CU5tlpeuqHmA==');
define('LOGGED_IN_KEY',    'bqCearWsXF/N8+4nZfKkEPh5FXaSlAxkxGsu4LUQP4ba+uWM+mRuYc+YOSi/L3BwToISSZMdFKIbzaMtzm0XBg==');
define('NONCE_KEY',        'Ia6Ln8UzEqLGM1jqdactqmz61zd3qknqBQW+jJnOFzrSW8HjdQP3yx/ORh20WsdwE+G0ynPSsdrw3MCZIKFAfQ==');
define('AUTH_SALT',        'vATFSlm4UJ6f5B/85BkplhOLu2anlYCY4z1mCXyBoJKp69LSSqV+0a6Zis4lv7K00g4+2qyqvMAk1kw47HyPzA==');
define('SECURE_AUTH_SALT', 'HDnJcucRFEhTJp9bECvAV8AUpzofk6jhTOq4lTArmiPFFVQ4zMHETzTXC9AZQuW8jWGSp6qsrsFetx+8cpojjw==');
define('LOGGED_IN_SALT',   'AzXMk8KqhOK6JbmruH5us00+bfsh+gfipkHjVh/TRt6mAU9Trrsz6UX7KV6qcI95A85UU3V0L9GlI6QRzNW6xw==');
define('NONCE_SALT',       'LAoKKVnnymhDwvujcan89UatdAJBG4JFoUtFwpVFuB7P16+HyrL12Ceq9J1s+6VDayBWFK/KejsNLH0JH3D4Hg==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
