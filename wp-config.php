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
define('DB_NAME', 'shimmy');

/** MySQL database username */
define('DB_USER', 'shimmy2');

/** MySQL database password */
define('DB_PASSWORD', 'shimmy');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '_FGGUddO6lX`%d/sa| 7M]--CNW!Jo;P/(BGTd&[xt4mJtM]|zZ24Ue.d:]Zc;]6');
define('SECURE_AUTH_KEY',  'eeg)(GZhVq2j2I3r2U4H,SA%0^`HjlXl:uoo0 |x|edgf+EfUp*VoaLre:+|kkzE');
define('LOGGED_IN_KEY',    '|tO 2`+xk=nQIKnUuvJ!=w{g^<RMMew*pjOfz)B`NB@O4Ct-/n7/`6z|vw`s`oQe');
define('NONCE_KEY',        'hB)9uMu;O/^2;*!HNZg|/L,E]i1|F?W]v-TWA+LKHhNO`,,Q(QIdZ<4W+?euK4FK');
define('AUTH_SALT',        'V.*cJ]l2zzbjAC[o, |mgiLlI1BbuYkKp//Jve.T]t?Z/=B|L/+md%G*9.q)^)XR');
define('SECURE_AUTH_SALT', 'kF>w?,~g(h nXg@wLqM^xypwL<.):n=KN~K4&5>Q@-qS0~wHN%k1uk |^XeS>aq^');
define('LOGGED_IN_SALT',   'BY+XXN>xiGO7}zS2C6F+Ae|^?OO+aaQ[d10~|K6Uxr,@fT_X@7JaZ#17%0C9i(46');
define('NONCE_SALT',       '>+CM3u%(H3qq9.(mZNC+P#FIevfxTLxN?sM++a-C+4Uvm WncFFM`43ta{4mEPsI');

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
