<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\rumah_sakit;

class RumahSakitController extends Controller
{
    public function awal()
    {
        return view('rumah_sakit.awal', ['data'=>rumah_sakit::all()]);
    }

    
    public function tambah()
    {
        return view('rumah_sakit.tambah');
    }

    public function simpan(Request $input)
    {
        $this->validate($input,[
        'nama'=>'required',
        'nomor'=>'required',
        'alamat'=>'required'
        ]);
        $rumah_sakit = new rumah_sakit();
        $rumah_sakit->nama = $input->nama;
        $rumah_sakit->nomor = $input->nomor;
        $rumah_sakit->alamat = $input->alamat;
        $informasi = $rumah_sakit->save() ? 'Data berhasi disimpan' : 'Data gagal disimpan';
        return redirect('rumah_sakit')->with(['informasi'=>$informasi]);
    }

    public function edit($id)
    {
        $rumah_sakit = rumah_sakit::find($id);
        return view('rumah_sakit.edit')->with(array('rumah_sakit'=>$rumah_sakit));
    }

    public function lihat($id)
    {
        $rumah_sakit = rumah_sakit::find($id);
        return view('rumah_sakit.lihat')->with(array('rumah_sakit'=>$rumah_sakit));
    }

    public function update($id, Request $input)
    {
        $rumah_sakit = rumah_sakit::find($id);
        $rumah_sakit->nama = $input->nama;
        $rumah_sakit->nomor = $input->nomor;
        $rumah_sakit->alamat = $input->alamat;
        $informasi = $rumah_sakit->save() ? 'Data berhasi diubah' : 'Data gagal diubah';
        return redirect('rumah_sakit')->with(['informasi'=>$informasi]);
    }

    public function hapus($id)
    {
        $rumah_sakit = rumah_sakit::find($id);
        $informasi = $rumah_sakit->delete() ? 'Data berhasil dihapus' : 'Data gagal dihapus';
        return redirect('rumah_sakit')->with(['informasi'=>$informasi]);
    }
}
