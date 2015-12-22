<?php


// ** MySQL settings ** //
/** The name of the database for WordPress */
define('DB_NAME', 'lsu');

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

define('AUTH_KEY',         '4v&AU[Fc%b=`QBS_2<$,` I-[5PWA`eLo`rVM|^+vALo b=7*AZZlP4i~&4Z4t@j');
define('SECURE_AUTH_KEY',  ':p@C`vQHpRi-!]%H#+W+nyWcgG$Ex!L[$}pqqiSeF3aL`Ij!(X2moz;k*],9^ap-');
define('LOGGED_IN_KEY',    'K~X9KpBea</@8QD4i6st+GB):M&*||vyO:]H[ynyy7Ya6>2bZzP$C-Bm`<38iK2_');
define('NONCE_KEY',        '2>fmE--hN6Fzo4sZI&(?M*M5DnbbEO4h}*64` H>2r|b|E r|eqA-juV-8O=|Zg.');
define('AUTH_SALT',        '>_,4}09=gs@9@ozt+3 :7@SjL#7#(&zt]c:^:GJ%I_45Gsgl]+c`-)IDJYJ`(<NV');
define('SECURE_AUTH_SALT', 'BfQTIEgQ%49qC<A=rW%jRG@4B))d9nm#b--bhgK~?Eg|MbITVme26|kPK`1:0Piv');
define('LOGGED_IN_SALT',   '7o<#j{bn,+X6**Gk<JMLIWQvM=p~CHb* @>kBo+O{ltp0,Y<GJUD*euO5Xenmgl@');
define('NONCE_SALT',       'Ia(?6G-zK}_wF6t b+}f-E?D1hgNOy{W_wJ#h:B1ziN^-w47_&?+o-nBuMHuSzDB');


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
