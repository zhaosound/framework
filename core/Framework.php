<?php
namespace core;

use core\lib\Route;

class Framework
{
    static public function run() {
        $route = new Route();
        $controller = $route->controller;
        $action = $route->action;
        $file = APP.'/controller/'.$controller.'Controller.php';

        if (is_file($file)) {
            $class = '\\'.MODULE.'\\controller\\'.ucfirst($controller).'Controller';
            $instance = new $class();
            $instance->$action();
        }
    }

    static public function load($class) {
        $class = str_replace('\\', '/', $class);
        $file = ROOT."/".$class.".php";
        if (is_file($file)) {
            include $file;
        }
    }
}