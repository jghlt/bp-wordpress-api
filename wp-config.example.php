<?php

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
    define('ABSPATH', dirname(__FILE__) . '/');

/** Load vendor files */
require_once(ABSPATH . '../../vendor/autoload.php');

/** Load dotenv file */
(new \Dotenv\Dotenv(ABSPATH .'../../'))->load();

/** Location of your WordPress configuration. */
require_once(ABSPATH . '../../config/config.php');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
