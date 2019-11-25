<?php

namespace app\check_basicinfo\controller;
use app\check_basicinfo\model\CheckBasicInfoModel;

class CheckBasicInfoController
{
    /**
     * 班主任根据自己所在班级查询相应的学生
     * 参数为class班级，返回该班级所有学生的查询结果
     */
    public function getInfoByClass($class)
    {
        header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Headers: token, Origin, X-Requested-With, Content-Type, Accept, Authorization");
        header('Access-Control-Allow-Methods: POST,GET,PUT,DELETE');
        if (request()->isOptions()) {
            exit();
        }
        $result = CheckBasicInfoModel::getStudentBasicInfoByClass($class);
        return $result;
    }
    public function index($data)
    {
        echo $data;
        //return "This is app/controller/Index/index";
    }
}