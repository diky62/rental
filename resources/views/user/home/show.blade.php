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
              <form method='post' action="{{ route('/homeuser.create',$stoks->id) }}">
              @csrf
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
                  <div class="col-xs-4">
                    <i class="fa fa-info"></i> <label> {{ $stoks->mobil->keterangan }}</label>
                  </div>
                  <div class="col-xs-6">
                    <input type="hidden" id="tgl_pinjam" name="tgl_pinjam"" class="form-control" style="border: none;" value="{{ $a }}">
                  </div>
                  <div class="col-xs-6">
                    <input type="hidden" id="tgl_kembali" name="tgl_kembali"" class="form-control" style="border: none;" value="{{ $b }}">
                  </div>
                </div>
                  <div class="col-xs-12">
                    <div class="form-group">
                      <button type="submit" class="btn btn-info center-block btn-block"><i class="fa fa-zoom"></i> Pesan</button> 
                    </div>
                  
                  </div>
  
            </div>
              
          </div>
        </div>
      @endforeach

    </div>
  </div>

</section>
 
@endsection
