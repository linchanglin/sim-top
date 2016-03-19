<?php

namespace App\Http\Controllers;

use App\CourseTime;
use Illuminate\Http\Request;

use App\Http\Requests;

class CourseOthersController extends Controller
{
    public function courseTimes()
    {
        $courseTimes = CourseTime::orderBy('name')->get();

        return view('courses.others.linkCourseTimes',compact('courseTimes'));
    }
}
