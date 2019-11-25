<?php
/**
 * Created by PhpStorm.
 * User: 卢中天
 * Date: 2019/11/20
 * Time: 10:40
 */

namespace app\check_personalinfo\model;
use think\Db;

class CheckPersonalInfoModel
{
    /**
     * 根据id返回教师或个人的基本信息
     */
    public static function getPersonalInfoById($id,$role)
    {
        if($role == "student")
        {
            $res = Db::query("select id, name, photo, phone_number, introduction, duty, sequence_number, location_number
         from student where id = ?",[$id]);
        }
        else if ($role == "teacher")
        {
            $res = Db::query("select id, name,class from instructor where id = ?",[$id]);
        }
        else
        {
            $res = "RoleError";
        }

        return $res;
    }
    /**
     * @param $id
     * @param $role:“teacher”或者“student”
     * @return mixed|string:课程id的列表，json格式
     */
    public static function getPersonalCourseById($id,$role)
    {
        if($role == "student")
        {
            $res = Db::query("select course_id
         from attend where student_id = ?",[$id]);
        }
        else if ($role == "teacher")
        {
            $res = Db::query("select course_id from teach where instructor_id = ?",[$id]);
        }
        else
        {
            $res = "RoleError";
        }

        return $res;
    }
}