<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\HomeController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::group(['namespace' => 'frontend'], function () {

    /* Tìm kiếm */
    Route::get('/', 'HomeController@showHomePage')->name('home');
    Route::get('/event', 'HomeController@showEventPage')->name('event');
    Route::get('/post', 'PostController@showPostPage')->name('post');

});


Route::get('/login', function () {

});
