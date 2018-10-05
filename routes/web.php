<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('login');
});

Auth::routes();

// Route::get('/login','SesiController@form');
// 	Route::post('/login','Auth\LoginController@login');
	Route::get('/logout', 'Auth\LoginController@logout');
// 	Route::get('/home', 'SesiController@index');



	// Route::get('admin','AdminController@awal');
	// Route::get('admin/tambah','AdminController@tambah');
	// Route::get('admin/{admin}','AdminController@lihat');
	// Route::post('admin/simpan','AdminController@simpan');
	// Route::get('admin/edit/{admin}','AdminController@edit');
	// Route::post('admin/edit/{admin}','AdminController@update');
	// Route::get('admin/hapus/{admin}','AdminController@hapus');

	Route::get('polisi','PolisiController@awal');
	Route::get('polisi/tambah','PolisiController@tambah');
	Route::get('polisi/{polisi}','PolisiController@lihat');
	Route::post('polisi/simpan','PolisiController@simpan');
	Route::get('polisi/edit/{polisi}','PolisiController@edit');
	Route::post('polisi/edit/{polisi}','PolisiController@update');
	Route::get('polisi/hapus/{polisi}','PolisiController@hapus');

	Route::get('rumah_sakit','RumahSakitController@awal');
	Route::get('rumah_sakit/tambah','RumahSakitController@tambah');
	Route::get('rumah_sakit/{rumah_sakit}','RumahSakitController@lihat');
	Route::post('rumah_sakit/simpan','RumahSakitController@simpan');
	Route::get('rumah_sakit/edit/{rumah_sakit}','RumahSakitController@edit');
	Route::post('rumah_sakit/edit/{rumah_sakit}','RumahSakitController@update');
	Route::get('rumah_sakit/hapus/{rumah_sakit}','RumahSakitController@hapus');

	Route::get('puskesmas','PuskesmasController@awal');
	Route::get('puskesmas/tambah','PuskesmasController@tambah');
	Route::get('puskesmas/{puskesmas}','PuskesmasController@lihat');
	Route::post('puskesmas/simpan','PuskesmasController@simpan');
	Route::get('puskesmas/edit/{puskesmas}','PuskesmasController@edit');
	Route::post('puskesmas/edit/{puskesmas}','PuskesmasController@update');
	Route::get('puskesmas/hapus/{puskesmas}','PuskesmasController@hapus');

	Route::get('pemadam_kebakaran','PemadamKebakaranController@awal');
	Route::get('pemadam_kebakaran/tambah','PemadamKebakaranController@tambah');
	Route::get('pemadam_kebakaran/{pemadam_kebakaran}','PemadamKebakaranController@lihat');
	Route::post('pemadam_kebakaran/simpan','PemadamKebakaranController@simpan');
	Route::get('pemadam_kebakaran/edit/{pemadam_kebakaran}','PemadamKebakaranController@edit');
	Route::post('pemadam_kebakaran/edit/{pemadam_kebakaran}','PemadamKebakaranController@update');
	Route::get('pemadam_kebakaran/hapus/{pemadam_kebakaran}','PemadamKebakaranController@hapus');

	Route::get('balakar','BalakarController@awal');
	Route::get('balakar/tambah','BalakarController@tambah');
	Route::get('balakar/{balakar}','BalakarController@lihat');
	Route::post('balakar/simpan','BalakarController@simpan');
	Route::get('balakar/edit/{balakar}','BalakarController@edit');
	Route::post('balakar/edit/{balakar}','BalakarController@update');
	Route::get('balakar/hapus/{balakar}','BalakarController@hapus');

	Route::get('saran','SaranController@awal');
	Route::get('saran/tambah','SaranController@tambah');
	Route::get('saran/{saran}','SaranController@lihat');
	Route::post('saran/simpan','SaranController@simpan');
	Route::get('saran/edit/{saran}','SaranController@edit');
	Route::post('saran/edit/{saran}','SaranController@update');
	Route::get('saran/hapus/{saran}','SaranController@hapus');

	Route::get('pengguna','PenggunaController@awal');
	Route::get('pengguna/hapus/{saran}','PenggunaController@hapus');
	



Route::get('/home', 'HomeController@index')->name('home');
