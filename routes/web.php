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
    return view('index');
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
    $data['userstatus']= 'Pengajar';
    return view('pengajar',$data);
})->name('pengajar');

Route::post('pengajar', function(){
    return view('pengajar');
});

Route::get('donatur', function(){
    return view('donatur');
});

Route::get('artikel', function(){
    $data['userstatus']= 'Pengajar';
    return view('artikel',$data);
});

Route::get('calendar', function(){
    $data['userstatus']= 'Pengajar';
    return view('calendar',$data);
});

Route::get('artikel/1', function(){
    $data['userstatus']= 'Pengajar';
    return view('detail-artikel',$data);
});

Route::get('materi-pengajar', function(){
    $data['userstatus']= 'Pengajar';
    return view('materi-pengajar',$data);
});
Route::get('daftar-pengajar', function(){
    $data['userstatus']= 'Pengajar';
    return view('daftar-pengajar',$data);
});

Route::get('lupa-password', function(){
    return view('lupa-password');
});

Route::get('lupa-password-find', function(){
    return view('lupa-password-find');
});
Route::get('lupa-password-not-found', function(){
    return view('lupa-password-not-found');
});


Route::get('post-artikel', function(){
    $data['userstatus']= 'Pengajar';
    return view('post-artikel',$data);
});
Route::get('diskusi', function(){
    return view('diskusi');
});
Route::get('laporan-kegiatan', function(){
    return view('laporan-kegiatan');
});
Route::get('data-donatur', function(){
    return view('data-donatur');
});

Route::get('donatur-beranda', function(){
    $data['userstatus']= 'donatur';
    return view('donatur-beranda',$data);
});
Route::get('kegiatan', function(){
    $data['userstatus']= 'donatur';
    return view('kegiatan',$data);
});
Route::get('donasi', function(){
    $data['userstatus']= 'donatur';
    return view('donasi',$data);
});

Route::get('input-umkm', function(){
    $data['userstatus']= 'admin';
    return view('input-umkm',$data);
});

Route::get('register', 'AuthController@showRegisterForm');
Route::post('register', 'AuthController@register');
Route::get('/home', 'HomeController@index')->name('home');

Route::get('login','AuthController@showLoginForm')->name('login');
Route::post('login','AuthController@login')->name('auth.login');

