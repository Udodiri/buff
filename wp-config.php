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
define('DB_NAME', 'buffpodc_jacedb');

/** MySQL database username */
define('DB_USER', 'buffpodc_jacedb');

/** MySQL database password */
define('DB_PASSWORD', 'jacedb1');

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
define('AUTH_KEY',         '[!y;GD7=2GU0}rL:=VO!4LcYE5zmK3Z2Ka/[ce|zwp@5_u`[2IEj4t5k@NTOoosy');
define('SECURE_AUTH_KEY',  'bf)n~Vts@% v&{pcxkV|`0lA:zUA6*Rfd[vwwdlmn0sJ@NOZBOm/7u+W%,>_{b< ');
define('LOGGED_IN_KEY',    'K7>Rrd ]WuC5er!R>p3l1B%>$h`)S)h$fId8rBosBy85v;nZn)Qb5A(7o2iz}Yoh');
define('NONCE_KEY',        'pLC!ub7d#D>z6VRWk;eKq)m;ZveZMwj~!5&hQyLBZ6Lb Y|WQ)gNjD1WOr1Qn|L%');
define('AUTH_SALT',        '>U6l.X<JY!L%:%KCk/_@o^+Ju&&QT{USb#K@UU,<ROU|R ZbWOx?rHYc$rKt9?3g');
define('SECURE_AUTH_SALT', 'I<B]5?/O&GCp){ceZbQSiH3.g hIf{43T54^4g%=.E+JS/ S4SWsO9&.#1^N#-E{');
define('LOGGED_IN_SALT',   '#PSx*A>S}c JO9VT0WS`Z|%*NcV}+9Ib%8Z7H$)#:@MEIjc[ I|IijN_`B)YS9S~');
define('NONCE_SALT',       'C[y>#u7g{ME7xz8QIaODitjHku<*)mPwG}@re!V] h#;]|g7z?yaN =3L?b;?O6x');

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
