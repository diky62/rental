@extends('layouts.user')
@section('content')
<section>
  
  <div class="container">
    <div class="row">
      @foreach($rental as $index => $rentals)
        <div class="col-xs-12">
          <div class="box">
            <!-- /.box-header -->
            <div class="box-body">
              <div class="form-group">
                <p align="center"> 
                  <h3>{{ $rentals->mobil->nama_mobil }}</h3>
                </p>
                <p align="center"> 
                  <img src="{{ asset('uploads/gambar/'.$rentals->mobil->gambar) }}" width="300">
                </p>
                <p align="center"> 
                  <label>Rp.{{ $rentals->harga_sewa}}</label><br>
                </p>
                <div class="col-xs-6">
                  <i class="fa fa-calendar"></i> <label> {{ $rentals->tanggal_rental }}</label>
                </div>
                <div class="col-xs-6">
                  <i class="fa fa-calendar"></i> <label> {{ $rentals->tanggal_kembali }}</label>
                </div>
                {{-- <div class="col-xs-4">
                  <i class="fa fa-dollar"></i> <label> {{ $rentals->harga_sewa }}</label>
                </div> --}}
                <div class="col-xs-4">
                  <i class="fa fa-gear"></i> <label> {{ $rentals->mobil->transmisi }}</label>
                </div>
                <div class="col-xs-4">
                  <i class="fa fa-paint-brush"></i> <label> {{ $rentals->mobil->warna }}</label>
                </div>
                <div class="col-xs-4">
                  <i class="fa fa-info"></i> <label> {{ $rentals->status }}</label>
                </div>
                <div class="col-xs-4">
                  <i class="fa fa-info"></i> <label> {{ $rentals->mobil->vendor->nama_rental }}</label>
                </div>
                <div class="col-xs-4">
                  <i class="fa fa-dollar"></i> <label> {{ $rentals->mobil->vendor->no_rekening }}</label>
                </div>
                <div class="col-xs-4">
                  <i class="fa fa-info"></i> <label> {{ $rentals->mobil->vendor->nama_bank }}</label>
                </div>
              </div>
                
                

                
                
            </div>
              
          </div>
      </div>
      @endforeach
      </div>
    </div>
  </div>

</section>
 
@endsection
