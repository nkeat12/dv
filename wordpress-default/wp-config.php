<?php


// ** MySQL settings ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress_default');

/** MySQL database username */
define('DB_USER', 'wp');

/** MySQL database password */
define('DB_PASSWORD', 'wp');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('AUTH_KEY',         '8{eWHet1B-PH*AZJ-<Qt%t~)!K5kJQmZz>#>kA{}&P]U_2xL^~_IN~Qf}{xZj+7R');
define('SECURE_AUTH_KEY',  'WB|Wul7MX}-Y=%)Nq5`/AUCX!A>,|4eI&Y+]&f,B-^^,b-6~#Z6Y4b5DtUpO9]8f');
define('LOGGED_IN_KEY',    'x/x#Vo[VR0WA)S,uM~aJ@|K+P0[f0^xzY*XR~!w_S)cC]qZqg??J%JHhx[P@#[j0');
define('NONCE_KEY',        '4Zv7Y0EUB+n+>,4<K|4fP+6XlV=b_8srbk+|KWV;Y>1+`JXwM-;d^t[Q_u,kwMft');
define('AUTH_SALT',        '-?(Lf=[D1M|AUM,T<ZTx,+tbsEeP%-![e4K@*Dj}]J>@vL&TBm]}R$_xWn|L@x+T');
define('SECURE_AUTH_SALT', '6D;-J.$|k?6UhaUFqFTI |R[,[zkBq|q>2S %tSA)^7 >qM<@zS+dI@{}(tiW$`+');
define('LOGGED_IN_SALT',   '>R 7VHu  h,ZuVt|XCge6/^M$~A8Gf$)#x/fU@tv!h-PNB+<lrUZB]V3BHx|tbN>');
define('NONCE_SALT',       'l= gX.|#DJ$gn&#kz12]YmtaTP-CZ$d?CO+1jAh<oR$a>Q9u;t!GXfq|^39tjI${');


$table_prefix = 'wp_';


// Match any requests made via xip.io.
if ( isset( $_SERVER['HTTP_HOST'] ) && preg_match('/^(local.wordpress.)\d{1,3}\.\d{1,3}\.\d{1,3}\.\d{1,3}(.xip.io)\z/', $_SERVER['HTTP_HOST'] ) ) {
define( 'WP_HOME', 'http://' . $_SERVER['HTTP_HOST'] );
define( 'WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST'] );
}

define( 'WP_DEBUG', true );



/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
