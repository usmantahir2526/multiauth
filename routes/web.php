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
    return view('welcome');
});

Route::get('/admin','AdminController@index');
Route::post('/admin','AdminController@store');

Route::get('/login','AdminController@loginindex');
Route::post('/login','AdminController@login');

Route::get('/writer','WriterController@index');
Route::post('/writer','WriterController@store');

Route::get('/writerlogin','WriterController@loginindex')->name('login-form');
Route::post('/writerlogin','WriterController@login')->name('do-login');

Route::group([ 'middleware'=>'authwriter' ], function(){
Route::get('/profile', 'WriterController@profile')->name('profile');
});
Route::get('/logout', function(){
	\Auth::guard('writer')->logout();
	return "You are now logout";
});