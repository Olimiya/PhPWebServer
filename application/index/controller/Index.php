<?php
namespace app\index\controller;
use think\Controller;
use think\Db;
class Index extends Controller
{
    public function index()
    {
//        //从数据库中读取数据　　　
//        $data=Db::table('student')->select();
//        // 2、输出查询SQL字符串
//        return $data;
        //dump(config('database'));
        //$res = Db::connect();
        //dump($res);
        $res = Db::query("select * from student where id=?",[1]);
        dump($res);


    }
}
