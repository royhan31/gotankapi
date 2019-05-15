<?php

namespace App\Http\Controllers\AuthAdmin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AuthAdminController extends Controller
{
    public function __construct()
	{
		$this->middleware('auth:admin');
	}

	public function index()
	{
		return view('templates.admin.default');
	}

    public function showLoginForm(){
      return view('authAdmin.login');
    }

    public function login(Request $reuest){

    }
}
