<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\pemadam_kebakaran;


class PemadamKebakaranController extends Controller
{
    public function index(){
	    $pemadam_kebakaran = pemadam_kebakaran::all();

	    return response()->json(['data' => $pemadam_kebakaran], 200, [], JSON_NUMERIC_CHECK);
	}
}
