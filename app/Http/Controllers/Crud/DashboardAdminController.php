<?php

namespace App\Http\Controllers\Crud;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardAdminController extends Controller
{
  public function index()
  {
     return view('layouts.dashboar_admin');
  }
}
