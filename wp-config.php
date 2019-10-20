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
define('DB_NAME', 'blog');

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
define('AUTH_KEY',         '1^skOlU%ToK6nPe)=<Q{cTGNDJo]h&jBw+N/l}!HAh]w|!Z{DAjqbpq._gad(YR4');
define('SECURE_AUTH_KEY',  'qcM:4RCw|VQ_YxSUq3E@&xP0^zl+YI:T mNiJ/EV~`N.Ej@bVo$w~^[m7-(VD7RZ');
define('LOGGED_IN_KEY',    '##a;j}#xf3Wm}=T=(e_8_lR7kg|OP G*O$(S~iO]/!=CS@b$7:%Rt4G..4B{!dO[');
define('NONCE_KEY',        'YY``uRma*7NBE=:(IPN@`on0&HK6eE%GwW-Ic!fpdmM:f9[k,}^0`B&9uGz@?p>:');
define('AUTH_SALT',        'I_,JI9!}A.:O{}Re.o6]rf0._Wv7w69P!Mq/rhwZP7y<p0Wa|2bA;|A 3LbQ`*;&');
define('SECURE_AUTH_SALT', '=?WysWKkFD6/@xRFe}U|K(/~Sl2?ObF7cXB,V1f;z6p2|q?OFPP(Ic|o|vSI-KJ6');
define('LOGGED_IN_SALT',   'nVN&rf~,ARjOc(KQe[nHpYf$eQ#)<7@yxs&O8OqN}Y~P|5$H[![X=Gwx|U)0*Br#');
define('NONCE_SALT',       'CSsjTCwmn*7wloHTG;^}fph;[m.T0nsQmu{<S~YstAMCtp1{nuPvvhh@*S<qx37`');

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
