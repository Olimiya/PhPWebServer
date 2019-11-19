<?php


namespace app\log_in\model;

use think\Db;

class LogInModel
{
    /**
     * 比对指定数据库中账号信息

     */
    public static function checkId($id,$kwd,$role)
    {
        //判断用户是教师、学生、还是管理员
        //初始化查询结果为空
        $id_in_db = "null";
        $kwd_in_db = "null";
        if($role == "student")
        {
            $id_in_db = Db::table('student')->where('id',$id)->find();
            $kwd_in_db = Db::query('select kwd from student where id=?',[$id_in_db]);
        }
        else if ($role == "teacher")
        {
            $id_in_db = Db::query('select id from instructor where id=?',[$id]);
            $kwd_in_db = Db::query('select kwd from instructor where id=?',[$id_in_db]);
        }
        else if ($role == "teacher")
        {
            $id_in_db = "12345678";
            $kwd_in_db = "12345678";
        }

        if ($id != $id_in_db)//查询数据库表，无该账号信息
        {
            $result = "账号不存在";
        }
        else//账号存在
        {
            if($kwd !=$kwd_in_db)//密码错误
            {
                $result = "密码错误";
            }
            else
            {
                $result = "登陆成功";
            }
        }
        return $result;
    }
}