<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use App\Transformers\AdminTransformers;
//use Illuminate\Support\Facades\Auth;
use Auth;
class AuthController extends Controller
{
    // public function register(Request $request, Admin $admin)
    // {

    //     // return 'regis';
    //     $this->validate($request, [
    //         'nama_admin' => 'required',
    //         'username' => 'required',
    //         'email' => 'required|email|unique:admins',
    //         'password' => 'required|min:6',
    //         'deskripsi_admin' => 'required',
    //         'foto_admin' => 'required',
    //         'alamat' => 'required',
    //     ]);

    //    $admin = $admin->create([
    //         'nama_admin' => $request->nama_admin,
    //         'username' => $request->username,
    //         'email' => $request->email,
    //         'password' => bcrypt($request->password),
    //         'api_token' => bcrypt($request->email),
    //         'deskripsi_admin' => $request->deskripsi_admin,
    //         'foto_admin' => $request->foto_admin,
    //         'alamat' => $request->alamat,

    //     ]);
    //         return [
    //             'status' => 1 ,
    //             'message' => 'Berhasil',
    //             'data' => $admin
    //         ];
    // }

    // public function login(Request $request,Admin $admin)
    // {
    //     $credential = [
    //         'email' => $request->email,
    //         'password' => $request->password
    //     ];

    //     if(!Auth::guard('admin')->attempt($credential, $request->member)){
    //         return [
    //             'status' => 0 ,
    //             'message' => 'Gagal Login'
    //         ];
    //     }
    //         $admin = $admin->find(Auth::guard('admin')->user()->id);
    //         return [
    //             'status' => 1 ,
    //             'message' => 'Berhasil',
    //             'data' => $admin
    //         ];

    // }

    // public function getAdmin(Admin $admin){
    //     $admin = $admin->find($admin);

    //     return [
    //         'status' => 1 ,
    //         'message' => 'Berhasil',
    //         'data' => $admin
    //     ];
    // }
}
