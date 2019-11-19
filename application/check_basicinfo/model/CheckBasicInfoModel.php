<?php


namespace app\check_basicinfo\model;
use think\Db;

class CheckBasicInfoModel
{
    /**
     * 根据班级选出适当的学生，返回学生的基本信息
     */
    public static function getStudentBasicInfoByClass($class)
    {
        $res = Db::query("select id, name, duty from student where class = ?",[$class]);
        return $res;
    }
    /**
     * 根据课程选出适当的学生，返回学生的基本信息
     */
    public static function getStudentBasicInfoByCourse($course_name)
    {
        $res = Db::query("select id, name, duty from student where class = ?",[$class]);
        return $res;
    }
}