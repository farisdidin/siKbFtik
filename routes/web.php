<?php

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
    return view('welcome1');
});
Route::get('admin', function () {
    return view('admin_template');
});
Route::get('test', 'TestController@index');
// Route::get('login', function(){
//     return view('login');
// });
// Route::get('register', function(){
//     return view('register');
// });

Route::get('register-donatur', function(){
    return view('register-donatur');
});

Route::get('pengajar', function(){
    return view('pengajar');
})->name('pengajar');

Route::post('pengajar', function(){
    return view('pengajar');
});

Route::get('donatur', function(){
    return view('donatur');
});

Route::get('artikel', function(){
    return view('artikel');
});

Route::get('calendar', function(){
    return view('calendar');
});

Route::get('artikel/1', function(){
    return view('detail-artikel');
});

Route::get('materi-pengajar', function(){
    return view('materi-pengajar');
});

Route::get('register', 'AuthController@showRegisterForm');
Route::post('register', 'AuthController@register');
Route::get('/home', 'HomeController@index')->name('home');

Route::get('login','AuthController@showLoginForm')->name('login');
Route::post('login','AuthController@login')->name('auth.login');
