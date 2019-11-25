<?php


namespace app\manager_op\model;

use think\Db;
class ManagementModel
{
    /**
     *均与controller一致，不再赘述
     */
    public static function insertCourse($student_id,$course_id,$course_name,$instructor_id)
    {
        $data_course = ['course_id' => $course_id,
            'course_name' => $course_name];
        Db::table('attend')->insert($data_course);

        $data_attend = ['student_id' => $student_id,
            'course_id' => $course_id,
            'grade' => 'A'];
        Db::table('attend')->insert($data_attend);

        $data_teach = ['instructor_id' => $instructor_id,
            'course_id' => $course_id];
        Db::table('teach')->insert($data_teach);

        $res = 'yes';
        return $res;
    }
    public static function insertMember($role,$id,$name,$class)
    {

        if($role == 'teacher')
        {
            $data = ['id'=>$id,
                'name'=>$name,
                'kwd'=>'123456',
                'class'=>$class];
            Db::table('instructor')->insert($data);
        }
        else if ($role == 'student')
        {
            $data = ['id'=>$id,
                'name'=>$name,
                'kwd'=>'123456',
                'class'=>$class];
            Db::table('student')->insert($data);
        }
        else
        {
            return "没有这个角色";
        }
        return 'yes';
    }
}