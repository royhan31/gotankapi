<?php

namespace App\Http\Controllers\API\Company;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Company;

class CompanyController extends Controller
{
  public function index(){
    $companies = Company::all();
    if ($companies->isEmpty()) {
      return response()->json([
        'status' => 0,
        'message' => 'Not Found',
      ], 200);
    }else{
      return response()->json([
        'status' => 1,
        'message' => 'Berhasil',
        'data' => $companies
      ], 200);
    }
  }
}
