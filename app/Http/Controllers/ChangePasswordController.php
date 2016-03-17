<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

class ChangePasswordController extends Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        return view('auth.changePassword');
    }

    public function change(Request $request)
    {
        $messages = [
            'min' => '密码至少需要 6 个字符.',
        ];
        $this->validate($request, [
            'password' => 'required|confirmed|min:6',
        ],$messages);

        $user = Auth::user();
        $inputs = Input::all();
        $user->password = bcrypt($inputs['password']);
        $user->save();
        flash()->success('恭喜! ' . $user->name, '密码修改成功');

        return back();
    }
}
