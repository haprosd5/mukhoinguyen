<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    //
    public function showUserForm(Request $request) {
        if (isset($request->username)) {
            return view('user.home')->with('username', $request->username);
        }
        return view('user.home')->with('username', 'Loi hien thi');

    }
}
