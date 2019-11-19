<?php

namespace app\entry_grade\model;

use think\Db;

class EntryGradeModel
{
    /**
     * 根据班级选出适当的学生，返回学生的基本信息
     */
    public static function insertGrade($id, $grade)
    {
        Db::table('attend')
            ->where('student_id', $id)
            ->update(['grade' => $grade]);
        $res = Db::query("select grade
            from attend where student_id = ?", [$id]);
        return $res;
    }
}
