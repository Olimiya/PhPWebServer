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
Route::rule('login/:id/:kwd/:role',
    'log_in/IndexController/getInput');
Route::rule('logintest/:id',
    'log_in/IndexController/test');

Route::rule('new/:data','check_basicinfo/CheckBasicInfoController/index');
Route::rule('basic/:class','check_basicinfo/CheckBasicInfoController/getInfoByClass');
Route::rule('grade/:id/:grade','entry_grade/EntryGradeController/inputGrade');
Route::rule('log/:id/:kwd/:role','log_in/IndexController/getInput');


return [
    '__pattern__' => [
        'name' => '\w+',
    ],
    '[hello]'     => [
        ':id'   => ['index/hello', ['method' => 'get'], ['id' => '\d+']],
        ':name' => ['index/hello', ['method' => 'post']],
    ],

];
