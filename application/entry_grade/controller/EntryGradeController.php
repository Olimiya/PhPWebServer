<?php

namespace app\entry_grade\controller;
use app\entry_grade\model\EntryGradeModel;

class EntryGradeController
{
    public function index($data)
    {
        echo $data;
        //return "This is app/controller/Index/index";
    }
    /**
     * 根据选定的学生以及填入的成绩进行修改
     */
    public function inputGrade($id,$course_id, $grade)
    {
        header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Headers: token, Origin, X-Requested-With, Content-Type, Accept, Authorization");
        header('Access-Control-Allow-Methods: POST,GET,PUT,DELETE');
        if (request()->isOptions()) {
            exit();
        }
        $newGrade = EntryGradeModel::insertGrade($id, $course_id,$grade);
        return $newGrade;
    }

    /**
     * @param $course_id 课程编号
     * @return 该老师所教的该课程所有学生以及成绩的查询结果
     */
    public function checkGrade($course_id)
    {
        header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Headers: token, Origin, X-Requested-With, Content-Type, Accept, Authorization");
        header('Access-Control-Allow-Methods: POST,GET,PUT,DELETE');
        if (request()->isOptions()) {
            exit();
        }
        $grade = EntryGradeModel::checkGrade($course_id);
        return $grade;
    }
}