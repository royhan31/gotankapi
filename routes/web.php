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

//route Admin CV atau Company

//==================================================================================
Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => '/'], function(){
  Route::get('login','AuthCompany\AuthCompanyController@showLoginForm')->name('login');
  Route::get('register','AuthCompany\AuthCompanyController@showRegisterForm')->name('register');
  Route::post('login','AuthCompany\AuthCompanyController@login')->name('get.login');
  Route::post('register','AuthCompany\AuthCompanyController@register')->name('get.register');
  Route::post('logout','AuthCompany\AuthCompanyController@logoutCompany')->name('logout');
  Route::get('dashboard','Company\CompanyController@index')->name('dashboard');
});

//==================================================================================

//route Admin atau SuperAdmin

Route::get('/admin', 'AuthAdmin\AuthAdminController@index')->name('admin');

//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
