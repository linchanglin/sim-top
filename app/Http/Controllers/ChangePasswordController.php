<?php

namespace App\Http\Controllers;

use App\User;
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

    public function reset($student_id)
    {
        $user = User::where('student_id',$student_id)->first();
        $user->password = bcrypt('123456');
        $user->save();
        flash()->success($user->name, '密码重置成功');

        return back();
    }
}
