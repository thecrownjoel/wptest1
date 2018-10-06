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

// ** MySQL settings ** //
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
define('AUTH_KEY',         'JDwSB1rWGZOE95ZWexqXJqiVw0AqadLOVCIgKODoc7os0gfFo8NMlXNdumz3w4Vb7JZgirX5XdMHeGwCJVZacg==');
define('SECURE_AUTH_KEY',  'rvaGycqV8a46XfiDkvXARI2gmlb4igQHYgL6oOL+YHqLuskuCczzgbOic3XQTUt3A2PqOGjNSTEHj01EFnEytw==');
define('LOGGED_IN_KEY',    'gYTfeJe1jzsYYZbteKxs81eKB7dpZ4X86r8ivpnnLZa9K5Rl6rwjAHJz1YWUW+qjMIYZC1Yjotw3PM4wXQUNhA==');
define('NONCE_KEY',        'M3d0xJd4CtDkywtg+o/s5QvwCbR/YO+gDabsHHXViAOqNpp1WBJuHqQblICTDsXhqrmOTewfijAwS8Zg22cv7w==');
define('AUTH_SALT',        'IX0+6swdusM6j/QjIKT3ro4PL7CZ2PiVcTQiLbTJbLBtLU8wMa3F+MjsNrqTKZaMrZWTWyrL6NQ2hqvYm+JhdA==');
define('SECURE_AUTH_SALT', 'AWhL94dWMYHAeu8NZc6/65UEAm1jcrsjky9ue3TrZ79m5nnLsRfMFcm9nFVjVJ7HcR00U9MTuY/FV1XL5RmNbg==');
define('LOGGED_IN_SALT',   'KOMIBBcPVZSLxPZ7rwNTosgF4SAtd33M2KTt7djR5rGSO8sJ6nmuoiPk8bGwSvyhGqKGCCRFMe7/xShc5376bg==');
define('NONCE_SALT',       'DSyUhrqfT7Zcj0+gumM0eCpkiW9bBiMxB9blwKPR/CnMuURrNPIlniSzEHNQrPPS1Dq/ZOu94Q5TrKsNnQZ85g==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
