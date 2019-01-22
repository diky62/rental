<?php

namespace App\Http\Controllers\Crud;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mobil;
use App\Vendor;

class MobilController extends Controller
{
    public function index()
    {
    	$page = 'Pages.Vendor.index';
      $data = Mobil::all();
      return view($page)->with(compact('data'));
    }

    public function create()
    {
      $page = 'Pages.Vendor.newMobil';
      $data = Mobil::all();
      $vendor = Vendor::all();
      return view($page)->with(compact('data', 'vendor'));
    }

   public function edit($id)
   {
     $data = Mobil::findOrFail($id);
     return view('Pages.Vendor.edit_mobil', compact('data'));
   }

   public function update(Request $request, $id)
   {
     $data = Mobil::findOrFail($id);
     $data->nama_mobil = $request->nama_mobil;
     $data->no_polisi = $request->no_polisi;
     $data->warna = $request->warna;
     $data->transmisi = $request->transmisi;
     $data->jumlah_penumpang = $request->jumlah_penumpang;
     $data->harga = $request->harga;
     $data->keterangan = $request->keterangan;
     $isSuccess = $data->save();
     if ($isSuccess) {
       // return success
       return redirect()->route('mobil.index')->with('alert-success','Data berhasil diubah!');
     }
     else {
       // returm failed
       return redirect()->route('mobil.index')->with('alert-failed','Data tidak berhasil diubah!');
     }
     $data->reset();
     return redirect()->route('mobil.edit');
    }

    public function destroy($id)
    {
      $data = Mobil::findOrFail($id);
      $data->delete();
      return redirect()->route('mobil.index')->with('alert-success','Data berhasi dihapus!');
    }

    public function createMobil(Request $request)
      {
          $data = new Mobil();
          $data->vendor_id = $request->input('nama_rental');
          $data->nama_mobil = $request->input('nama_mobil');
          $data->no_polisi = $request->input('no_polisi');
          $data->warna = $request->input('warna');
          $data->transmisi = $request->input('transmisi');
          $data->jumlah_penumpang = $request->input('jumlah_penumpang');
          $data->harga = $request->input('harga');
          $data->keterangan = $request->input('keterangan');
          $data->save();
          return redirect()->route('mobil.index')->with('alert-success','Data berhasil ditambahkan!');
          $user->reset();
          return redirect()->route('mobil.index');
        }
}
