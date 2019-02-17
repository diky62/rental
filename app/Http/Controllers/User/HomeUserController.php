<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DateTime;
use App\Stok;
use App\Mobil;


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
        $datetime1 = new DateTime("$b");
        $datetime2 = new DateTime("$a");
        $interval = $datetime1->diff($datetime2);
        // dd($interval->days);

        $data['stok'] = Stok::with('mobil')->find($id);
        return view('user/home.rent',$data, ['a' => $a, 'b' => $b, 'interval' => $interval]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function rent()
    {
        // $data['mobil'] = Mobil::where()->get();
        // dd($data);
        
    }

    public function show(Request $request)
    {
        $a = $request['tgl_pinjam'];
        $b = $request['tgl_pinjam'];
        // dd($a);
        $data['stok'] = Stok::with('mobil')->where('tanggal','=',$a)->where('status',0)->get();
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
}
