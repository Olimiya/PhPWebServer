<?php


namespace app\manager_op\controller;


use app\manager_op\model\ManagementModel;
class ManagementController
{
    public function index()
    {
        return "This is app\manager_op\controller\ManagementController";
    }

    /**
     * 创建课程，以及学生、老师、课程之间的授课关系
     * @param $student_id:学生的id
     * @param $course_id:课程id
     * @param $course_name:课程名称
     * @param $instructor_id:教师的id
     * @return string:操作是否成功"yes"，否则会抛出异常，不会返回结果
     */
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

    /**
     * @param $role:添加成员的角色
     * @param $id:成员的id
     * @param $name:成员的姓名
     * @param $class:成员所在的班级
     * @return string:操作结果是否成功的说明
     */
    public function insertMember($role,$id,$name,$class)
    {
        $result = ManagementModel::insertMember($role,$id,$name,$class);
        return $result;
    }
}