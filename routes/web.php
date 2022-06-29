<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('auth/register');
});

// Auth::routes();




Route::namespace("User")->prefix('user')->group(function () {

     Route::get('/dashboard', 'UserController@index');
      Route::get('/logout', 'UserController@logout');

    Route::namespace('Auth')->group(function(){

        Route::get('/register', 'AuthController@create')->name('register');
        Route::post('/register', 'AuthController@Save');

        Route::get('/login', 'AuthController@login');
        Route::post('/login', 'AuthController@checkLogin')->name('login');

    });
});



Route::namespace("Admin")->prefix('admin')->group(function(){

Route::get('/user-lists', 'HomeController@userLists');
Route::get('/user-status-change/{id}/{status}', 'HomeController@userStatusChange');

 Route::namespace('Auth')->group(function(){
        Route::get('/login', 'LoginController@showLoginForm')->name('admin.login');
        Route::post('/login', 'LoginController@login');

        Route::get('logout', 'LoginController@logout')->name('admin.logout');
    });

});