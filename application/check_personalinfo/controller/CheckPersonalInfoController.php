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
        header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Headers: token, Origin, X-Requested-With, Content-Type, Accept, Authorization");
        header('Access-Control-Allow-Methods: POST,GET,PUT,DELETE');
        if (request()->isOptions()) {
            exit();
        }
        $result = CheckPersonalInfoModel::getPersonalInfoById($id,$role);
        return $result;
    }
    public function getCourseById($id,$role)
    {
        header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Headers: token, Origin, X-Requested-With, Content-Type, Accept, Authorization");
        header('Access-Control-Allow-Methods: POST,GET,PUT,DELETE');
        if (request()->isOptions()) {
            exit();
        }
        $result = CheckPersonalInfoModel::getPersonalCourseById($id,$role);
        return $result;
    }

}