<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\saran;
use App\Http\request\SaranRequest;

class SaranController extends Controller
{
    public function awal()
    {
        return view('saran.awal', ['data'=>saran::all()]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function lihat($id)
    {
        $saran = saran::find($id);
        return view('saran.lihat')->with(array('saran'=>$saran));
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function hapus($id)
    {
        $saran = saran::find($id);
        $informasi = $saran->delete() ? 'Data berhasil dihapus' : 'Data gagal dihapus';
        return redirect('saran')->with(['informasi'=>$informasi]);
    }
}
