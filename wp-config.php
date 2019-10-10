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
define('DB_NAME', 'ee');

/** MySQL database username */
define('DB_USER', 't1');

/** MySQL database password */
define('DB_PASSWORD', 'aa');

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
define('AUTH_KEY',         '0/{*2N|kLn;pfhvc%E`!}2~VY8)zrvNnC**#0X{eV[+0p>%39umXA1=xXR{?|[Wl');
define('SECURE_AUTH_KEY',  'YxuS#%Q-b1yiF<lI%IP,Iu%pSn.w;e/8XzBK-PcSVl{(H1g[@(LX&iY]eBO10(}F');
define('LOGGED_IN_KEY',    '1},Nb_vplsi6ex~2r7M~xJiB`lm75C[c?uIfU$VF8n/iIN37@#tA,Wc1J7@F.*`L');
define('NONCE_KEY',        'Gn*&.adH8Rk&/u2YvB117lnoM0X/8Sr]?-llU3%7LHOk43Zq@Y$u_=F]Cf)zurZr');
define('AUTH_SALT',        '=BURT///;pi?:87ajmC;:cQm(ej(n-MAc112jEQDh.YNy{~+UICZG:y`TW$k`|BB');
define('SECURE_AUTH_SALT', ')YM3r*:XfM/Sn?s7SGt@]:kv~Imk)f&O,?A%9RUEOtN#hi|b<wQh7:g#f5-|O(fo');
define('LOGGED_IN_SALT',   '~$7q1?e&k[l?sdl+p^m;EhW~H[~*n)Ppoci7RRv@7lNk6WV@tLVO0UmB2,nHR$>!');
define('NONCE_SALT',       ' l3qi_3@!{#Qqpphm?6;NyrC-&Iyz(vZ2*;5xoli0Xve9&pCiSSBH.<tGrkB`0%`');

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
