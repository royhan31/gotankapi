<?php

namespace App\Http\Controllers\AuthCompany;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AuthCompanyController extends Controller
{

    public function showLoginForm(){
      return view('authCompany.login');
    }

    public function showRegisterForm(){
      return view('authCompany.register');
    }

    public function register(){
      $this->validate($request, [
        'name' => 'required|min:3',
        'username' => 'required|min:3|unique:companies',
        'email' => 'required|email|max:255|unique:companies',
        ''
      ])
    }
}
