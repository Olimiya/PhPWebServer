<?php


namespace app\check_chart\model;
use think\Db;

class CheckChartModel
{
    /**
     * 根据班级选出适当的学生，返回学生的花名册
     */
    public static function getStudentNameChart($class)
    {
        $res = Db::query("select id, name
         from student where class = ?",[$class]);
        return $res;
    }
    /**
     * 根据班级选出适当的学生，返回学生的座位表
     */
    public static function getStudentSeatingChart($class)
    {
        $res = Db::query("select id, name, location_number
         from student where class = ?",[$class]);
        return $res;
    }
    /**
     * 根据班级选出适当的学生，返回学生的通讯录
     */
    public static function getStudentPhoneNumber($class)
    {
        $res = Db::query("select id, name, phone_number
         from student where class = ?",[$class]);
        return $res;
    }
    /**
     * 根据班级选出适当的学生，返回学生的照片
     */
    public static function getStudentPhoto($class)
    {
        $res = Db::query("select id, name, photo, 
         from student where class = ?",[$class]);
        return $res;
    }



}