<?php

namespace App\Http\Controllers;

use App\Models\Cloting;
use App\Models\Alamat;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AppController extends Controller
{   
    public function index() {
        $clothings = Cloting::all();
        return view('user.index', [
            'clothings' => $clothings,
            'title'     => 'Codevo | Jual Beli Online di Indonesia',
        ]);
    }

    public function show($id, Cloting $clothing) {
        $clothing = Cloting::where('id', $id)->first();
        return view('user.show_product', [
            'title'     => $clothing->title . ' | Codevo',
            'clothing'  => $clothing
        ]); 
    }

    public function showPengiriman($id, Cloting $clothing, Alamat $pengiriman)
    {
        $clothing = Cloting::where('id', $id)->first();
        $pengiriman = Cloting::where('id', $id)->first();
        return view('user.lihat', [
            'clothing'  => $clothing,
            'pengiriman'=> $pengiriman,
            'title'     => 'Selamat!'
        ]);
    }

    public function createPengiriman($id, Cloting $clothing)
    {
        $clothing = Cloting::where('id', $id)->first();
        return view('user.dibuat', [
            'title' => 'Data Pengiriman | ' . $clothing->title,
            'clothing' => $clothing
        ]);
    }

    public function storePengiriman(Request $request) {

        $this->validate($request, [
            'nama'          => 'required',
            'email'         => 'required',
            'kelas'         => 'required',
            'alamat'        => 'required',
            'nomor_telepon' => 'required',
            'nama_barang'   => 'required',
            'harga'         => 'required'
        ]);

        $alamat = Alamat::create([
            'nama'           => $request->nama,
            'email'          => $request->email,
            'kelas'          => $request->kelas,
            'alamat'         => $request->alamat,
            'nomor_telepon'  => $request->nomor_telepon,
            'nama_barang'    => $request->nama_barang,
            'harga'          => $request->harga
        ]);

        if($alamat){
            //redirect dengan pesan sukses
            return redirect()->route('user.lihat', $alamat->id)->with(['success' => 'Data Pengiriman Terkirim!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('user.lihat', $alamat->id)->with(['error' => 'Data Pengiriman Gagal Terkirim!']);
        }
    }
}
