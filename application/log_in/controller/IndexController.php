<?php

namespace app\log_in\controller;

use app\log_in\model\LogInModel;
use think\Db;

class IndexController
{
    /**
     * $id是用户的账号，也是数据库中的标识符
     * $kwd是用户登录的密码
     * $role是用户的角色，学生是“student”，教师是“teacher”，管理员是“manager”
     * 返回结果是字符串，指示登录状态。如“登陆成功”，“密码错误”，“账号不存在”
     */
    public function getInput($id,$kwd,$role)
    {
        //echo 1;
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
    public function index()
    {
        return "This is app/controller/Index/index";
    }
}