<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    public function showHomePage(){
        return view('frontend.home.index');
    }

    public function showEventPage() {
        return view('frontend.home.event');
    }
}
