<?php

namespace App\Http\Controllers\Crud;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Rental;
use App\User;
use App\Mobil;

class RentalController extends Controller
{
    public function index()
    {
    	$page = 'Pages.Report.index';
      $rental = Rental::all();
      return view($page)->with(compact('rental'));
    }

    // public function create()
    // {
    //   $page = 'Pages.Report.newRental';
    //   $rental = Rental::all();
    //   return view($page)->with(compact('rental'));
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
      $rental = Rental::findOrFail($id);
      $rental->delete();
      return redirect()->route('rental.index')->with('alert-success','Data berhasi dihapus!');
    }
   //
   //
    // public function createUser(Request $request)
    //   {
    //       $user = new Users();
    //       $user->name = $request->input('name');
    //       $user->role_id = $request->input('level');
    //       $user->email = $request->input('email');
    //       $user->fill([
    //         'password' => bcrypt($request->password)
    //       ]);
    //       $user->save();
    //       return redirect()->route('superadmin.user.data')->with('alert-success','Data berhasil ditambahkan!');
    //       $user->reset();
    //       return redirect()->route('superadmin.user.data');
    //     }
}
