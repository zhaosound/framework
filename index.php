<?php
//定义常量
define('SRC_PATH', __DIR__."/app");
define('APP_DEBUG', true);

//composer自动加载
require __DIR__.'/vendor/autoload.php';

//自动加载
//spl_autoload_register('');
$testArr = [1,2,3,4,5,6];
dump($testArr);


