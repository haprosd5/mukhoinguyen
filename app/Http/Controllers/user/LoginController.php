<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class LoginController extends Controller
{
    //
    public function loginForm()
    {
        return view('login.login');
    }

    public function requestLoginForm(Request $request)
    {
        if ($request->isMethod('post')) {
            $this->validate($request,
                [
                    'login_email' => 'required',
                    'login_password' => 'required',
                ],

                [
                    'required' => ':attribute Không được để trống',
                ],

                [
                    'login_email' => 'Địa chỉ email',
                    'login_password' => 'Mật khẩu',
                ]
            );

            $where = ['email' => trim($request->login_email)];
            $kq = User::where($where)->first();

            if (isset($kq->email))
                if (trim($request->login_password) == $kq->password) {
                    print ('a');
                    return \Redirect()->route('home')->with('username', $kq->name);
                }
        }
        return redirect()->route('home', ['dk_error', 'that bai']);
    }


    public function logoutForm(Request $request)
    {
        Auth::logout();
        $request->session()->forget('username');
        return back();
    }
}
