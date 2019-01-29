<?php

namespace App\Http\Controllers\Crud;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfilManagementController extends Controller
{
    public function index()
    {
        $page = 'Pages2.profil.index';
        return view($page);
	  }

	// public function create()
 //    {
 //        $page = 'Pages.Role.newRole';
 //        $data = Roles::all();
 //        return view($page)->with(compact('data'));
	// }
}
