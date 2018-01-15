<?php
namespace core;

class Framework
{
    static public function run() {
        dump('framework run');
        $route = new Route();
        $route->index();
    }

    static public function load($class) {
        $class = str_replace('\\', '/', $class);
        $file = ROOT."/".$class.".php";
        if (is_file($file)) {
            include $file;
        }
    }
}