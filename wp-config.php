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
define('DB_NAME', 'balance6');

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
define('AUTH_KEY',         'D{n^V$o;BRR~5~!,`4e%`DAu@O^@KI/(&G=S%t)0eF:9G:D2Vf3KC(vZk!GwzK~j');
define('SECURE_AUTH_KEY',  '9Fh ;Msc ?q?*ww?GOm8K<:dodn@;LF05 #Y bOt3#J]{Re5X[Q+el[;eN2s~G+K');
define('LOGGED_IN_KEY',    'kW[fp/;ERgyRI}!nu)Vha%R5)nSM.J6%aca:V^d~~HqYD_}p#&R HWL@f3J+;HTG');
define('NONCE_KEY',        'f&EZ~.2(,`|?^$KD=d7,d68cCRQFWFE/nmq 1 %}z8V4thme(%acOrvgrs<R=H~<');
define('AUTH_SALT',        'rHH!I~& 0;b*kKr~H_-2C.<Nio=)w7Cv}zC(G+Y6e}ST3 =F<]aN/5s6]7Jg70*A');
define('SECURE_AUTH_SALT', 'N;a$xi.I*1ig o6jfZs+N69RqS3e)^]rr^4Kaz5uejOOeA<_8ePr/J++ug_E(R=3');
define('LOGGED_IN_SALT',   '#OSUeK,}sBWwkYmg$8D(*eLN>h#sbyAPR3<5Mk;;|d#vZo&nlqBJ@UhR;j={f0|2');
define('NONCE_SALT',       'k<gBczQ(|3v~R`/)S}r#.xM@CVu0#yF08wrl5FZgD^Pd#fbaNY J|Epe|gswqs~v');

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
