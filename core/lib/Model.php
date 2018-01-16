<?php

namespace core\lib;


class Model extends \PDO
{
    public function __construct()
    {
        $dsn = 'mysql:host=localhost;dbname=framework';
        $username = 'root';
        $passwd = '930219';

        try {
            parent::__construct($dsn, $username, $passwd);
            dump('ok');
        } catch (\Exception $e) {
            dump($e->getMessage());
        }
    }
}