<?php

namespace app\log_in\controller;

use app\log_in\model\LogInModel;
use think\Db;

class IndexController
{
    public function index()
    {
        return "This is app/controller/Index/index";
    }

    public function getInput($id,$kwd,$role)
    {
        echo 1;
        header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Headers: token, Origin, X-Requested-With, Content-Type, Accept, Authorization");
        header('Access-Control-Allow-Methods: POST,GET,PUT,DELETE');
        if (request()->isOptions()) {
            exit();
        }
        $result = LogInModel::checkId($id,$kwd,$role);
        return $result;
    }
    public function test($id)
    {
        $res = Db::query("select *
            from instructor where id = ?", [$id]);
        return $res;
    }
}