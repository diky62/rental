<?php

namespace App\Http\Controllers\Crud;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mobil;

class StokMobilController extends Controller
{
  public function index()
  {
    return view('Pages.Vendor.stok');
  }

  public function create()
  {
    $page = 'Pages.Vendor.newStokMobil';
    $data = Mobil::all();
    return view($page)->with(compact('data'));
  }

  public function edit($id)
  {
    $data = Mobil::findOrFail($id);
    return view('Pages.Vendor.edit_stok_mobil', compact('data'));
  }

  public function update(Request $request, $id)
  {
    $data = StokMobil::findOrFail($id);
    $data->nama_mobil = $request->nama_mobil;
    $data->tanggal = $request->tanggal;
    $isSuccess = $data->save();
    if ($isSuccess) {
      // return success
      return redirect()->route('stok_mobil.index')->with('alert-success','Data berhasil diubah!');
    }
    else {
      // returm failed
      return redirect()->route('stok_mobil.index')->with('alert-failed','Data tidak berhasil diubah!');
    }
    $data->reset();
    return redirect()->route('stok_mobil.edit');
   }

   public function destroy($id)
   {
     $data = StokMobil::findOrFail($id);
     $data->delete();
     return redirect()->route('stok_mobil.index')->with('alert-success','Data berhasi dihapus!');
   }

   public function createStokMobil(Request $request)
     {
         $data = new StokMobil();
         $data->mobil_id = $request->input('nama_mobil');
         $data->tanggal = $request->input('tanggal');
         $data->save();
         return redirect()->route('stok_mobil.index')->with('alert-success','Data berhasil ditambahkan!');
         $user->reset();
         return redirect()->route('stok_mobil.index');
       }
}
    public function StokMobilStatus(Request $request, $id){
      $StokMobilStatus = StokMobil::findOrFail($id);
      if($StokMobilStatus->status == 0 || null){
        $StokMobilStatus->status = $request->status = 1;
        $StokMobilStatus->save();
       return redirect()->route('vendor.index');
      }
      else {
        $StokMobilStatus->status = $request->status = 0;
        $StokMobilStatus->save();
        return redirect()->route('vendor.index');
      }
    }

}
