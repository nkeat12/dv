<?php


// ** MySQL settings ** //
/** The name of the database for WordPress */
define('DB_NAME', 'compliance');

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

define('AUTH_KEY',         'o%M=#1&54Dr4;BNKeJrsECe|zoy|rH6rb0+y*J6( ZO}MXN~e6Ph-Y&I(s|?SiuT');
define('SECURE_AUTH_KEY',  '=]R2Xhxs||/+DF1v]:G2,$TN%Y*8@pdSX!&4Jn9lG;-Kr)[UoU1lf)4aO6|B7=fL');
define('LOGGED_IN_KEY',    's&_C}yb-2.VpwE=3y^REXE6rD2p6an+%//m@V;H&7FeX,|ebi}X{Ro[UQllJbWp/');
define('NONCE_KEY',        'E5pVJ-0|ZkMP&vN}.iA ^w 0c2Xt+Ha7 txx_9|G$)vzUBo&|}NQE:>NK;0ir3Li');
define('AUTH_SALT',        'Xuw@cv&?U+?y|k5meE}-|Q%,ud<W}THDWe(j 6!s?.3hwS)OJ-xkW-.ndr,Z!MY$');
define('SECURE_AUTH_SALT', '9-e-9.S{2Sk*hzS#2k]pSvC-~$QJt7}Q8!FTxa8UAqm+JawEn`?,Fy]K->OzL|LK');
define('LOGGED_IN_SALT',   'g@J{+wk<nBHK`v_Zp_faoR+d*5Yco<~++i,qE_)=OG3<@45#RER< u5cgE{n-Che');
define('NONCE_SALT',       'Kw8a`RF9H0;+ 5%oZ/80|`eHrz5$#ZBnDf=w$`Iilw#afdmNgn)Lz]33pja)o*su');


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
