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
define('DB_NAME', 'static');

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
define('AUTH_KEY',         'Y1El`9HkHW+@ 2b>~+Qu$Xe|4!ZUb%0n$E<*Kh}$0K=%Nw]hh/:%?m:af^rJkSWP');
define('SECURE_AUTH_KEY',  '*vgU|:=U*iFuE@@VF[JAl+*YgL*ubh*.@%C `O f4]5Sm;T2wErmjU|v;rttW0u@');
define('LOGGED_IN_KEY',    'aPDU]4*I!;Lvhb,=2T<*m[)xo&jN_:_w%$Xl|.~(|-QN6xSrd9IYI?3MNJ#M+[a?');
define('NONCE_KEY',        '%::?B#+;uROJ{ivr%.;CK{<Kzpo>`upxP2S*pW~$*rTyk[hg2mYQE^r(ZU9I %7?');
define('AUTH_SALT',        '>DIFprpFyLwwv7!;Z2/HFPz&lk&pioK]H#1b:`DHjOb?ni5sx:]m+JDL&*YF73.#');
define('SECURE_AUTH_SALT', 'jS R3uFP`/=*RzJ g-2Su^a!WPe1EyHy$p&TgT=-_d #R<OQwDj6^p8+V_:O&}^X');
define('LOGGED_IN_SALT',   'Prd9/Dt+OpaSJ#4d0Y{|kCPG&8,Si)SKI0?Tl|Meoaf!1F8WMlWI.,wrn[M38NM#');
define('NONCE_SALT',       'p5 PEX],dFt4gRmO?hE9@HUS Vw`%1z~JwA@U(K?;xpyXZ>bQN,,G_=t^%4Rn!?>');

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
