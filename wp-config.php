<?php

/** Enable W3 Total Cache */

define('WP_CACHE', true); // Added by W3 Total Cache






/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'lmdbo2016');


/** MySQL database username */
//define('DB_USER', 'lm2015wp');
define('DB_USER', 'lmdbo2016');


/** MySQL database password */
//define('DB_PASSWORD', 'nqFJxEbs7@H6');
define('DB_PASSWORD', 'nqFJxEbs7@H6');


/** MySQL hostname */
//define('DB_HOST', 'lm2015wp.db.13955083.hostedresource.com');
define('DB_HOST', 'lmdbo2016.db.11997721.hostedresource.com');


/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

//define('WP_MEMORY_LIMIT', '512MB');
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '@V-ptbB|IE( -zTH|~AA}6ju6rIfG{b+0y4M erTU!D9!E+{guv(,-fly,_Q:s!?');

define('SECURE_AUTH_KEY',  ',wLGf(|||NZ&@+kJ1Ra:lWx&2D2h4DY}lr5$v%Vi?ED|v[tv+Q!(+Js#bR[<?B9Q');

define('LOGGED_IN_KEY',    'B|+W=tqAb}UaM h7O;a3Tz)M}~~FW,]R;Dw!]K+X+!]:D+~3E9xk x,u#u+,90ix');

define('NONCE_KEY',        '@v[+j9RwSMsq.)_Q mQ8+(-*2= ^xB/p;.b:+O_Tdg[G-P.?;C[:LS:RP}5c==uY');

define('AUTH_SALT',        'lZEe!wGe9BJ~uI,O}HJ+%iS:?KMA61~;Y]64{gw[3|V|-#kqH|_5)}QLeR+R3$iU');

define('SECURE_AUTH_SALT', '##p*`O%fp,t/NHj,t$v~A]le&FIbW6Jc<S<F<n=d?W4S4Yt_b/Rof*%u33N2.VS%');

define('LOGGED_IN_SALT',   '#FP70BGa.+NS+NyT5w-TY7z-baF^y-tvlTqd9?]~n&;c0U@S5rcFm|B!TU#K>O)!');

define('NONCE_SALT',       '|]? `qJ33V.2+{ R=&{%5:x [5s+1{fG,oOqkRu/vkca-eNz+`qQt0pJOJhDz|ep');


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';


/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
