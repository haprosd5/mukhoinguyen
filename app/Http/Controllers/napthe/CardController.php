<?php

namespace App\Http\Controllers\napthe;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CardController extends Controller
{
    //
    public function showForm($username) {
        //print ($username);
        return view('user.pages.napCard', ['username' => $username]);
    }
}
