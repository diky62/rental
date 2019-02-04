<?php

namespace App\Http\Controllers\Crud;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class ProfilManagementController extends Controller
{
    public function index()
    {
        $page = 'Pages2.profil.index';
        $user = Auth::User()->id;
        $user = User::all();
        return view($page)->with(compact('user'));
	  }

	// public function create()
 //    {
 //        $page = 'Pages.Role.newRole';
 //        $data = Roles::all();
 //        return view($page)->with(compact('data'));
	// }
}
