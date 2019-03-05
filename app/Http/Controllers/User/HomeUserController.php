<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use DateTime;
use App\Stok;
use App\Mobil;
use App\User;
use App\Rental;


class HomeUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user/home.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request, $id )
    {
        // $a = $request['tgl_pinjam'];
        $a = $request['tgl_pinjam'];
        $b = $request['tgl_kembali'];
        $harga = $request['harga'];
        $datetime1 = new DateTime("$b");
        $datetime2 = new DateTime("$a");
        $interval = $datetime1->diff($datetime2);
        $lama = $interval->days;
        // dd($user);
        $jumlah=$harga*$lama;
        $random = rand(1,999);
        $total = $jumlah+$random;
        // dd($total);

        $data['stok'] = Stok::with('mobil')->find($id);
        $data ['user'] = User::find(Auth::user()->id);
        return view('user/home.rent',$data, ['a' => $a, 'b' => $b, 'interval' => $interval, 'total' => $total]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $data = new Rental();
          $data->users_id = $request->input('user_id');
          $data->mobil_id = $request->input('mobil_id');
          $data->tanggal_rental = $request->input('tgl_pinjam');
          $data->tanggal_kembali = $request->input('tgl_kembali');
          $data->lama_pinjam = $request->input('lama');
          $data->harga_sewa = $request->input('total');
          $data->status = $request->input('status');
          $data->save();

            return redirect('success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function rent()
    {
        return view('user/home.succes');        
    }


    public function show(Request $request)
    {
        $a = $request['tgl_pinjam'];
        $b = $request['tgl_kembali'];
        // dd($a);
        $data['stok'] = Stok::with('mobil')->where('tanggal','=',$a)->where('status',1)->get();
        // dd($data);
        return view('user/home.show', $data, ['a' => $a, 'b' => $b]);
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
    public function succes()
    {
        
      
    }
}
