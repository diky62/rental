<?php

namespace App\Http\Controllers\Crud;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Role;

class RoleController extends Controller
{
  public function index()
  {
      $page = 'Pages.Role.RoleManagement';
      //$modules = Module::with('Menus')->get();
      //$data = Role::all();
      // $accesses = Module::with('Access')->get();
      return view($page);
  }
  public function create()
    {
        $page = 'Pages.Role.newRole';
        // $modules = Module::with('Menus')->get();
        return view($page);
	}

}
