<?php

namespace App\Http\Controllers;

use App\CourseTime;
use App\Module;
use App\Repositories\BaseRepository;
use Illuminate\Http\Request;

use App\Http\Requests;

class CourseTimesController extends Controller
{
    public $base;

    public function __construct(BaseRepository $baseRepository)
    {
        $this->base = $baseRepository;

        parent::__construct();
    }

    public function index()
    {
        $courseTimes = CourseTime::orderBy('name')->paginate(10);

        return view('courseTimes.index',compact('courseTimes'));
    }

    public function create()
    {
        return view('courseTimes.create');
    }

    public function store(Request $request)
    {
        $courseTimes = CourseTime::create($request->all());
        $courseTimes->modules()->attach($request->input('modules'));

        return redirect('/courseTimes');
    }

    public function edit($id)
    {
        $courseTime = $this->base->getByCourseTimeId($id);
        $moduleIds = $courseTime->modules->lists('id')->toArray();

        return view('courseTimes.edit', compact('courseTime','moduleIds'));
    }

    public function update(Request $request,$id)
    {
        $courseTime = $this->base->getByCourseTimeId($id);
        $courseTime->update($request->all());
        $courseTime->modules()->detach();
        $courseTime->modules()->attach($request->input('modules'));

        return redirect('/courseTimes');
    }

    public function destroy($id)
    {
        $courseTime = $this->base->getByCourseTimeId($id);
        $courseTime->modules()->detach();
        $courseTime->delete();

        return redirect('/courseTimes');
    }
}
