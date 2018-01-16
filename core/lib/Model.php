<?php

namespace core\lib;


use Medoo\Medoo;

class Model extends \Medoo\Medoo
{
    public function __construct()
    {
        $params = [
            'database_type' => 'mysql',
            'database_name' => 'framework',
            'server' => 'localhost',
            'username' => 'root',
            'password' => '930219',
            'charset' => 'utf8'
        ];
        parent::__construct($params);
    }
}