<?php

namespace app\controller;

use core\lib\Model;

class IndexController
{
    public function index()
    {
        $model = new Model();
        $sql = "select * from temp";
        $res = $model->query($sql);
        dump($res->fetchAll());
    }
}