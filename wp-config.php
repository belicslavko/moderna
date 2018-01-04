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
define('DB_NAME', 'belicsla_wp2');

/** MySQL database username */
define('DB_USER', 'belicsla_wp2');

/** MySQL database password */
define('DB_PASSWORD', 'Z]0Hp2lHxrvJa@1KDI#37@[8');

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
define('AUTH_KEY',         'Di1eXdWRCELlB1mjzxppbXocC1JUs46aRdrsWhr7o5gWNlpRpXWmCodcYrPMMiY3');
define('SECURE_AUTH_KEY',  'cPBy1GZkFnF2sHB4IJFwFxbTG2z4CPo38IbrD7vseG83VeVCa04TITSKuXPD0qis');
define('LOGGED_IN_KEY',    'kK3CzeqtYDietJh4qJD6cV2oz3hMGW9TCUslsiI1jXUQ8f5IvLlgFsw70uMmQjqQ');
define('NONCE_KEY',        'icEUjgs63bxg2uS9piWAHhxtCK507GwlYjBYRii0lOHfgVb8F7q4GZvIc5bElIon');
define('AUTH_SALT',        'b3iHiLzMZNuTFsIv9QpEfKFAj9MobPqo4m1OY8N9JcwRNTUC7Jb9VDLETJ2DGSld');
define('SECURE_AUTH_SALT', 'NVIF3XKzHsDVwMMRCclLYXnmGV8JDZ0AeloJS7Wcw4jgpuj1xi6O5ewrCyL2nUJ5');
define('LOGGED_IN_SALT',   '5CaCe8wiU9RliDo8HibsXbgdZzx3R4LdrMJQ72vvdLKUTMjuT8QePhBUjCfRRdex');
define('NONCE_SALT',       'O2Wv9iYXNOso1yY7uiZ9fkUutXyEjlqqfR3mKhAgWVNiIqqN3f8CHRwrIOqvm7zq');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');define('FS_CHMOD_DIR',0755);define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed upstream.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


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
