<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;

class TeachersController extends Controller
{
    public function index()
    {
        $teachers = User::where('role_id',2)->get();
        return view('teachers.index',compact('teachers'));
    }

    public function create()
    {
        return view('teachers.create');
    }

    public function store(Request $request)
    {
        User::create($request->all());

        return redirect('/teachers');
    }

    public function edit($student_id)
    {
        dd($student_id);
        $teacher = User::findOrFail($student_id);
        return view('teachers.edit',compact('teacher'));
    }

    //public function update(Request $request,$student_id)
    //{
    //    $teacher = User::findOrFail($student_id);
    //    $teacher->update($request->)
    //    return redirect('/teachers');
    //}

    public function destroy($student_id)
    {
        $teacher = User::findOrFail($student_id);
        $teacher->delete();

        return redirect('/teachers');
    }
}
