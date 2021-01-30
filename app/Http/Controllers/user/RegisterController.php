<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class RegisterController extends Controller
{

    public function requestRegisterForm(Request $request)
    {
        if ($request->isMethod('post')) {
            $request->validate([
                'register_username' => 'required|regex:/(^([a-z]+)(\d+)?$)/u',
                'register_email' => 'required',
                'register_password' => 'required',
                'register_rePassword' => 'required',
            ]);

            /**
             * ! khai bao cac thuoc tinh cua user
             */


            $name = trim($request->register_username);
            $email = trim($request->register_email);
            $password = trim($request->register_password);


            $result = $this->createUser($name, $email, $password, '2');
            if ($result->id) {
               return redirect()->view('frontend.home.index', ['dk_success' => 'Đăng kí tài khoản thành công']);
            } else
                return redirect()->view('frontend.home.index', ['dk_error' => 'Đăng kí tài khoản thành công']);
        }
    }

    /*ham tao user*/
    function createUser($user = 'haprosd', $email = 'email@gmail.com', $password = '12345678', $role = '2')
    {
        $kq = User::create([
            'name' => $user,
            'email' => $email,
            'password' => $password,
            'role' => $role,
        ]);
        return $kq;
    }
}
