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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '(F<*uKB%K}WpG?oY)qbDwiFV`j7g.+]&AHyyDr[5S+g]OWnjqtM2F<3gm9y2;lyw');
define('SECURE_AUTH_KEY',  'P#Am-FjN-q@-f3gr+Ufz*!y;al/{iYAB{ffRG5zde-Gkh9F^69NYnxk[!VoJelQZ');
define('LOGGED_IN_KEY',    '?rbNjLdL=6wdFx<4:h4P93C(@GdY{n?JvEM.h`}44=!!vuA=S8mui(^tKG~$g;8n');
define('NONCE_KEY',        'Q`8qTDivut>`c p@1 wv,q(EBR4GVn<+Ro06ZT;?DX&/D9:RP2/NpmPxVSZF|p%}');
define('AUTH_SALT',        ';Lb*E/4xG1y`h/nt-|]LMTw~s_>I7z$5 k4kQ/O|EJ-:]B1y4Haa@p#k[m:CEly-');
define('SECURE_AUTH_SALT', '//$64ub.&PND3Pufdhn UzHTDve=NQxsGCh7{N2jIWaO4<FN_Z7iCp&/a=iI0$%c');
define('LOGGED_IN_SALT',   'rhcNyC0fVCd8RTU77+P5|-[^9+z%*TUm*8*}VzjVY-1E{3IHMTkzPZ55SoisL};t');
define('NONCE_SALT',       'h)KP,})qsu%KDt1`_1!k%5c+x1fp{]CC0v_mb+Xdzaj }8@iqelrNEX{**wV.lLI');

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
