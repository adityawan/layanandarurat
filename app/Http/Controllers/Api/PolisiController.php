<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\polisi;

class PolisiController extends Controller
{
    public function index(){
    	
	    $polisi = polisi::all();

	    return response()->json(['data' => $polisi], 200, [], JSON_NUMERIC_CHECK);
	}
}
