<?php


// ** MySQL settings ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress_trunk');

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

define('AUTH_KEY',         'c)6R5o@aO-6T/p-|<6,H%(,9LV=*XP:>3AQs/{uX%_jp@J!$o/@EZ)xsy]M4k@29');
define('SECURE_AUTH_KEY',  '2R%Ie$}-/73b2$|<>L6*5|QlMVWS0),rb?3-s0&K4,[TP<*F^^BTwsj*QbkP^2t*');
define('LOGGED_IN_KEY',    'pF?*;i6)IW^LO$}.XK<sqt@W-mWB:(Thd31LfaLsd/8>~<-0(^-y]#q{s*Y^@[Rq');
define('NONCE_KEY',        'bqTkY}7h8dt-M6bJikYpt#SUUV)aoXG|ka{<wPl[(oF-Xy.6*+(#J+wiJ<bXJ<2<');
define('AUTH_SALT',        'S1,0naKU|=[@|dDc63nOZs$*2s870+)=1>DR/m}j},{xl}GCTER-Z*82D]9,aB;G');
define('SECURE_AUTH_SALT', '9aHN:k[#]gj#GPQ6L=R|QLRAP+#d?$uyuWx;/5f8wEn$)gT6q6~`?M9+zyf]k/YR');
define('LOGGED_IN_SALT',   'u-z2#`ip8V:ZzFgR?sM{*|(@Y%T%{_UZODCEkpY=4*3kB  ><Zx[>%%2Z/-8/Nd}');
define('NONCE_SALT',       '0*oaC<*MGWr7e+N0)?$2e-6@.r;s7i|>)o`A).4_-3s*ON2Q!h&<Yn9>yK)>$LY]');


$table_prefix = 'wp_';


// Match any requests made via xip.io.
if ( isset( $_SERVER['HTTP_HOST'] ) && preg_match('/^(local.wordpress-trunk.)\d{1,3}\.\d{1,3}\.\d{1,3}\.\d{1,3}(.xip.io)\z/', $_SERVER['HTTP_HOST'] ) ) {
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
