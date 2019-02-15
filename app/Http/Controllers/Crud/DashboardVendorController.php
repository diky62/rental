<?php

namespace App\Http\Controllers\Crud;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardVendorController extends Controller
{
  public function index()
  {
     return view('layouts.dashboar_vendor');
  }
}
