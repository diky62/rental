<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Response;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\User;
use App\Roles;
use App\Provinsi;
use App\Kabupaten;
use App\Kecamatan;

class Register1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data["provinsi"] = Provinsi::get();
        $data["kabupaten"] = Kabupaten::get();
        $data["kecamatan"] = Kecamatan::get();
        $data["roles"] = Roles::get();
        return view('auth.register',$data);
    }
      
        
    // }
    // public function index(){
    //     $page = 'auth.register';
    //     $provinsi = Provinsi::all();
    //     $roles = Roles::get();
    //     return view($page)->with(compact('provinsi', 'roles'));
    // }

    // public function kabupaten(){
    //   $provinsi_id = Input::get('provinsi_id');
    //   $kabupaten = Kabupaten::where('provinsi_id', '=', $provinsi_id)->get();
    //   return response()->json($kabupaten);
    // }

    // public function kecamatan(){
    //   $kabupaten_id = Input::get('kabupaten_id');
    //   $kecamatan = Kecamatan::where('kabupaten_id', '=', $kabupaten_id)->get();
    //   return response()->json($kecamatan);
    // }
   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data['user']=User::create([
            'name' => $request['name'],
            'nik' => $request['nik'],
            'provinsi_id' => $request['provinsi_id'],
            'kabupaten_id' => $request['kabupaten_id'],
            'kecamatan_id' => $request['kecamatan_id'],
            'alamat'=> $request['alamat'],
            'email' => $request['email'],
            'roles_id'=> $request['roles_id'],
            'password' => bcrypt($request['password'])
            
        ]);
        return redirect('login');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
