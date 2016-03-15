<?php

namespace App\Repositories;

use App\Course;
use App\CourseTime;
use App\Module;
use App\User;

class BaseRepository
{

    public function getByStudentId($student_id)
    {
        $teacher = User::where('student_id', $student_id)->first();

        return $teacher;
    }

    public function getByCourseId($id)
    {
        $course = Course::findOrFail($id);

        return $course;
    }

    public function getByCourseTimeId($id)
    {
        $courseTime = CourseTime::findOrFail($id);

        return $courseTime;
    }

    public function getByModuleId($id)
    {
        $module = Module::findOrFail($id);

        return $module;
    }

}