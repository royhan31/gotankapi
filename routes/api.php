<?php

use Illuminate\Http\Request;

//adminCv atu Company
Route::get('/company','API\Company\CompanyController@index');
// Route::post('admin/register','API\Admin\AuthAdminController@register');
// Route::post('admin/login','API\Admin\AuthAdminController@login');
// Route::get('admin','API\Admin\AuthAdminController@listAdmin');
// Route::get('admin/{admin}','API\Admin\AuthAdminController@getAdmin');

// User/pengguna
Route::post('user/register','API\User\AuthUserController@register');
Route::post('user/login','API\User\AuthUserController@login');

// Driver
Route::post('driver/register', 'API\Driver\AuthDriverController@register');
Route::post('driver/login', 'API\Driver\AuthDriverController@login');
