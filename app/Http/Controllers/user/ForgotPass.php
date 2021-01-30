<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ForgotPass extends Controller
{
    //
    public function showForm() {
        return view('login.forgot');
    }
}
