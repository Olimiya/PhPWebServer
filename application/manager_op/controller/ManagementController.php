<?php


namespace app\manager_op\controller;


use app\manager_op\model\ManagementModel;
class ManagementController
{
    public function index()
    {
        return "This is app\manager_op\controller\ManagementController";
    }
    public function insertCourse($student_id,$course_id,$course_name,$instructor_id)
    {
        header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Headers: token, Origin, X-Requested-With, Content-Type, Accept, Authorization");
        header('Access-Control-Allow-Methods: POST,GET,PUT,DELETE');
        if (request()->isOptions()) {
            exit();
        }

        $result = ManagementModel::insertCourse($student_id,$course_id,$course_name,$instructor_id);
        return $result;
    }

    public function insertMember($role,$id,$name,$class)
    {
        $result = ManagementModel::insertMember($role,$id,$name,$class);
        return $result;
    }
}