<?php

namespace App\Repositories;

use App\Course;
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

}