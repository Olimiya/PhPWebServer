<?php

namespace app\entry_grade\model;

use think\Db;

class EntryGradeModel
{
    /**
     * 根据班级选出适当的学生，返回学生的基本信息
     * 与controller的函数是相对应的，参数和返回值一致，不再赘述
     */
    public static function insertGrade($id, $course_id,$grade)
    {
        Db::table('attend')
            ->where('student_id', $id)
            ->where('course_id',$course_id)
            ->update(['grade' => $grade]);
        //$res = Db::query("select grade
        //    from attend where [student_id = ?,course_id = ?]", [$id,$course_id]);
        $res = Db::table('attend')
            ->where('student_id', $id)
            ->where('course_id',$course_id)
            ->select('grade');
        return $res;
    }
    public static function checkGrade($course_id)
    {
        echo 3;
        $res = Db::table('attend')
            ->where('course_id',$course_id)
            ->select('grade');
        echo 4;
        return $res;
    }
}
