<?php

namespace App\Http\Controllers\Crud;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Vendor;
use App\User;

class Vendor1Controller extends Controller
{
    public function index1()
    {
    	$page = 'Pages.Vendor.vendor1';
      $vendor = Vendor::all();
      return view($page)->with(compact('vendor'));
    }

    public function create()
    {
      $page = 'Pages.Vendor.newVendor';
      $vendor = Vendor::all();
      $names = User::all();
      return view($page)->with(compact('vendor', 'names'));
    }

   public function edit($id)
   {
     $vendor = Vendor::findOrFail($id);
     return view('Pages.Vendor.edit_vendor', compact('vendor'));
   }

   public function update(Request $request, $id)
   {
     $vendor = Vendor::findOrFail($id);
     $vendor->nama_rental = $request->nama_rental;
     $vendor->alamat = $request->alamat;
     $vendor->no_rekening = $request->no_rekening;
     $vendor->nama_pemilik = $request->nama_pemilik;
     $vendor->nama_bank = $request->nama_bank;
     $vendor->no_hp = $request->no_hp;
     $isSuccess = $vendor->save();
     if ($isSuccess) {
       // return success
       return redirect()->route('vendor.index1')->with('alert-success','Data berhasil diubah!');
     }
     else {
       // returm failed
       return redirect()->route('vendor.index1')->with('alert-failed','Data tidak berhasil diubah!');
     }
     $vendor->reset();
     return redirect()->route('vendor.edit');
    }

    public function createVendor(Request $request)
      {
          $vendor = new Vendor();
          $vendor->users_id = $request->input('name');
          $vendor->nama_rental = $request->input('nama_rental');
          $vendor->alamat = $request->input('alamat');
          $vendor->no_rekening = $request->input('no_rekening');
          $vendor->nama_pemilik = $request->input('nama_pemilik');
          $vendor->nama_bank = $request->input('nama_bank');
          $vendor->no_hp = $request->input('no_hp');
          $vendor->save();
          return redirect()->route('vendor.index1')->with('alert-success','Data berhasil ditambahkan!');
          $vendor->reset();
          return redirect()->route('vendor.index1');
        }
}
