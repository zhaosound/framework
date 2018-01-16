<?php
//定义常量
use core\Framework;
define('ROOT', __DIR__);
define('APP', __DIR__."/app");
define('CORE', __DIR__."/core");
define('MODULE', 'app');
define('APP_DEBUG', true);

//composer自动加载
require __DIR__.'/vendor/autoload.php';

//引入文件
require CORE."/common/Common.php";
require CORE."/Framework.php";

//自动加载
spl_autoload_register('core\Framework::load');

Framework::run();