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
        header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Headers: token, Origin, X-Requested-With, Content-Type, Accept, Authorization");
        header('Access-Control-Allow-Methods: POST,GET,PUT,DELETE');
        if (request()->isOptions()) {
            exit();
        }
        $result = LogIn::checkId($id,$kwd);
        return $result;
    }
}