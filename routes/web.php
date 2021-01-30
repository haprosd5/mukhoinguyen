<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\user\UsersController;
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

    /* trang home */
    Route::get('/', 'HomeController@showHomePage')->name('home');
    Route::get('/event', 'HomeController@showEventPage')->name('event');
    Route::get('/post', 'PostController@showPostPage')->name('post');

});

Route::group(['namespace' => 'user'], function () {

    /* trang home */
    Route::get('/user/home', 'UsersController@showUserForm')->name('dashbroad');
    /*xu ly login*/
    Route::get('/user/login', 'LoginController@loginForm')->name('get.login');
    //Route::post('/user/login', 'LoginController@requestLoginForm2')->name('post.login');
    Route::post('/user/login', 'LoginController@requestLoginForm')->name('post.login');
    /*xu ly forgotpass*/
    Route::get('/user/forgotPassword', 'ForgotPass@showForm')->name('forgot.pass');

    Route::get('/logout', 'LoginController@logoutForm')->name('logout');
    /*dang ky tai khoan*/
    Route::get('/register', 'RegisterController@registerForm')->name('get.register');
    Route::post('/register', 'RegisterController@requestRegisterForm')->name('register');

});

Route::group(['namespace' => 'napthe'], function () {
    /*xu ly chuc nang nap xu trong trang quan tri user*/
    Route::get('/user/payment_momo', 'MomoController@showForm')->name('get.payMomo');
    Route::get('/user/payment_bank', 'BankController@showForm')->name('get.payBank');
    Route::get('/user/payment_card', 'CardController@showForm')->name('get.payCard');
});

/*
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');*/
