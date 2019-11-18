<?php


namespace app\user_info\controller;


class IndexController
{
    public function index()
    {
        return "This is app/user_info/controller/IndexController/index";
    }
    public function getInput($id,$kwd)
    {
        $result = LogIn::checkId($id,$kwd);
        return $result;
    }
}