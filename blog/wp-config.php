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
define('DB_NAME', 'glowlime_wp404');

/** MySQL database username */
define('DB_USER', 'glowlime_wp404');

/** MySQL database password */
define('DB_PASSWORD', 'SMPr6]11!6');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'gfyrdav2zrvfybyo6g4eyqvnjsyfcy1faotal3haixxgtmmwqb6gixmyzgfgg31b');
define('SECURE_AUTH_KEY',  'gpwm7ouzbjmw6huyfl9nc9ny0pge5i4dixhjyyd3ho6p5lox7tblxchmpm5bfu9k');
define('LOGGED_IN_KEY',    'zirr5y4r63wlkkognjhhomelsoykxz6fqk3qduj6sjfdutrjehjqq5ovmnadlmui');
define('NONCE_KEY',        'zbexjtoc6mueiftmofxvhgff4oj05nfqjheo4oaahqejskqf5wqyes03pudpc62z');
define('AUTH_SALT',        '9y9wwh2gia6uceaief3d95nh4bhn2uimjw1ksyhi7evlxigumini9jzerkdp5huy');
define('SECURE_AUTH_SALT', 'nwgzosjo3xffiebejghqzuvms9cgiamgkm6buhptuahb9lgbucxqqbys18enfpvq');
define('LOGGED_IN_SALT',   'lvo0ygbzf8kww5oh92rzem20thtejsh5msd529fnbgbhej8huvlzts67l621p9ya');
define('NONCE_SALT',       'hgaxgbejjwjf8egael6xj45z9vwznnhfn0bk9r0x8lquevhmeqasaa2eumh3pitd');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpun_';

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
