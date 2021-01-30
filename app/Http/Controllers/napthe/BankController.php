<?php

namespace App\Http\Controllers\napthe;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BankController extends Controller
{
    //
    public function showForm() {
        return view('user.pages.napBank');
    }
}
