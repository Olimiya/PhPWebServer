<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------
use think\Route;

//Route::get('log_in','log_in/IndexController/getInput');
//Route::post('log_in','log_in/IndexController/getInput');


//登录模块路由
Route::rule('log_in/:id/:kwd/:role','log_in/IndexController/getInput');
Route::rule('logintest/:id', 'log_in/IndexController/test');
//编辑个人信息模块路由
Route::rule('modify_info/:role/:id/:kwd/:phone_number/:introduction/:duty/:sequence_number/:location_number',
    'modify_personalinfo/ModifyPersonalInfo/modifyInfo');
//查询个人信息模块路由
Route::rule('check_info/:id/:role',
    'check_personalinfo/CheckPersonalInfoController/getInfoById');
//查询学生基本信息模块路由
Route::rule('new/:data','check_basicinfo/CheckBasicInfoController/index');
Route::rule('basic/:class','check_basicinfo/CheckBasicInfoController/getInfoByClass');
//查询和修改学生成绩模块路由
Route::rule('check_grade/:id/:course_id','entry_grade/EntryGradeController/checkGrade');
Route::rule('modify_grade/:id/:course_id/:grade','entry_grade/EntryGradeController/inputGrade');
//查询表格模块路由
Route::rule('name_chart/:class','check_chart/CheckChartController/getNameChartByClass');
Route::rule('seat_chart/:class','check_chart/CheckChartController/getSeatingChartByClass');
Route::rule('phone_chart/:class','check_chart/CheckChartController/getPhoneNumberByClass');
/*=======================无效路由*/
Route::rule('photo_chart/:class','check_chart/CheckChartController/getPhotoByClass');


return [
    '__pattern__' => [
        'name' => '\w+',
    ],
    '[hello]'     => [
        ':id'   => ['index/hello', ['method' => 'get'], ['id' => '\d+']],
        ':name' => ['index/hello', ['method' => 'post']],
    ],
];
