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
define('DB_NAME', 'comidadiboteco');

/** MySQL database username */
define('DB_USER', 'comidadiboteco');

/** MySQL database password */
define('DB_PASSWORD', '@<r8rmC4W');

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
define('AUTH_KEY',         'bRNhewZURcojBqEKhrMVKbmkYCFZvNBvC4oS1U4zck1d4vhoQTmvLcwX006gJ3kr');
define('SECURE_AUTH_KEY',  'U5wyBgTCaqjmgIbsCGpBIiNo5fSitaPXqtIbS9rmzmkTKn7ylZuxrzSDVA8c9NVG');
define('LOGGED_IN_KEY',    'SAUHWLnOCVvV3TGZhqFGHidWb6UKGmr7GCkspNidr8AOSLoULrRTRMJPRopozcSm');
define('NONCE_KEY',        'I56CJLA5YVU6PdGLTJPYTuPf25TUgjN8dJnM6vWZasGR2Iu9eqI9LHFlyNYsBfI8');
define('AUTH_SALT',        'kR1T1plUQ2AnGurpK6L8wAM3jzLlY6SS0ZHSzPkhX3B7ywRXZ0gGWCjXhLdFaIis');
define('SECURE_AUTH_SALT', 'xknyIfkL5qhGvYiTRzRAaVOAcKyJnEapPlCR8kaeE1coMjDQVvWLz4UVW70o9iqN');
define('LOGGED_IN_SALT',   'wpyqgQbHIQpnRaiAGXXyLe8mHTorZXWgi0l24xpz06dOvSc21uZ7tKYRY6nGj1Hu');
define('NONCE_SALT',       '2UNZozKuVvBAEhl7yL7kFnJRsrwqghlWJyiwKtxtb6ncA25gZLYKACmxDxn0Vnzz');

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
