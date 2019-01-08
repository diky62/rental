<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Model\Users;
use App\Model\Module;
use App\Model\Menu;
use App\Model\Acces;
use App\Model\Role;

class SystemController extends Controller
{
  public function index(){
      $page = 'layouts.admin_view';

      $user = Users::where('id', Auth::user()->id)->first();
      $role = Role::where('id', $user->roles_id)->first();
      $accesses = Acces::where('roles_id', $role->id)->orderBy('modules_id', 'ASC')->orderBy('menus_id', 'ASC')->get();


        //menu sudah ditampilkan sesuai dengan idnya, tapi modulnya belum. bagaimana caranya supaya module
        $modules = array();
        $lastModuleId = null;
        foreach ($accesses as $accessModule) {
            $menus = array();
            $module = Module::where('id', $accessModule->modules_id)->first();
            foreach ($module->Menus as $menu) {
                foreach ($accesses as $accessMenu) {
                    if($menu->id == $accessMenu->menus_id){
                        $menu = Menu::where('id', $accessMenu->menus_id)->first();
                        $menus[] = $menu;
                    }
                }
            }

            $module->menus = $menus;

            if($lastModuleId != $accessModule->modules_id) {
                //$module = Module::where('id', $accessModule->module_id)->first();
                $lastModuleId = $accessModule->modules_id;
                $modules[] = $module;
            }
        }
        return view($page)->with(compact('modules'));
    }
}
