<?php


// ** MySQL settings ** //
/** The name of the database for WordPress */
define('DB_NAME', 'matt');

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

define('AUTH_KEY',         'm>Ot^>0-RnLm0E|<WZW) -Q!Gks}!i%V P6=x1xH%umbSLv&}soIxWQ{c0c6#K`/');
define('SECURE_AUTH_KEY',  'ZXPS9sLohHcP|<J||o5poUolUXWU})H-X]fi^kd ?Q!5WT!R ML<$r?]O,3Q9*-E');
define('LOGGED_IN_KEY',    'leDUAZe=<dadw-+j7lnC=)VY!RM`Wwj0+yp.R!#0c=FkZFpzeQ~CGhaJRQz#%[OZ');
define('NONCE_KEY',        '5P~20LK/`{Zs1[lxFmhS[lYB^ya,o#FY$fY:!m-v)>d;<*Woq$DbT?)UOqw=76:-');
define('AUTH_SALT',        ':uk;$q+_e[Km=?H=Uy$o]3]xi*d*-swmC`Mtrf-%2`=}~5~<Jr0r~XBQaA%1(5z+');
define('SECURE_AUTH_SALT', '1ma --ajB|&[j7{e2~g qz(?zN,t8/IXS#>W?a28C.~;.3&t}% {==Vl||F4[+@2');
define('LOGGED_IN_SALT',   'w*hEEsoss+Rmg$)ZAt/s&p7;TH|At]@8|HT^oI[z+PX^},j&SNwM]Aw)-e|)&/HM');
define('NONCE_SALT',       '+p9^qMU~LqsL#MS]-y<u:sD>&S#<LxiDC64aRR&{5w))4OiT-kYal+*uA2;ZBfAy');


$table_prefix = 'wp_';


define('WP_DEBUG', true);
define('WP_DEBUG_DISPLAY', false);
define('WP_DEBUG_LOG', true);
define('SCRIPT_DEBUG', true);
define('JETPACK_DEV_DEBUG', true);



/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
