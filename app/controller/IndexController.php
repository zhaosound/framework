<?php

namespace app\controller;

use core\Framework;
use core\lib\Model;

class IndexController extends Framework
{
    public function index()
    {
        dump('index');
    }

    public function twig()
    {
        $this->assign('name', 'zhaoxiang');
        $this->display('index.html.twig');
    }

    public function medoo()
    {
        $model = new Model();
        $res = $model->select('temp', '*');
        dump($res);

    }
}