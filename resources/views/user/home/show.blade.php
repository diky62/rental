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
                     <input type="hidden" class="form-control col-12 col-md-9" value="{{$stoks->mobil->id}}" readonly="true" name="mobil_id" value="" placeholder="type something" required>
                     <input type="hidden" class="form-control col-12 col-md-9" value="{{$stoks->mobil->nama_mobil}}" readonly="true" name="nama_mobil" value="" placeholder="type something" required>  
                  </p>
                  <p align="center"> 
                    <img src="{{ asset('uploads/gambar/'.$stoks->mobil->gambar) }}" width="300">
                  </p>
                  <p align="center"> 
                    <label>Rp.</label> <label class="uang">{{ $stoks->mobil->harga }} /Hari</label>
                    <input type="hidden" id="harga" name="harga" class="form-control" style="border: none;" value="{{ $stoks->mobil->harga }}">
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
