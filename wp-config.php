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
define('DB_NAME', 'amassi_final');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '^8-/j|x&%uWGv^-%4PMjvRw8vjn60zx..RNX{FI}m7^2VJUSw&m+m;8O+w(5QAwz');
define('SECURE_AUTH_KEY',  ']8kU4k=.B|;[:cWN=}ZhD|cGOAgI6I<U`#eJ5K?S2~c5E<6!ZJw3$BBRn`cv^AG&');
define('LOGGED_IN_KEY',    '2A-XB:0htaPIJ[1u6FB6UDVD%+LyI84pY(rn{bL9W-2@,@z6i6x2h?U@]X,VM`9e');
define('NONCE_KEY',        '~O}Qd{[`foFV;-yBQDk%%k.oLVRV)NOJ>i_n]oTNHa1|*HE=+=scH6!FK]#KF72X');
define('AUTH_SALT',        'g%lFX;*W#1x#j@`UM|D0A+aq0A:{5oj)L]yTtbT7R]NJcEk:(AJb >zHs vUw8_I');
define('SECURE_AUTH_SALT', 'L9G)ru{+7N(WQDln-2Jf-^bOjbdX#N#LId_!CGjJE~v {e&QQ&;5:%d]B,e!52U>');
define('LOGGED_IN_SALT',   '{N9bCjesqZeCp_n_:P=d5%Fjdu8FrcWObUd:W7Hy05e<q..GtxdR`Ng&p RE??)J');
define('NONCE_SALT',       'Fh974r58fHqe.90jp=s?wd?WEJ#yXUx$H|U(!6D?SJX,aXtnmXZ-E?,d$Or6^7Eq');

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
