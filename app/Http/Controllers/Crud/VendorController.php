<?php

namespace App\Http\Controllers\Crud;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Vendor;
use App\User;

class VendorController extends Controller
{
    public function index()
    {
    	$page = 'Pages.Vendor.vendor';
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

   // public function edit($id)
   // {
   //   // $user = Users::find($id);
   //   $user = Users::findOrFail($id);
   //   $modules = Module::with('Menus')->get();
   //   return view('SuperAdmin.Pages.User.edit_user', compact('modules', 'user'));
   // }
   //
   // public function update(Request $request, $id)
   // {
   //   $user = Users::findOrFail($id);
   //   $user->name = $request->name;
   //   $user->email = $request->email;
   //   $isSuccess = $user->save();
   //   if ($isSuccess) {
   //     // return success
   //     return redirect()->route('superadmin.user.data')->with('alert-success','Data berhasil diubah!');
   //   }
   //   else {
   //     // returm failed
   //     return redirect()->route('superadmin.user.data')->with('alert-failed','Data tidak berhasil diubah!');
   //   }
   //   $user->reset();
   //   return redirect()->route('superadmin.user.edit');
   //  }
   //
   //  public function destroy($id)
   //  {
   //     $user = Users::findOrFail($id);
   //    // $user = Users::where('id', $id)->first();
   //    $user->delete();
   //    return redirect()->route('superadmin.user.data')->with('alert-success','Data berhasi dihapus!');
   //  }
   //
   //
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
          return redirect()->route('vendor.index')->with('alert-success','Data berhasil ditambahkan!');
          $vendor->reset();
          return redirect()->route('vendor.index');
        }
}
