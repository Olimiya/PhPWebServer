<?php
/**
 * Created by PhpStorm.
 * User: 卢中天
 * Date: 2019/11/20
 * Time: 11:34
 */

namespace app\modify_personalinfo\controller;
use app\modify_personalinfo\model\ModifyPersonalInfoModel;

class ModifyPersonalInfoController
{
    public function index($data)
    {
        echo $data;
        //return "This is app/controller/Index/index";
    }

    /**
     * 修改信息
     * 教师只能修改密码
     */
    public function modifyInfo($role, $id, $kwd , $phone_number, $introduction, $duty, $sequence_number, $location_number)
    {
        header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Headers: token, Origin, X-Requested-With, Content-Type, Accept, Authorization");
        header('Access-Control-Allow-Methods: POST,GET,PUT,DELETE');
        if (request()->isOptions()) {
            exit();
        }
        if($role == "student")
        {
            ModifyPersonalInfoModel::modifyStudentPersonalInfo( $id,$kwd , $phone_number, $introduction, $duty, $sequence_number, $location_number);
        }
        else if ($role == "teacher")
        {
              ModifyPersonalInfoModel::modifyInstructorPersonalInfo($id, $kwd);
        }
    }

}