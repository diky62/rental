<?php

namespace App\Http\Controllers\Crud;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Roles;
use App\Provinsi;
use App\Kabupaten;
use App\Kecamatan;

class UserMobileController extends Controller
{
  public function index()
  {
    $page = 'Pages.UserVendor.user_mobile';
    $user = User::where('roles_id',3)->get();
    return view($page)->with(compact('user'));
  }
}
