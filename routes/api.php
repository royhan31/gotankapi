<?php

use Illuminate\Http\Request;

//adminCv
Route::post('admin/register','AdminController@register');
Route::post('admin/login','AdminController@login');
Route::get('admin','AdminController@listAdmin');
Route::get('admin/{admin}','AdminController@getAdmin');

// User/pengguna
Route::post('user/register','UserController@register');
Route::post('user/login','UserController@login');

// Driver
Route::post('driver/register', 'DriverController@register');
Route::post('driver/login', 'DriverController@login');
