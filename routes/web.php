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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Pemanggilan tanpa controller
Route::get('admin/dashboard', function(){
    return view('template_backend.admin.dashboard');
});

Route::get('company/dashboard', function(){
    return view('template_backend.company.dashboard');
});
