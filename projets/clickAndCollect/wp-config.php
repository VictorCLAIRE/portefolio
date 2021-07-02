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
define('DB_NAME', 'lenigmeclick');

/** MySQL database username */
define('DB_USER', 'lenigmeclick');

/** MySQL database password */
define('DB_PASSWORD', '12victorCmoustafapoi');

/** MySQL hostname */
define('DB_HOST', 'lenigmeclick.mysql.db');

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
define('AUTH_KEY',         'jww5boXDhlrCAkGypM28DX4z3oN1fZ+JWivlNG3f0o7xWW73g9S7GRCkp6Yw');
define('SECURE_AUTH_KEY',  'Z2y62eQAA+0LVY2p0ZmA/IMSgLjjTnnEbAOdz9pnRdl8vaV9zXfyi73yJuPT');
define('LOGGED_IN_KEY',    'lRVEZbO8xGxOt8uX8Rqx3u+DcU3kOXQzpgThh7JgJubQMJKuiWEOoViqZiRK');
define('NONCE_KEY',        'RwCTl6GEBjLWna9GkLs32N4vMzuXe9cFMJ/xEvyiuhh+VsE1VkUySHgwc1Eq');
define('AUTH_SALT',        'tMn86gQgPJ+wjG/b6BXmcAsR+EGxoR6RK+3plWHLKhREIUDzbOxQvOCcqyNv');
define('SECURE_AUTH_SALT', 'X27hANcX3mxW6mvSxmbJzQksmMfLl1Wq+LXqGuAPiDhUNLS6JRrjOitVH8of');
define('LOGGED_IN_SALT',   '/8HjJSJU/RsLodejyWCAK7bAEzTDPFpoOakHjDYlXBxaXg/VY+O7i/7D6kQ9');
define('NONCE_SALT',       'w6NfI1FQgPQ9BufzJTGfZ8p/P9BDh/Q+6Rb/2TL6iPRjmSu77+3tJa72kgLP');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'mod810_';

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

/* Fixes "Add media button not working", see http://www.carnfieldwebdesign.co.uk/blog/wordpress-fix-add-media-button-not-working/ */
define('CONCATENATE_SCRIPTS', false );

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
