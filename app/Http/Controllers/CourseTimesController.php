<?php

namespace App\Http\Controllers;

use App\CourseTime;
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
        CourseTime::create($request->all());

        return redirect('/courseTimes');
    }
}
