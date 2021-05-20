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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', "Main@arr");

Route::get('/recover',function(){
    return view("recover.charactor");
});

Route::post('/recover/charactor',"RecoverController@charactor")->name('recover.charactor');

Route::get('/init/password',"InitDatebase@password");

Route::get('/rename',"Service\Rename@ShowPlayerList")->name('rename')->middleware('auth');
Route::post('/rename/upload',"Service\Rename@RenamePlayer")->name('rename.upload')->middleware('auth');

Route::get('/admin',"Service\Admin@AdminView");
Route::post('/admin/upload',"Service\Admin@AdminUpload")->name('admin.upload');