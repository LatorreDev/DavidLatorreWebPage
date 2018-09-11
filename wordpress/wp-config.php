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
define('DB_NAME', 'wordpresstest');

/** MySQL database username */
define('DB_USER', 'david');

/** MySQL database password */
define('DB_PASSWORD', 'Epicatherion90**');

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
define('AUTH_KEY',         'CQej/Q5zrm(N$S$y`HU.Vr[C;QB0xh!X;+.g/OmuvY!LR=/cMZs<g/08V?k5ge5w');
define('SECURE_AUTH_KEY',  '=x%EpC#7B@:T5V7*zmm/=4{z?3ngW``2,G4U|xUbn.3ynpjT?1:f|t] FUE}qL+r');
define('LOGGED_IN_KEY',    'e,Q{~(FoEMy5~(qDIw0yu/7O7t>A5`>Y6[TA]9ce OCf`4LJ.7N#giA$Vgp< IQD');
define('NONCE_KEY',        'E=OD0Jd6XbkF?a,D<bkLjqUl50&GnPGNXQ9}b_sOJK_S/d*4jVo@K%SRSPFf,qfn');
define('AUTH_SALT',        'vzoc*m<~ZNCs>95zSqx0-JLA=4}/SfZzj&w4akFQ3/LWa_)>h}x=>q^_+i#wi4&4');
define('SECURE_AUTH_SALT', '5JI3[i;|6K][<j/~VFs7{8wK.]uOBTk>aZtoNp#7yAKl6N|X5#DjW (u26o2;/cu');
define('LOGGED_IN_SALT',   'U T4mDn>-R<O!B6-*WjrQ2Ydq_t^XclpL1pNq:TU##[>=NF0jDo6#n;RoYN.^mEc');
define('NONCE_SALT',       'yA8OwIPha<..ht7O=pLOQ5J^j8hkWU5M^}RL!HtwjWw{)O:*|5WX8!:f.@:.{@A<');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp01_';

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
