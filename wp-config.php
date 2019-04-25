<?php
/**
 * This file is generated by WP Starter package, and contains base configuration of the WordPress.
 *
 * All the configuration constants used by WordPress are set via environment variables.
 * Default settings are provided in this file for most common settings, however database settings
 * are required, you can get them from your web host.
 *
 * A sample .env file (.env.example) should be placed in the root of your project, rename it to .env
 * and edit it according to your needs.
 */

/**
 * Composer autoload.
 */
require_once realpath(__DIR__.'/vendor'.'/autoload.php');

/**
 * A reference to `.env` folder path.
 */
define('WPSTARTER_PATH', __DIR__);

/**
 * Configuration constants.
 *
 * Use environment variables to set WordPress constants.
 * Mandatory settings:
 * - DB_NAME
 * - DB_USER
 * - DB_PASSWORD
 *
 * @var array $env All the variables stored in environment variables
 */
$env = WCM\WPStarter\Helpers::settings(__DIR__, '.env');

global $table_prefix;
array_walk($env, function ($value, $name) {
    switch ($name) {
        case 'DB_TABLE_PREFIX':
            $GLOBALS['table_prefix'] = preg_replace('#[^\w]#', '', $value);
            break;
        default:
            defined($name) or define($name, $value);
            break;
    }
});

/**
 * Set optional database settings if not already set
 */
defined('DB_HOST')    or define('DB_HOST',    'localhost');
defined('DB_CHARSET') or define('DB_CHARSET', 'utf8');
defined('DB_COLLATE') or define('DB_COLLATE', '');

/**
 * Set WordPress Database Table prefix if not already set.
 *
 * @global string $table_prefix
 */
if (! isset($table_prefix) || empty($table_prefix)) {
    $table_prefix = 'wp_';
}

/**
 * Set unique authentication keys if not already set via environment variables.
 * // all keys were moved to environment variables
 */

/**
 * Environment-aware settings. Be creative, but avoid to set sensitive settings here.
 */
$environment = getenv('WORDPRESS_ENV');
switch ($environment) {

    case 'development':
        defined('WP_DEBUG')         or define('WP_DEBUG',         true);
        defined('WP_DEBUG_DISPLAY') or define('WP_DEBUG_DISPLAY', true);
        defined('WP_DEBUG_LOG')     or define('WP_DEBUG_LOG',     false);
        defined('SAVEQUERIES')      or define('SAVEQUERIES',      true);
        defined('SCRIPT_DEBUG')     or define('SCRIPT_DEBUG',     true);
        break;

    case 'staging':
        defined('WP_DEBUG')         or define('WP_DEBUG',         true);
        defined('WP_DEBUG_DISPLAY') or define('WP_DEBUG_DISPLAY', false);
        defined('WP_DEBUG_LOG')     or define('WP_DEBUG_LOG',     true);
        defined('SCRIPT_DEBUG')     or define('SCRIPT_DEBUG',     true);
        break;

    case 'production':
    default:
        defined('WP_DEBUG')         or define('WP_DEBUG',         false);
        defined('WP_DEBUG_DISPLAY') or define('WP_DEBUG_DISPLAY', false);
        defined('WP_DEBUG_LOG')     or define('WP_DEBUG_LOG',     false);
        defined('SCRIPT_DEBUG')     or define('SCRIPT_DEBUG',     false);
        break;
}

/**
 * Fix HTTPS behind load balancers.
 *
 * @link https://core.trac.wordpress.org/ticket/31288
 */
if (
    isset($_SERVER['HTTP_X_FORWARDED_PROTO'])
	&& 'https' === strtolower($_SERVER['HTTP_X_FORWARDED_PROTO'])
) {
	$_SERVER[ 'HTTPS' ] = 'on';
}

/**
 * Set WordPress paths and URLs if not set via environment variables.
 */
if (! defined('WP_HOME')) {
    $server = filter_input_array(INPUT_SERVER, array(
        'HTTPS'       => FILTER_SANITIZE_STRING,
        'SERVER_PORT' => FILTER_SANITIZE_NUMBER_INT,
        'SERVER_NAME' => FILTER_SANITIZE_URL,
    ));
    $secure = in_array((string) $server['HTTPS'], array('on', '1'), true);
    $scheme = $secure ? 'https://' : 'http://';
    $name   = $server['SERVER_NAME'] ? : 'localhost';
    define('WP_HOME', $scheme.$name);
}

defined('ABSPATH')    or define('ABSPATH',    realpath(__DIR__.'/wordpress'));
defined('WP_SITEURL') or define('WP_SITEURL', rtrim(WP_HOME, '/').'/wordpress');

/**
 * Define content constants only if needed, or network install screen will complain for no reason
 */
$custom_content_dir = realpath(__DIR__.'/wp-content') !== realpath(ABSPATH.'/wp-content');
if ($custom_content_dir && ! defined('WP_CONTENT_DIR')) {
    define('WP_CONTENT_DIR', realpath(__DIR__.'/wp-content'));
}
if ($custom_content_dir && ! (defined('MULTISITE') && MULTISITE) && ! defined('WP_CONTENT_URL')) {
    define('WP_CONTENT_URL', rtrim(WP_HOME, '/').'/wp-content');
}

/**
 * Clean up.
 */
unset($env, $environment, $server, $secure, $scheme, $name, $custom_content_dir);

/**
 * Allows to load MU plugins in subfolders.
 */
WCM\WPStarter\Helpers::addHook(
    'muplugins_loaded',
    new WCM\WPStarter\MuLoader\MuLoader(),
    PHP_INT_MAX,
    0
);

/**
 * Register default themes inside WordPress package wp-content folder.
 */
WCM\WPStarter\Helpers::addHook('plugins_loaded', function () {
    WCM\WPStarter\Helpers::loadThemeFolder(true);
}, 0);

/**
 * Sets up WordPress vars and included files.
 */
require_once ABSPATH.'/wp-settings.php';
