<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\pemadam_kebakaran;

class PemadamKebakaranController extends Controller
{
     public function awal()
    {
        return view('pemadam_kebakaran.awal', ['data'=>pemadam_kebakaran::all()]);
    }

    public function tambah()
    {
        return view('pemadam_kebakaran.tambah');
    }

    public function simpan(Request $input)
    {
        $this->validate($input,[
        'nama'=>'required',
        'nomor'=>'required',
        'alamat'=>'required',
        ]);
        $pemadam_kebakaran = new pemadam_kebakaran();
        $pemadam_kebakaran->nama = $input->nama;
        $pemadam_kebakaran->nomor = $input->nomor;
        $pemadam_kebakaran->alamat = $input->alamat;
        $informasi = $pemadam_kebakaran->save() ? 'Data berhasi disimpan' : 'Data gagal disimpan';
        return redirect('pemadam_kebakaran')->with(['informasi'=>$informasi]);
    }
    
    public function edit($id)
    {
        $pemadam_kebakaran = pemadam_kebakaran::find($id);
        return view('pemadam_kebakaran.edit')->with(array('pemadam_kebakaran'=>$pemadam_kebakaran));
    }

    public function lihat($id)
    {
        $pemadam_kebakaran = pemadam_kebakaran::find($id);
        return view('pemadam_kebakaran.lihat')->with(array('pemadam_kebakaran'=>$pemadam_kebakaran));
    }

    public function update($id, Request $input)
    {
        $pemadam_kebakaran = pemadam_kebakaran::find($id);
        $pemadam_kebakaran->nama = $input->nama;
        $pemadam_kebakaran->nomor = $input->nomor;
        $pemadam_kebakaran->alamat = $input->alamat;
        $informasi = $pemadam_kebakaran->save() ? 'Data berhasi diubah' : 'Data gagal diubah';
        return redirect('pemadam_kebakaran')->with(['informasi'=>$informasi]);
    }

    public function hapus($id)
    {
        $pemadam_kebakaran = pemadam_kebakaran::find($id);
        $informasi = $pemadam_kebakaran->delete() ? 'Data berhasil dihapus' : 'Data gagal dihapus';
        return redirect('pemadam_kebakaran')->with(['informasi'=>$informasi]);
    }
}
