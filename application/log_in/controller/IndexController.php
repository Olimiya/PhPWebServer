<?php

namespace app\log_in\controller;

use app\log_in\model\LogInModel;
class IndexController
{
    public function index()
    {
        return "This is app/controller/Index/index";
    }
    public function getInput($id,$kwd,$role)
    {
        $result = LogInModel::checkId($id,$kwd,$role);
        return $result;
    }
}