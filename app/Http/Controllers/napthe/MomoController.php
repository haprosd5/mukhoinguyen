<?php

namespace App\Http\Controllers\napthe;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MomoController extends Controller
{
    //
    public function showForm($username) {
        //print ($username);
        return view('user.pages.napMomo', ['username' => $username]);
    }
}
