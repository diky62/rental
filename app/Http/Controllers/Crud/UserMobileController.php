<?php

namespace App\Http\Controllers\Crud;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\User;

class UserMobileController extends Controller
{
  public function index()
  {
    $page = 'Pages.UserVendor.user_mobile';
    $name["users"] = User::find(Auth::user()->id);
    return view($page)->with(compact('data', 'name'));
  }

  public function destroy($id)
  {
    $data = User::findOrFail($id);
    $data->delete();
    return redirect()->route('user.mobile')->with('alert-success','Data berhasi dihapus!');
  }
}
