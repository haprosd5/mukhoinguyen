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
    Route::get('/user/home/{username}', 'UsersController@showUserForm')->name('dashbroad');
    /*xu ly login*/
    Route::post('/login', 'LoginController@requestLoginForm')->name('login');
    Route::get('/logout', 'LoginController@logoutForm')->name('logout');
    /*dang ky tai khoan*/
    Route::post('/register', 'RegisterController@requestRegisterForm')->name('register');


});


/*
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');*/
