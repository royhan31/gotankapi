<?php

namespace App\Http\Controllers\API\Company;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Company;

class CompanyController extends Controller{
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
  
  public function show($id)    {
        $company = Company::find($id);
        if(is_null($company)){
			return response() -> json(array('message'=>'record not found', 'status'=>0),200);
        }
		return response()->json(['status' => 1,'message' => 'Ok','data' => $company
      ], 200);

    }
}
