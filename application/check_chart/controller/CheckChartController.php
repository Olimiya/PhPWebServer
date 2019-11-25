<?php


namespace app\check_chart\controller;

use app\check_chart\model\CheckChartModel;
class CheckChartController
{
    /**
     * 参数都是教师所在的班级class
     * 返回值都是该class相应的查询结果
     */
    public function getNameChartByClass($class)
    {
        header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Headers: token, Origin, X-Requested-With, Content-Type, Accept, Authorization");
        header('Access-Control-Allow-Methods: POST,GET,PUT,DELETE');
        if (request()->isOptions()) {
            exit();
        }

        $result = CheckChartModel::getStudentNameChart($class);
        return $result;
    }
    public function getSeatingChartByClass($class)
    {
        header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Headers: token, Origin, X-Requested-With, Content-Type, Accept, Authorization");
        header('Access-Control-Allow-Methods: POST,GET,PUT,DELETE');
        if (request()->isOptions()) {
            exit();
        }
        $result = CheckChartModel::getStudentSeatingChart($class);
        return $result;
    }
    public function getPhoneNumberByClass($class)
    {
        header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Headers: token, Origin, X-Requested-With, Content-Type, Accept, Authorization");
        header('Access-Control-Allow-Methods: POST,GET,PUT,DELETE');
        if (request()->isOptions()) {
            exit();
        }
        $result = CheckChartModel::getStudentPhoneNumber($class);
        return $result;
    }
    public function getPhotoByClass($class)
    {
        header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Headers: token, Origin, X-Requested-With, Content-Type, Accept, Authorization");
        header('Access-Control-Allow-Methods: POST,GET,PUT,DELETE');
        if (request()->isOptions()) {
            exit();
        }
        $result = CheckChartModel::getStudentPhoto($class);
        return $result;
    }
}