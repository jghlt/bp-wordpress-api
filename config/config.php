<?php

// database
define('DB_NAME', getenv('DB_NAME'));
define('DB_USER', getenv('DB_USER'));
define('DB_PASSWORD', getenv('DB_PASSWORD'));
define('DB_HOST', getenv('DB_HOST'));
define('DB_CHARSET', getenv('DB_CHARSET'));
define('DB_COLLATE', getenv('DB_COLLATE'));

$table_prefix  = getenv('DB_PREFIX');

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
define('WP_POST_REVISIONS', getenv('WP_POST_REVISIONS'));
define('AUTOSAVE_INTERVAL', getenv('AUTOSAVE_INTERVAL'));
define('DISABLE_WP_CRON', getenv('DISABLE_WP_CRON'));
define('DISALLOW_FILE_MODS', getenv('DISALLOW_FILE_MODS'));
define('DISALLOW_FILE_EDIT', getenv('DISALLOW_FILE_EDIT'));
define('WP_AUTO_UPDATE_CORE', getenv('WP_AUTO_UPDATE_CORE'));
define('WP_HTTP_BLOCK_EXTERNAL', getenv('WP_HTTP_BLOCK_EXTERNAL'));
define('AUTOMATIC_UPDATER_DISABLED', getenv('AUTOMATIC_UPDATER_DISABLED'));

// debugging
define('WP_DEBUG', getenv('WP_DEBUG'));
define('WP_DEBUG_LOG', getenv('WP_DEBUG_LOG'));
define('WP_DEBUG_DISPLAY', getenv('WP_DEBUG_DISPLAY'));

// cache
define('WP_CACHE', getenv('WP_CACHE'));
define('WPCACHEHOME', dirname( ABSPATH ) . '/app/plugins/wp-super-cache/');

// salts
// https://api.wordpress.org/secret-key/1.1/salt/
define('AUTH_KEY',         '');
define('SECURE_AUTH_KEY',  '');
define('LOGGED_IN_KEY',    '');
define('NONCE_KEY',        '');
define('AUTH_SALT',        '');
define('SECURE_AUTH_SALT', '');
define('LOGGED_IN_SALT',   '');
define('NONCE_SALT',       '');
