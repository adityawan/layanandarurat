<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\polisi;

class PolisiController extends Controller
{
    public function awal()
    {
        return view('polisi.awal', ['data' => polisi::all()]);
    }

    public function tambah()
    {
        return view('polisi.tambah');
    }

    public function simpan(Request $input)
    {
        $this->validate($input,[
        'nama'=>'required',
        'nomor'=>'required',
        'alamat'=>'required',
        ]);

        $polisi = new polisi();
        $polisi->nama = $input->nama;
        $polisi->nomor = $input->nomor;
        $polisi->alamat = $input->alamat;
        $informasi = $polisi->save() ? 'Data berhasi disimpan' : 'Data gagal disimpan';
        return redirect('polisi')->with(['informasi'=>$informasi]);
    }

    public function edit($id)
    {
        $polisi = polisi::find($id);
        return view('polisi.edit')->with(array('polisi'=>$polisi));
    }

    public function lihat($id)
    {
        $polisi = polisi::find($id);
        return view('polisi.lihat')->with(array('polisi'=>$polisi));
    }

    public function update($id, Request $input)
    {
        $polisi = polisi::find($id);
        $polisi->nama = $input->nama;
        $polisi->nomor = $input->nomor;
        $polisi->alamat = $input->alamat;
        $informasi = $polisi->save() ? 'Data berhasi diubah' : 'Data gagal diubah';
        return redirect('polisi')->with(['informasi'=>$informasi]);
    }

    public function hapus($id)
    {
        $polisi = polisi::find($id);
        $informasi = $polisi->delete() ? 'Data berhasil dihapus' : 'Data gagal dihapus';
        return redirect('polisi')->with(['informasi'=>$informasi]);
    }
}
