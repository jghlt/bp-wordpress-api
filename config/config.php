<?php

// database
define('DB_NAME', getenv('DB_NAME'));
define('DB_USER', getenv('DB_USER'));
define('DB_PASSWORD', getenv('DB_PASSWORD'));
define('DB_HOST', getenv('DB_HOST'));
define('DB_CHARSET', getenv('DB_CHARSET'));
define('DB_COLLATE', getenv('DB_COLLATE'));

$table_prefix  = 'wp_';

// urls
// * site url must end with '/wp' or logins won't work
define('WP_HOME', getenv('WP_HOME'));
define('WP_SITEURL', getenv('WP_SITEURL'));

// content paths
define('WP_CONTENT_URL', WP_HOME . '/app');
define('WP_CONTENT_DIR', dirname( ABSPATH ) . '/app');
define('WP_LANG_DIR', WP_CONTENT_DIR . '/languages');
define('WPMU_PLUGIN_DIR', WP_CONTENT_DIR . '/mu-plugins');
define('WPMU_PLUGIN_URL', WP_CONTENT_URL . '/mu-plugins');

// theme
define('WP_DEFAULT_THEME', getenv('DEFAULT_THEME'));

// settings
define('WP_POST_REVISIONS', 3);
define('AUTOSAVE_INTERVAL', 240);
define('DISABLE_WP_CRON', false);
define('DISALLOW_FILE_MODS', true);
define('DISALLOW_FILE_EDIT', true);
define('WP_AUTO_UPDATE_CORE', false);
define('WP_HTTP_BLOCK_EXTERNAL', false);
define('AUTOMATIC_UPDATER_DISABLED', true);

// debugging
define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', true);

// cache
define('WP_CACHE', false);
define('WPCACHEHOME', dirname( ABSPATH ) . '/app/plugins/wp-super-cache/');

// salts
// https://api.wordpress.org/secret-key/1.1/salt/
define('AUTH_KEY',         'c6,Uc(19$n$!@i&Sg3y^B=z. A6,JdQV~l@[,{i5#Sj)a@Ez{LGTh^b{~Xbh&iJd');
define('SECURE_AUTH_KEY',  ':AQ-[;u]]ruO!u3<~-J])G)?~^r$GT&R5EV,^NzTs|(-&a7-5VQs{i-#?~_&>]&)');
define('LOGGED_IN_KEY',    '//JW_2(D6CH8`2^{A2F]kd*gmiY|$IToW1 stGG)VvGI(~kG%Y*UiF@m(kvIp[~c');
define('NONCE_KEY',        'sQ@-Q:SMAb8_n{|kKVcthX3r~iPb,}p2Gq}_z;qDd(.buC%l?cZG-Z/+!v66bRp6');
define('AUTH_SALT',        '`f~)l1^^&No*Ggtpwl0S]l/OJqA--ZAWn`t1Vh)mF+!EU2$+- J*W_*E<W*Z%T}a');
define('SECURE_AUTH_SALT', '~_[A;L7;dV7AEk>`sV,/^ya:J(k`/0L/+.{klJ{R-:;d`ojr>~=+z#amO!.}0q)K');
define('LOGGED_IN_SALT',   'g&4L2A|sJIv@DJ4 >z9-1%)1#d.<C-=Xrqu%zA#g8u,|p(icYh75U}g~%nO(%pdn');
define('NONCE_SALT',       '0_62insTQK,X;c;+|z-u/N%w[0Z[=#LhZ$i!Q$O-xg_@aJX]:e`_&%S3{YHy,Y#j');
