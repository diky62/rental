<?php

namespace App\Http\Controllers\Crud;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\UsersMobile;

class UserMobileController extends Controller
{
  public function index()
  {
    $page = 'Pages.UserVendor.user_mobile';
    $data = UsersMobile::all();
    return view($page)->with(compact('data'));
  }

  public function destroy($id)
  {
    $data = UsersMobile::findOrFail($id);
    $data->delete();
    return redirect()->route('user.mobile')->with('alert-success','Data berhasi dihapus!');
  }
}
