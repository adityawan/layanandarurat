<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('polisi', 'Api\PolisiController@index');
Route::get('polisi/{polisi}', 'Api\PolisiController@lihat');
Route::get('rumah_sakit', 'Api\RumahSakitController@index');
Route::get('pemadam_kebakaran', 'Api\PemadamKebakaranController@index');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::get('/getApi', 'ApiController@getApi');
