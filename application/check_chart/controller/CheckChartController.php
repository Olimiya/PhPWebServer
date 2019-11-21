<?php


namespace app\check_chart\controller;

use app\check_chart\model\CheckChartModel;
class CheckChartController
{
    public function getNameChartByClass($class)
    {
        $result = CheckChartModel::getStudentNameChart($class);
        return $result;
    }
    public function getSeatingChartByClass($class)
    {
        $result = CheckChartModel::getStudentSeatingChart($class);
        return $result;
    }
    public function getPhoneNumberByClass($class)
    {
        $result = CheckChartModel::getStudentPhoneNumber($class);
        return $result;
    }
    public function getPhotoByClass($class)
    {
        $result = CheckChartModel::getStudentPhoto($class);
        return $result;
    }
}