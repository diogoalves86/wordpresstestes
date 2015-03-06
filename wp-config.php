<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress_testes');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '123');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         '7GhUz>QNX+i2CN|PmRKEr^m|(6k3gRb5t]c6fHyZ+XP=qZ2:MHO6.sh$HByGHNMv');
define('SECURE_AUTH_KEY',  '|n-]D-]v@on(#+&4T4-{tCX!WU&<(<+tO}OrZIb/4lX6w,b^oYA4+[&7L<i(l^JI');
define('LOGGED_IN_KEY',    'fXVbd$<pwi={T=$`1$%yR(-i8WWqft|SWg9_@UCccae+Rw!}Q_S:0un.pT!6Ngg]');
define('NONCE_KEY',        ')e4>/ ~bzic=T}C[4$w4Y)3(TG6U)dK5g0XKI/PoP!8-xwo.N~;f(r?8,u.=BBvr');
define('AUTH_SALT',        'qA2.)wKlHO??WU#ixF(*a(&g$Br6B_f#t0Q2. cfy`?K|sRXus(AKEz|eSN,NprK');
define('SECURE_AUTH_SALT', '8Sp3X?}Q&uw7!:+t+!rFU.|*Ic|XsA:.YXs4H0/@`i2+j3gN06{zYv#~U+K4-:LJ');
define('LOGGED_IN_SALT',   '@3J4sREWXV54xVo44Br?&3Psv76 (l j22sz#L`eDc~[{i_(f_.O-Md.J,*I L=(');
define('NONCE_SALT',       '_Fi6A`yQ?.]f)-.;1ghE#%U36UDf!x~16O#j#4YZrBm0BX;]||XkAKO(rWMpBZUZ');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
