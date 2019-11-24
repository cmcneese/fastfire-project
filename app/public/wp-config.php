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
define('AUTH_KEY',         '4uVXdzsP9rGoGDRHMufjk1cmWs+zvyDbfGlHV05X2kGA9tcv9oIk+RglWTpSayzJvpNhVGmP+PPRtuvuTOEpUA==');
define('SECURE_AUTH_KEY',  'xkEHxGHny+Qi26xE4j3hJI9UJ41g0qsuZciJkFg3nthKh4bWZIMcl8MVTs2sK0Y4njTJbYrlBzsy4bImldZ0+A==');
define('LOGGED_IN_KEY',    '9Xzf0Un+aBT365Tk9Mj2cX77k+VIroA+Ab23zo9o3gqAtlmqY0zggFEol8DkkyuFQxW6ITYW936933mGTjFf/A==');
define('NONCE_KEY',        'iFIhgOiJN1gSoEAb69/UZYzUtiCaDDAOcj7cXOzgW1Sjih7hnpq/LhcO+4V+VDROj3VJGavouaGL+W30wsffjQ==');
define('AUTH_SALT',        'm44W4bzGExkcIY47zr9+ortcU4eMHML5LVI8pzVZyMhDk73WpSgnFQkZirlwAxOUS2nMJOosmorF8HR0vTlHUA==');
define('SECURE_AUTH_SALT', 'L7/X2mYlXG5S+/0q1s8BIs8Jhbjmki9/eXCiDiOwQRzdghDvCvFAZ273028jnKGsfpLMl1Pbd7qj+2ZbVA6ipQ==');
define('LOGGED_IN_SALT',   'rj2YmeyZepAoLFBrQ9wa4b29E2zgCqxx+QasVnXsluKODpMTni3kQSTNjnuqVGV4+QGlv59yhS78XlsxqP083A==');
define('NONCE_SALT',       '8I/BwYXUWcImb4Xo5N1MgGR2uH2PDD11d51G+X1z1XC2z+JzOL0Obg80IYzKDnvijzG3voC8/KodL5gXOLDxVA==');

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
