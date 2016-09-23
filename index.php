<?php
// 定义应用目录
define('APP_PATH', __DIR__ . '/application/');

//静态资源
define('IMG_SRC', dirname($_SERVER['SCRIPT_NAME']) . '/public/static/img');
define('CSS_SRC', dirname($_SERVER['SCRIPT_NAME']) . '/public/static/css');
define('JS_SRC', dirname($_SERVER['SCRIPT_NAME']) . '/public/static/js');
define('INCLUDE_SRC', dirname($_SERVER['SCRIPT_NAME']) . '/include');

// 加载框架引导文件
require __DIR__ . '/thinkphp/start.php';
