<?php

namespace app\log_in\model;

use think\Db;
class LogInModel
{
    /**
     * 比对指定数据库中账号信息
     * 返回结果是登录成功与否的状态信息字符串
     * 与controller相同
     */
    public static function checkId($id, $kwd, $role)
    {
        $id_in_db = "null";
        $kwd_in_db = "null";

        if ($role == "student")
        {
            $res = Db::query('select id from student where id=?', [$id]);
            if (count($res) >= 1)
            {
                $id_in_db = $res[0]["id"];
            }
            else
            {
                $id_in_db = -9999;
            }

            $res = Db::query('select kwd from student where id=?', [$id_in_db]);
            if (count($res) >= 1)
            {
                $kwd_in_db = $res[0]["kwd"];
            }
            else
            {
                $kwd_in_db = -9999;
            }
        }
        else if ($role == "teacher")
        {
            $res = Db::query('select id from instructor where id=?', [$id]);
            if (count($res) >= 1)
            {
                $id_in_db = $res[0]["id"];
            }
            else
            {
                $id_in_db = -9999;
            }

            $res = Db::query('select kwd from instructor where id=?', [$id_in_db]);
            if (count($res) >= 1)
            {
                $kwd_in_db = $res[0]["kwd"];
            }
            else
            {
                $kwd_in_db = -9999;
            }
        }
        else if ($role == "manager")//管理员登录
        {
            $id_in_db = "12345678";
            $kwd_in_db = "12345678";
        }
        if ($id != $id_in_db) //查询数据库表，无该账号信息
        {
            $result = "账号不存在";
        }
        else //账号存在
        {
            if ($kwd != $kwd_in_db) //密码错误
            {
                $result = "密码错误";
            }
            else {
                $result = "登陆成功";
            }
        }
        return $result;
    }
}
