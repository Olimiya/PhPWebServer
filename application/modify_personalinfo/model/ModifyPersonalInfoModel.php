<?php
/**
 * Created by PhpStorm.
 * User: 卢中天
 * Date: 2019/11/20
 * Time: 11:35
 */

namespace app\modify_personalinfo\model;
use think\Db;

class ModifyPersonalInfoModel
{

    /**
     * 修改学生的基本信息
     */
    public static function modifyStudentPersonalInfo( $id,$kwd ,$photo, $phone_number, $introduction, $duty, $sequence_number, $location_number)
    {
        Db::query("update student set kwd = ? where id = ?",[$kwd,$id]);
        Db::query("update student set photo = ? where id = ?",[$photo,$id]);
        Db::query("update student set phone_number = ? where id = ?",[$phone_number,$id]);
        Db::query("update student set introduction = ? where id = ?",[$introduction,$id]);
        Db::query("update student set duty = ? where id = ?",[$duty,$id]);
        Db::query("update student set sequence_number = ? where id = ?",[$sequence_number,$id]);
        Db::query("update student set location_number = ? where id = ?",[$location_number,$id]);
    }

    /**
     * 修改教师的基本信息
     */
    public static function modifyInstructorPersonalInfo($id, $kwd)
    {
        Db::query("update instructor set kwd = ? where id = ?",[$kwd,$id]);
    }
}