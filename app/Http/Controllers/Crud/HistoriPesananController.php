<?php

namespace App\Http\Controllers\Crud;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HistoriPesananController extends Controller
{
     public function index()
    {
        $page = 'Pages2.histori.index';
        return view($page);
	  }
}
