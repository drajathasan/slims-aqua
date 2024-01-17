<?php
/**
 * Plugin Name: Aqua
 * Plugin URI: https://github.com/drajathasan/slims-aqua
 * Description: SLiMS admin template
 * Version: 1.0.0
 * Author: Drajat Hasan
 * Author URI: https://t.me/drajathasan
 */
use SLiMS\Plugins;

define('AQUA_BASENAME', __DIR__ . DS);
define('AQUA_LIB', AQUA_BASENAME . 'lib' . DS);
define('AQUA_PAGES', AQUA_BASENAME . 'pages' . DS);
define('AQUA_THEMES', AQUA_BASENAME . 'themes' . DS);
define('AQUA_WEB_BASE', SWB . 'plugins/'  . basename(AQUA_BASENAME) . '/');

require __DIR__ . '/vendor/autoload.php';

Plugins::hook(Plugins::ADMIN_SESSION_AFTER_START, function() {
    global $sysconf,$sanitizer,$dbs;

    $traces = debug_backtrace();
    $trace = array_pop($traces);
    $pathInfo = pathinfo($trace['file']);
    $path = str_replace(SB,  AQUA_PAGES, $pathInfo['dirname']) . DS . $pathInfo['basename'];

    if (file_exists($path)) {
        include $path;
        exit;
    }
});