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
define('DB_NAME', 'wp_electronic');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '123456');

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
define('AUTH_KEY',         'HG>//J<.UOZFE_t)7HzcBU5_R2+q8/i<5.K3Q33fBQebfc%!$Wk5RT-Jp[6{pP|.');
define('SECURE_AUTH_KEY',  'PEG<c((]G!UoEVUNi qE,jV-s0`0C6ci,`-29 ,3+Jbm>yQH g%NY/8a,UfON!xy');
define('LOGGED_IN_KEY',    '=?bHxyoa.xig+W.jrs S]Ss<rKjBpRSSOFM!]H3dk23XsmcKsyAx,PwfpRn|F=+/');
define('NONCE_KEY',        '_4`:S|c.%VF2v77c8OM!Nm#OKC)9/f+I1*xB`+mM[|C,]eh]n@SQun+*Jd}?(oIh');
define('AUTH_SALT',        'R+:Nuq29YfsPIhz%!vWfX(73b4+yL5B?b5|1vp0#BAuqz]^VL~&21u` q(#_zXbJ');
define('SECURE_AUTH_SALT', '}NaD5pdm3d&uZ!1;xXh450LZ6bgR_]XlIAb;/|c1DGrvglMM?}o|u1b4E(b1)215');
define('LOGGED_IN_SALT',   'c?RGgR>s^V113?pH2)^D`Q@z-TIQ^|)elGF||S{&y+)@-f7hM&s*}-/=+ ~%%=kB');
define('NONCE_SALT',       'r-b`s9k!uE3<3l)DfK8H5JxB*Cf-7|1y_h6SvY6p47zLdjMT{B.~iVUh/7yNKJ&-');

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
