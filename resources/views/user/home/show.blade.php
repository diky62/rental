@extends('layouts.user')
@section('content')
<section>
  
  <div class="container">
    <div class="row">
      @foreach($stok as $index => $stoks)
        <div class="col-xs-12">
          <div class="box">
            <!-- /.box-header -->
            <div class="box-body">
              <div class="form-group">
                <p align="center"> 
                  <h3>{{ $stoks->mobil->nama_mobil }}</h3>
                </p>
                <p align="center"> 
                  <img src="{{ asset('uploads/gambar/'.$stoks->mobil->gambar) }}" width="300">
                </p>
                <p align="center"> 
                  <label>Rp.{{ $stoks->mobil->harga }} /Hari</label>
                </p>
                <div class="col-xs-4">
                  <i class="fa fa-gear"></i> <label> {{ $stoks->mobil->transmisi }}</label>
                </div>
                <div class="col-xs-4">
                  <i class="fa fa-paint-brush"></i> <label> {{ $stoks->mobil->warna }}</label>
                </div>
              </div>
                <div class="col-xs-12">
                  <div class="form-group">
                    <a href="{{route('/homeuser.rent')}}" type="button" class="btn btn-info center-block btn-block"><i class="fa fa-pencil"></i> Pesan</a>
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
