<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class PagesController extends Controller
{
    public function home()
    {
        $userName=Auth::user()->name;
        $hash=Auth::user()->password;
        if(password_verify('123456', $hash)){
            flash()->overlay('Hello! '.$userName,'请修改初始密码','info');
        };
        return view('pages.home');
    }
}
