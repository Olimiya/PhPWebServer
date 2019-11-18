<?php
namespace app\index\controller;

use think\Db;
class Index
{
    public function index()
    {
        //从数据库中读取数据　　　
        $data=Db::table('student')->select();
        // 2、输出查询SQL字符串
        return $data;

    }
}
