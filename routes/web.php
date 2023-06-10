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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/index', function () {
    return view('index');
});
Route::get('/task', function () {
    return view('task');
});

Route::group(['middleware' => ['auth']], function () {
    Route::get('/home', 'PageController@home')->middleware('auth');
    Route::get('/profile', 'PageController@profile');
    Route::get('/student', 'PageController@student');
    Route::get('/contact', 'PageController@contact');
    Route::get('/student/pencarian', 'PageController@pencarian');
    Route::get('/student/formtambah', 'PageController@tambah');
    Route::post('/student/simpan', 'PageController@simpan');
    Route::get('/student/updatemahasiswa/{id}', 'PageController@updatemahasiswa');
    Route::put('/student/update/{id}', 'PageController@update');
    Route::get('/student/delete/{id}', 'PageController@delete');
    Route::get('/logout', 'AuthController@logout');
});

Route::group(['middleware' => ['guest']], function () {
    Route::get('/register', 'AuthController@register');
    Route::post('/simpan', 'AuthController@simpan');
    Route::get('/', 'AuthController@login')->middleware('guest')->name('login');
    Route::post('/ceklogin', 'AuthController@ceklogin');
});






