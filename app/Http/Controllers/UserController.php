<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use DB;

class UserController extends Controller
{
    public function register(Request $request, User $user){
        $this->validate($request,[
            'nama_user' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'no_hp' => 'required'
        ]);

        $user = $user->create([
            'nama_user' => $request->nama_user,
            'email'=> $request->email,
            'password'=>bcrypt($request->password),
            'api_token' => bcrypt($request->email),
            'no_hp' => $request->no_hp,
        ]);

        return [
            'status' => 1 ,
            'message' => 'Berhasil Daftar',
            'data' => $user
        ];
    }

    public function login (Request $request, User $user)
    {
        $credential =[
            'email' => $request->email,
            'password' => $request->password,
        ];

        
        if(!Auth::guard('web')->attempt($credential, false, false))
        {
        //return [!Auth::attempt($credential)];
        //if(!Auth::attempt($credential)){
            return [
                'status' => 0,
                'message' => 'Gagal Login'
            ];
        }
        $user = $user->find(Auth::user()->id);
        return[
            'status' => 1,
            'message' => 'Berhasil',
            'data' => $user
        ];
    }
}
