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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'drop_ktln1' );

/** MySQL database username */
define( 'DB_USER', 'drop_ktln1' );

/** MySQL database password */
define( 'DB_PASSWORD', 'S.CoiR7QHt80MZxIqLK12' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'mFmgDT0SiHlqzRNKVM2cwFKaEzZMwrmfyvCrTpg1xxWs4rMTzzSWRjgl65EINEfP');
define('SECURE_AUTH_KEY',  '0j8mxcdepbXwWLLw6efMGCqpPkQxQEEuLmakjOI92onMiNCX4fTatDE0mlzxBoou');
define('LOGGED_IN_KEY',    '9vwvcMmTX5Gfx7rVt7bsBEBbaIxLv9RTF07yCygjSOTAku13X3xXslVIXXr7NUdB');
define('NONCE_KEY',        'ZaGTDJE085pS3S1NlEdQbOgh7K1ZJpDdAN5Fa19qq0KnMiCZlH3SeObjXbLkV4rC');
define('AUTH_SALT',        'T5GH2aChuoYSOTlCBjkJAm4gUPkmekRqEwYO3mTMezSGyJsPiQ6awULwQwaA0WmE');
define('SECURE_AUTH_SALT', '0cc8xsR0NhuuuIlSgbVlkrq3DBDklJD8NOW1s0NE5ye8MjC62pHjr3dvPP1kDCCX');
define('LOGGED_IN_SALT',   'VVMP4GXPutGHNxMIjmb3Oz2Ye4fV5nFOHmumSjPqnTXcn8yOCGGUYP0pgOFCfiVN');
define('NONCE_SALT',       'wKiWhZU7EXCNj1xA1INzUFP48MsvvICNExb3gzuhPXBMSxLIH4la0IbahYCzQBNw');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');
define('FS_CHMOD_DIR',0755);
define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed externally by Installatron.
 * If you remove this define() to re-enable WordPress's automatic background updating
 * then it's advised to disable auto-updating in Installatron.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ype9_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
