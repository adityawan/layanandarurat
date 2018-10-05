<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\rumah_sakit;

class RumahSakitController extends Controller
{
    public function index(){
	    $rumah_sakit = rumah_sakit::all();

	    return response()->json(['data' => $rumah_sakit], 200, [], JSON_NUMERIC_CHECK);
	}
}
