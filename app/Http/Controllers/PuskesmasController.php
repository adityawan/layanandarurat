<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\puskesmas;

class PuskesmasController extends Controller
{
    public function awal()
    {
        return view('puskesmas.awal', ['data'=>puskesmas::all()]);
    }

    public function tambah()
    {
        return view('puskesmas.tambah');
    }

    public function simpan(Request $input)
    {
        $this->validate($input,[
        'nama'=>'required',
        'nomor'=>'required',
        'alamat'=>'required',
        ]);
        $puskesmas = new puskesmas();
        $puskesmas->nama = $input->nama;
        $puskesmas->nomor = $input->nomor;
        $puskesmas->alamat = $input->alamat;
        $informasi = $puskesmas->save() ? 'Data berhasi disimpan' : 'Data gagal disimpan';
        return redirect('puskesmas')->with(['informasi'=>$informasi]);
    }
    
    public function edit($id)
    {
        $puskesmas = puskesmas::find($id);
        return view('puskesmas.edit')->with(array('puskesmas'=>$puskesmas));
    }

    public function lihat($id)
    {
        $puskesmas = puskesmas::find($id);
        return view('puskesmas.lihat')->with(array('puskesmas'=>$puskesmas));
    }

    public function update($id, Request $input)
    {
        $puskesmas = puskesmas::find($id);
        $puskesmas->nama = $input->nama;
        $puskesmas->nomor = $input->nomor;
        $puskesmas->alamat = $input->alamat;
        $informasi = $puskesmas->save() ? 'Data berhasi diubah' : 'Data gagal diubah';
        return redirect('puskesmas')->with(['informasi'=>$informasi]);
    }

    public function hapus($id)
    {
        $puskesmas = puskesmas::find($id);
        $informasi = $puskesmas->delete() ? 'Data berhasil dihapus' : 'Data gagal dihapus';
        return redirect('puskesmas')->with(['informasi'=>$informasi]);
    }
}
