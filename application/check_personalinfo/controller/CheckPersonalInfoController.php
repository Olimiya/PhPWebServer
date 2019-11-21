<?php
/**
 * Created by PhpStorm.
 * User: 卢中天
 * Date: 2019/11/20
 * Time: 10:35
 */

namespace app\check_personalinfo\controller;
use app\check_personalinfo\model\CheckPersonalInfoModel;

class CheckPersonalInfoController
{
    public function index($data)
    {
        echo $data;
        //return "This is app/controller/Index/index";
    }

    /**
     * 查询个人信息
     */
    public function getInfoById($id,$role)
    {
        $result = CheckPersonalInfoModel::getPersonalInfoById($id,$role);
        return $result;
    }
}