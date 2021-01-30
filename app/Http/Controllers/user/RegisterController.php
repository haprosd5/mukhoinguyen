<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class RegisterController extends Controller
{

    public function registerForm() {
        return view('login.register');
    }

    public function requestRegisterForm(Request $request)
    {
        if ($request->isMethod('post')) {
            $request->validate(
                [
                    'register_username' => 'required|regex:/(^([a-z]+)(\d+)?$)/u',
                    'register_email' => 'required|unique:App\User,email',
                    'register_password' => 'required',
                    'register_rePassword' => 'required',
                ],
                [
                    'required' => ':attribute Không được để trống',
                    'unique' => 'Email đã tồn tại',
                ],

                [
                    'login_email' => 'Địa chỉ email',
                    'login_password' => 'Mật khẩu',
                ]);

            /**
             * ! khai bao cac thuoc tinh cua user
             */


            $name = trim($request->register_username);
            $email = trim($request->register_email);
            $password = trim($request->register_password);


            $result = $this->createUser($name, $email, $password, '2');
            if ($result->id) {
                return redirect()->route('home', ['dk_success' => 'Đăng kí tài khoản thành công']);
            } else {
                return redirect()->route('home', ['dk_error' => 'Đăng kí tài khoản thất bại']);
            }
        }
        return redirect()->route('home');
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
