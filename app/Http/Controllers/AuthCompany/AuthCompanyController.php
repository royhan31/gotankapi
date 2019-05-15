<?php

namespace App\Http\Controllers\AuthCompany;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
<<<<<<< HEAD
use Illuminate\Validation\Validator;
=======
>>>>>>> 8e75c07df5194f7c5d8fb08266a2b2911f6bddd1
use App\Company;
use Auth;

class AuthCompanyController extends Controller
{
<<<<<<< HEAD
	public function index()
	{
		return view('pages.company.dashboard');
	}
=======

    public function __construct()
    {
        $this->middleware('guest:company')->except('logoutCompany');
    }
>>>>>>> 8e75c07df5194f7c5d8fb08266a2b2911f6bddd1

    public function showLoginForm(){
      return view('authCompany.login');
    }

    public function login(Request $request)
    {
		// $this->validate($request, [
  //           'email' => 'require|string|email|max:255|unique:companies',
  //           'password' => 'require|string|min:8|confirmed'
  //       ]);

        $credential = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        //Attempt to log the user in
        if (Auth::guard('company')->attempt($credential, $request->member)) {
            //if login success, then redirect to their intended
            return redirect()->intended(route('company.dashboard'));
        }

        //if unseccesfully, then redirect back to the login with from data
        return redirect()->back()->withInput($request->only('email', 'remember'));
    }

    public function showRegisterForm(){
      return view('authCompany.register');
    }

<<<<<<< HEAD
    public function register(Request $request)
    {
      $this->validate($request,[
            'name' => 'required|string|max:191',
            'email' => 'required|string|email|max:255|unique:companies',
            'password' => 'required|string|min:8|confirmed',
            'address' => 'required|max:250'
        ]);

      $company = Company::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'address' => $request->address,
            'api_token' => bcrypt($request->email),
        ]);
        return redirect()->route('login')->with('success','Registration Success');
=======
    public function register(Request $request){
      $this->validate($request, [
        'name' => 'required|min:3',
        'email' => 'required|email|max:255|unique:companies',
        'password' => 'required|min:6|confirmed',
        'address' => 'required',
        'phone' => 'required|max:13|min:10|unique:companies',
      ]);

      Company::create([
          'name' => $request->name,
          'email' => $request->email,
          'password' => bcrypt($request->password),
          'address' => $request->password,
          'phone' => $request->phone
      ]);

      return redirect()->route('login')->with('message','Berhasil Registrasi, Silahkan Login');
    }


    public function login(Request $request){
      $credential = [
        'email' => $request->email,
        'password' => $request->password
      ];
      if (!Auth::guard('company')->attempt($credential, $request->member)) {
          return back();
      }

      return redirect()->route('dashboard');
    }

    public function logoutCompany(Request $request)
    {
      Auth::guard('company')->logout();
      return redirect('/');
>>>>>>> 8e75c07df5194f7c5d8fb08266a2b2911f6bddd1
    }
}
