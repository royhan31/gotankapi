<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use App\Transformers\AdminTransformers;
use Auth;
use DB;

class AdminController extends Controller
{
    public function register(Request $request, Admin $admin)
    {

        // return 'regis';
        $this->validate($request, [
            'nama_admin' => 'required',
            'username' => 'required',
            'email' => 'required|email|unique:admins',
            'password' => 'required|min:6',
            'deskripsi_admin' => 'required',
            'foto_admin' => 'required',
            'alamat' => 'required',
        ]);

       $admin = $admin->create([
            'nama_admin' => $request->nama_admin,
            'username' => $request->username,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'api_token' => bcrypt($request->email),
            'deskripsi_admin' => $request->deskripsi_admin,
            'foto_admin' => $request->foto_admin,
            'alamat' => $request->alamat,

        ]);
            return [
                'status' => 1 ,
                'message' => 'Berhasil Daftar',
                'data' => $admin
            ];
    }

    public function login(Request $request,Admin $admin)
    {
        $credential = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if(!Auth::guard('admin')->attempt($credential, $request->member)){
            return [
                'status' => 0 ,
                'message' => 'Gagal Login'
            ];
        }
            $admin = $admin->find(Auth::guard('admin')->user()->id);
            return [
                'status' => 1 ,
                'message' => 'Berhasil',
                'data' => $admin
            ];

    }

    public function listAdmin(Admin $admin){
        $admins = $admin->all();

        // $rating = DB::table('admin_tanggapans')
        //         ->join('users','users.id', '=' , 'admin_tanggapans.user_id')
        //         ->select(DB::raw("round(SUM(admin_tanggapans.ratting)/count(admin_tanggapans.ratting),0) as hasil_ratting"))
        //         ->where('admin_tanggapans.admin_id',$admin)
        //         ->get();
        return response()->json($admins);
        // return[
        //     // 'status' => 1,
        //     // 'message' => 'Berhasil',
        //     'product' => $admins,
        //     // 'rating' => $rating
        // ];

    }

    public function getAdmin($admin){
        $admins = Admin::find($admin);
        $tanggapan = DB::table('admin_tanggapans')
                ->join('users','users.id', '=' , 'admin_tanggapans.user_id')
                ->select('admin_tanggapans.komentar','admin_tanggapans.ratting','users.nama_user')
                ->where('admin_tanggapans.admin_id',$admin)
                ->get();

        $rating = DB::table('admin_tanggapans')
                ->join('users','users.id', '=' , 'admin_tanggapans.user_id')
                ->select(DB::raw("round(SUM(admin_tanggapans.ratting)/count(admin_tanggapans.ratting),0) as hasil_ratting"))
                ->where('admin_tanggapans.admin_id',$admin)
                ->get();
        //$ratings = /count($rating)
        return [
            'status' => 1 ,
            'message' => 'Berhasil',
            'data' => $admins,
            'tanggapan' => $tanggapan,
            'rating' => $rating
        ];
    }
}
