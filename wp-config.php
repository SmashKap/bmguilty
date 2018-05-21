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
define('DB_NAME', 'bmguilty');

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
define('AUTH_KEY',         '<r3^r:b)%VyDm~X2OCSws?Zu_y6L4hpiuqM~L1A&[b|7o5bKB.WI>_@?)kIEa%Zp');
define('SECURE_AUTH_KEY',  'O$V0u*}@<A-k#P,e)h CZM|vR;$?0>lap^++.nBcFO$SF^ZtLtbow{=bpvGx/R[]');
define('LOGGED_IN_KEY',    'gIf/!R;$mY|bDfz9Y/?[i}ng}W_zqxg/{nkBzwdaPWH>mW|d=zMorWu> .H|HQS ');
define('NONCE_KEY',        '/dGB!N-qJ7<J_y~ima(` !UuBZU&#qfPs(e/7(_J?_[ o9R2z+9i7uwb7ibLQXU?');
define('AUTH_SALT',        '@i8f(9k2#aa ?*^}]|IJwEZ.@ln+K9ZACj6$~rW3siqbQ_S~9nIotoU9#Os<G@8:');
define('SECURE_AUTH_SALT', '208[]I-cQKS)~M>OH?DUcGy6F#DF3Nko-d<u~gd)5akCr/Li[dq($Eg?:Go??)(~');
define('LOGGED_IN_SALT',   '4L9rMjg+j?b84`?AS,h#t)D>7D+[gwK&2ST5:N0|qZ$UOO_m[J_1-9xwZ3^b:<xb');
define('NONCE_SALT',       '|3{_uUB}D$tG^=l]QIKpBxrZSejH%Zm/NPh g!}NV+gYHx/z|M|qw)ICf`hd; %X');

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
