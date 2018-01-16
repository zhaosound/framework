<?php

namespace core;

use core\lib\Route;
use Twig_Environment;
use Twig_Loader_Filesystem;

class Framework
{
    private $assigns = [];

    static public function run()
    {
        $route = new Route();
        $controller = $route->controller;
        $action = $route->action;
        $file = APP . '/controller/' . $controller . 'Controller.php';
        if (is_file($file)) {
            $class = '\\' . MODULE . '\\controller\\' . ucfirst($controller) . 'Controller';
            $instance = new $class();
            $instance->$action();
        }
    }

    static public function load($class)
    {
        $class = str_replace('\\', '/', $class);
        $file = ROOT . "/" . $class . ".php";
        if (is_file($file)) {
            include $file;
        }
    }

    public function assign($name, $value)
    {
        $this->assigns[$name] = $value;
    }

    public function display($file)
    {
        $view = APP.'/views/'.$file;
        if (is_file($view)) {
            $loader = new Twig_Loader_Filesystem(APP.'/views');
            $twig = new Twig_Environment($loader);
            echo $twig->render($file, $this->assigns);
        }
    }
}