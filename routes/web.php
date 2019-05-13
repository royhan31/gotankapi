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

Route::group(['prefix' => '/'], function(){
  Route::get('login','AuthCompany\AuthCompanyController@showLoginForm')->name('login');
  Route::get('register','AuthCompany\AuthCompanyController@showRegisterForm')->name('register');
  Route::post('register','AuthCompany\AuthCompanyController@register')->name('get.register');
  Route::post('login','AuthCompany\AuthCompanyController@login')->name('get.login');
  Route::get('dashboard','Company\CompanyController@index')->name('dashboard');
});

//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
