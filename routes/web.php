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

Route::get('/editprofile', function() {
  return view ('pages.company._editProfile');
});

//route Admin CV atau Company
Route::group(['prefix' => '/'], function(){
  Route::get('login','AuthCompany\AuthCompanyController@showLoginForm')->name('login');
  Route::get('register','AuthCompany\AuthCompanyController@showRegisterForm')->name('register');
  Route::post('login','AuthCompany\AuthCompanyController@login')->name('company.login');
  Route::post('register','AuthCompany\AuthCompanyController@register')->name('company.register');
  Route::post('logout','AuthCompany\AuthCompanyController@logoutCompany')->name('logout');
  Route::get('beranda','Company\CompanyController@index')->name('dashboard');
});

//route Super Admin
Route::group(['prefix' => 'admin/'], function(){
  Route::get('login','AuthAdmin\AuthAdminController@showLoginForm')->name('admin.login');
  Route::post('login','AuthAdmin\AuthAdminController@login')->name('get.admin.login');
  Route::post('logout','AuthAdmin\AuthAdminController@logoutAdmin')->name('admin.logout');
  Route::get('beranda','Admin\AdminController@index')->name('admin.dashboard');
});
