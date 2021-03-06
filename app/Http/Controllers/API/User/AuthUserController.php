<?php

namespace App\Http\Controllers\API\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Auth;

class AuthUserController extends Controller
{
  //user register di android
  public function register(Request $request){
      $this->validate($request,[
          'name' => 'required',
          'email' => 'required|email|unique:users',
          'password' => 'required|min:6',
          'phone' => 'required|min:11',
          'address' => 'required'
      ]);

      $user = User::create([
          'name' => $request->name,
          'email'=> $request->email,
          'password'=>bcrypt($request->password),
          'api_token' => bcrypt($request->email),
          'phone' => $request->phone,
          'address' => $request->address
      ]);

      return response()->json([
          'status' => 1 ,
          'message' => 'Berhasil Daftar',
          'data' => $user
      ], 201);
  }

  //user login di android
  public function login (Request $request)
  {
      $credential =[
          'email' => $request->email,
          'password' => $request->password,
      ];


      if(!Auth::guard('web')->attempt($credential, $request->member))
      {
          return response()->json([
              'status' => 0,
              'message' => 'Gagal Login'
          ], 200);
      }
      $user = User::find(Auth::user()->id);
      return response()->json([
          'status' => 1,
          'message' => 'Berhasil',
          'data' => $user
      ], 200);
  }
}
