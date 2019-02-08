@extends('layouts.admin_view')
@section('content')
<div class="col-md-12">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Data Mobil</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <!-- <form class="form-horizontal"> -->
              <div class="box-body">
                <form action="{{route('mobil.update', $data->id)}}" method="POST" enctype="multipart/form-data" class="form-horizontal">
                        {{ csrf_field() }}
                <div class="row form-group">
                  <div class="col col-md-2"><label for="text-input" class="form-control-label">Nama Rental</label></div>
                    <div class="col-12 col-md-10"><input type="text" id="nama_rental" name="nama_rental" class="form-control" value="{{ $data->Vendor->nama_rental }}" disabled></div>
                  </div>
                <div class="row form-group">
                  <div class="col col-md-2"><label for="text-input" class="form-control-label">Nama Mobil</label></div>
                    <div class="col-12 col-md-10"><input type="text" id="nama_mobil" name="nama_mobil" class="form-control" value="{{ $data->nama_mobil }}"></div>
                </div>
                <div class="row form-group">
                  <div class="col col-md-2"><label for="text-input" class="form-control-label">No Polisi</label></div>
                    <div class="col-12 col-md-10"><input type="text" id="no_polisi" name="no_polisi" class="form-control" value="{{ $data->no_polisi }}"></div>
                </div>
                <div class="row form-group">
                  <div class="col col-md-2"><label for="text-input" class="form-control-label">Warna</label></div>
                    <div class="col-12 col-md-10"><input type="text" id="warna" name="warna" class="form-control" value="{{ $data->warna }}"></div>
                </div>
                <div class="row form-group">
                  <div class="col col-md-2"><label for="text-input" class="form-control-label">Transmisi</label></div>
                    <div class="col-12 col-md-10"><input type="text" id="transmisi" name="transmisi" class="form-control" value="{{ $data->transmisi }}"></div>
                </div>
                <div class="row form-group">
                  <div class="col col-md-2"><label for="text-input" class="form-control-label">Jumlah Penumpang</label></div>
                    <div class="col-12 col-md-10"><input type="text" id="jumlah_penumpang" name="jumlah_penumpang" class="form-control" value="{{ $data->jumlah_penumpang }}"></div>
                </div>
                <div class="row form-group">
                  <div class="col col-md-2"><label for="text-input" class="form-control-label">Harga</label></div>
                    <div class="col-12 col-md-10"><input type="text" id="harga" name="harga" class="form-control" value="{{ $data->harga }}"></div>
                </div>
                <div class="row form-group">
                  <div class="col col-md-2"><label for="text-input" class="form-control-label">Keterangan</label></div>
                    <div class="col-12 col-md-10"><input type="text" id="keterangan" name="keterangan" class="form-control" value="{{ $data->keterangan }}"></div>
                </div>
                <div class="row form-group">
                  <div class="col col-md-2"><label for="text-input" class="form-control-label">Gambar Lama</label></div>
                    <div class="col-12 col-md-10"><img src="{{ url('uploads/gambar/'.$data->gambar) }}" style="width: 75px; height: 75px;">
                    </div>
                  </div>
                  <div class="col col-md-2"><label for="text-input" class="form-control-label">Gambar Baru</label></div>
                  <div class="row form-group">
                    <div class="col-12 col-md-10"><input type="file" class="form-control" id="gambar" name="gambar" value="{{ $data->gambar }}">
                    </div>
                  </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                        <a href="{{route('mobil.tambahmobil')}}">
                        <button type="submit" class="btn btn-primary btn-sm">
                          <i class="fa fa-dot-circle-o"></i> Submit
                        </button>
                        <button type="reset" class="btn btn-success btn-sm">
                          <i class="fa fa-ban"></i> Reset
                        </button>
                        <a href="{{route('mobil.index')}}">
                        <button type="button" class="btn btn-danger btn-sm">
                          <i class="fa fa-close"></i> Cancel
                        </button></a>
                        </form>
                      </div>
@endsection
