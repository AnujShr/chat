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
    return view('test/index');
});
Route::resource('test', 'TestController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::view('/chat', 'front/chat/index')->name('user.chat');
Route::view('/profile/change-password', 'front/profile/change_password')->name('user.change_password');
Route::view('/profile', 'front/profile/profile')->name('user.profile');
