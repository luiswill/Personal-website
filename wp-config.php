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
define('DB_NAME', 'boulangeh515');

/** MySQL database username */
define('DB_USER', 'boulangeh515');

/** MySQL database password */
define('DB_PASSWORD', 'CQfEzDGJ7qvj');

/** MySQL hostname */
define('DB_HOST', 'mysql55-239.perso:3306');

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
define('AUTH_KEY',         'r6QAgD6XL++F9d3nnl34b6iqQK9qK2KaGgW6kef5FPu1BaQ/z26wkB7pJEmZ');
define('SECURE_AUTH_KEY',  'MGw3t9ij4FA6mvngfhQnqJKnVzpQr1DDYK4UMuvIU0A943bZOXBej6x5qs6h');
define('LOGGED_IN_KEY',    'NMbPVXv2ATyzuD13gnfA5n8b/xd/1TRly6eipdpe7Fg8/XJPV6zvuDTJFCAF');
define('NONCE_KEY',        '1H+nPOomda6eHt8qhEh5+HG6W9g7UVXKoJ5v9kcanEGeJuK/USqqIROUOQG4');
define('AUTH_SALT',        'aCm4dKLNm/Xrq6e5cplHzIs8xyLB9v/1G2tTw14a2qb0tMOmq5OEIjSBsm98');
define('SECURE_AUTH_SALT', '4MzrGT5wgMMah+++Rl+VISD5wXouyWHaLSn52hypZCV0TzuIWTGp+Vov+F/P');
define('LOGGED_IN_SALT',   'lKexCL75+kEQ/HsyA5+hVLfvXbl6oPxfW59jbpx0CewQ9Ys49paQbh11joJN');
define('NONCE_SALT',       'bnYcafmOskYzBy7fgFQvgQZnPccbWaxRM04pqaHIKu/brMlWNHtguOx+JhuK');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'mod207_';

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
