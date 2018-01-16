<?php

namespace core\lib;

class Route
{
    public $controller;
    public $action;

    public function __construct()
    {
        $location = $_SERVER['REQUEST_URI'];

        if (isset($location) && $location != '/') {
            $tempArr = explode("?", trim($location, "/"));
            $route = explode("/", $tempArr[0]);
            $this->controller = $route[0];
            $this->action = isset($route[1]) ? $route[1] : 'index';

            $paramsArr = isset($tempArr[1]) ? explode("&", $tempArr[1]) : [];
            foreach ($paramsArr as $param) {
                if (strpos($param, '=')) {
                    list($key, $value) = explode("=", $param);
                    $_GET[$key] = $value;
                }
            }

        } else {
            list($this->controller, $this->action) = [
                'index',
                'index'
            ];
        }
    }
}