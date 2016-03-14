<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class PagesController extends Controller
{
    public function home()
    {
        $user=Auth::user()->student_id;
        if(Auth::user()->password == bcrypt('123456')){
            flash()->overlay('您好! '.$user,'请修改初始密码','info');
        };
        return view('pages.home');
    }
}
