<?php

namespace App\Http\Controllers\Crud;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Roles;
use App\Provinsi;
use App\Kabupaten;
use App\Kecamatan;

class ControllerUser extends Controller
{
    public function data()
    {
    	$page = 'Pages.User.table_user';
      $user = User::all();
      return view($page)->with(compact('user'));
    }

    // public function newUser()
    //   {
    //       $page = 'Pages.User.tambah_user';
    //       $user = User::all();
    //       return view($page)->with(compact('user'));
    // }

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
    public function destroy($id)
    {
      $user = User::findOrFail($id);
      $user->delete();
      return redirect()->route('user.data')->with('alert-success','Data berhasi dihapus!');
    }
   //
   //
   //  public function createUser(Request $request)
   //    {
   //        $user = new Users();
   //        $user->name = $request->input('name');
   //        $user->role_id = $request->input('level');
   //        $user->email = $request->input('email');
   //        $user->fill([
   //          'password' => bcrypt($request->password)
   //        ]);
   //        $user->save();
   //        return redirect()->route('superadmin.user.data')->with('alert-success','Data berhasil ditambahkan!');
   //        $user->reset();
   //        return redirect()->route('superadmin.user.data');
   //      }
}
