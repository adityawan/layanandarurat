<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\balakar;

class BalakarController extends Controller
{
    public function awal()
    {
        return view('balakar.awal', ['data'=>balakar::all()]);
    }

    public function tambah()
    {
        return view('balakar.tambah');
    }

    public function simpan(Request $input)
    {
        $this->validate($input,[
        'nama'=>'required',
        'nomor'=>'required',
        'alamat'=>'required',
        ]);
        $balakar = new balakar();
        $balakar->nama = $input->nama;
        $balakar->nomor = $input->nomor;
        $balakar->alamat = $input->alamat;
        $informasi = $balakar->save() ? 'Data berhasi disimpan' : 'Data gagal disimpan';
        return redirect('balakar')->with(['informasi'=>$informasi]);
    }
    
    public function edit($id)
    {
        $balakar = balakar::find($id);
        return view('balakar.edit')->with(array('balakar'=>$balakar));
    }

    public function lihat($id)
    {
        $balakar = balakar::find($id);
        return view('balakar.lihat')->with(array('balakar'=>$balakar));
    }

    public function update($id, Request $input)
    {
        $balakar = balakar::find($id);
        $balakar->nama = $input->nama;
        $balakar->nomor = $input->nomor;
        $balakar->alamat = $input->alamat;
        $informasi = $balakar->save() ? 'Data berhasi diubah' : 'Data gagal diubah';
        return redirect('balakar')->with(['informasi'=>$informasi]);
    }

    public function hapus($id)
    {
        $balakar = balakar::find($id);
        $informasi = $balakar->delete() ? 'Data berhasil dihapus' : 'Data gagal dihapus';
        return redirect('balakar')->with(['informasi'=>$informasi]);
    }
}
