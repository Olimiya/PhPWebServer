<?php

namespace app\check_basicinfo\controller;
use app\check_basicinfo\model\CheckBasicInfoModel;

class CheckBasicInfoController
{
    public function index($data)
    {
        echo $data;
        //return "This is app/controller/Index/index";
    }
    /**
     * 班主任根据自己所在班级查询相应的学生
     */
    public function getInfoByClass($class)
    {
        $result = CheckBasicInfoModel::getStudentBasicInfoByClass($class);
        return $result;
    }
}