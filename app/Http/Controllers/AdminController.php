<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\admin;

class AdminController extends Controller
{
    public function awal()
    {
        return view('admin.awal', ['data'=>admin::all()]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $admin = admin::find($id);
        return view('admin.edit')->with(array('admin'=>$admin));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $admin = admin::find($id);
        $admin->username = $input->username;
        $admin->password = $input->password;
        $admin->email = $input->email;
        $informasi = $admin->save() ? 'Data berhasi diubah' : 'Data gagal diubah';
        return redirect('admin')->with(['informasi'=>$informasi]);
    }

    public function hapus($id)
    {
        $admin = admin::find($id);
        $informasi = $admin->delete() ? 'Data berhasil dihapus' : 'Data gagal dihapus';
        return redirect('admin')->with(['informasi'=>$informasi]);
    }
}
