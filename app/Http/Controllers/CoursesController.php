<?php

namespace App\Http\Controllers;

use App\Course;
use App\Repositories\BaseRepository;
use Illuminate\Http\Request;

use App\Http\Requests;

class CoursesController extends Controller
{
    public $base;

    public function __construct(BaseRepository $baseRepository)
    {
        $this->base = $baseRepository;

        parent::__construct();
    }

    public function index()
    {
        $courses = Course::orderBy('name')->get();

        return view('courses.index', compact('courses'));
    }

    public function create()
    {
        return view('courses.create');
    }

    public function store(Request $request)
    {
        Course::create($request->all());

        return redirect('/courses');
    }

    public function edit($id)
    {
        $course = $this->base->getByCourseId($id);

        return view('courses.edit', compact('course'));
    }

    public function update(Request $request, $id)
    {
        $course = $this->base->getByCourseId($id);
        $course->update($request->all());

        return redirect('/courses');
    }

    public function destroy($id)
    {
        $course = $this->base->getByCourseId($id);
        $course->delete();

        return redirect('/courses');
    }
}
