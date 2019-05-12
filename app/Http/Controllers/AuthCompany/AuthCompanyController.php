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
}
