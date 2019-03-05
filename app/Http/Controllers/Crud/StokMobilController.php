<?php

namespace App\Http\Controllers\Crud;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mobil;
use App\Stok;

class StokMobilController extends Controller
{
  public function index()
  {
    $page = 'Pages.Vendor.stok';
    $stok = Stok::all();
    $data = Mobil::all();
    return view($page)->with(compact('data', 'stok'));
  }

  public function create()
  {
    $page = 'Pages.Vendor.newStokMobil';
    $stok = Stok::all();
    $data = Mobil::all();
    return view($page)->with(compact('data', 'stok'));
  }

  public function edit($id)
  {
    $page = 'Pages.Vendor.edit_stok_mobil';
    $stok = Stok::findOrFail($id);
    $data = Mobil::all();
    return view($page)->with(compact('stok', 'data'));
  }

  public function update(Request $request, $id)
  {
    $data = Stok::findOrFail($id);
    $data->nama_mobil = $request->nama_mobil;
    $data->tanggal = $request->tanggal;
    $isSuccess = $data->save();
    if ($isSuccess) {
      // return success
      return redirect()->route('stok.mobil')->with('alert-success','Data berhasil diubah!');
    }
    else {
      // returm failed
      return redirect()->route('stok.mobil')->with('alert-failed','Data tidak berhasil diubah!');
    }
    $data->reset();
    return redirect()->route('stok_mobil.edit');
   }

   public function destroy($id)
   {
     $data = Stok::findOrFail($id);
     $data->delete();
     return redirect()->route('stok.mobil')->with('alert-success','Data berhasi dihapus!');
   }

   public function createStokMobil(Request $request)
     {
         $data = new Stok();
         $data->mobil_id = $request->input('nama_mobil');
         $data->tanggal = $request->input('tanggal');
         $data->status = $request->input('status');
         $data->save();
         return redirect()->route('stok.mobil')->with('alert-success','Data berhasil ditambahkan!');
         $data->reset();
         return redirect()->route('stok.mobil');
       }

    public function StokMobilStatus(Request $request, $id){
      $StokMobilStatus = Stok::findOrFail($id);
      if($StokMobilStatus->status == 0 || null){
        $StokMobilStatus->status = $request->status = 1;
        $StokMobilStatus->save();
       return redirect()->route('stok.mobil');
      }
      else {
        $StokMobilStatus->status = $request->status = 0;
        $StokMobilStatus->save();
        return redirect()->route('stok.mobil');
      }
    }
}
