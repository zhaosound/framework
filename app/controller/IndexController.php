<?php

namespace app\controller;

use core\Framework;
use core\lib\Model;

class IndexController extends Framework
{
    public function index()
    {
        $model = new Model();
        $sql = "select * from temp";
        $res = $model->query($sql);
        dump($res->fetchAll());
    }

    public function twig()
    {
        $this->assign('name', 'zhaoxiang');
        $this->display('index.html.twig');
    }
}