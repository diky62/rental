@extends('layouts.vendor_view')
@section('content')
<div class="col-md-12">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Tambah Data Mobil</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <!-- <form class="form-horizontal"> -->
              <div class="box-body">
                <form action="{{route('mobil.tambahmobil')}}" method="POST" enctype="multipart/form-data" class="form-horizontal">
                        {{ csrf_field() }}
                        <div class="row form-group">
                                    <div class="col col-md-2"><label for="select" class=" form-control-label">Nama Rental</label></div>
                                    <div class="col-12 col-md-10">
                                      <select name="nama_rental" id="nama_rental" data-placeholder="Please select..." class="standardSelect" tabindex="1">
                                        <option value=""></option>
                                        @foreach($vendor as $vendors)
                                        <option value="{{$vendors->id}}">{{$vendors->nama_rental}}</option>
                                        @endforeach
                                      </select>
                                    </div>
                                  </div>
                <div class="row form-group">
                  <div class="col col-md-2"><label for="text-input" class="form-control-label">Nama Mobil</label></div>
                    <div class="col-12 col-md-10"><input type="text" id="nama_mobil" name="nama_mobil" placeholder="Nama Mobil" class="form-control"></div>
                </div>
                <div class="row form-group">
                  <div class="col col-md-2"><label for="text-input" class="form-control-label">No Polisi</label></div>
                    <div class="col-12 col-md-10"><input type="text" id="no_polisi" name="no_polisi" placeholder="No Polisi" class="form-control"></div>
                </div>
                <div class="row form-group">
                  <div class="col col-md-2"><label for="text-input" class="form-control-label">Warna</label></div>
                    <div class="col-12 col-md-10"><input type="text" id="warna" name="warna" placeholder="Warna" class="form-control"></div>
                </div>
                <div class="row form-group">
                  <div class="col col-md-2"><label for="text-input" class="form-control-label">Transmisi</label></div>
                    <div class="col-12 col-md-10"><input type="text" id="transmisi" name="transmisi" placeholder="Transmisi" class="form-control"></div>
                </div>
                <div class="row form-group">
                  <div class="col col-md-2"><label for="text-input" class="form-control-label">Jumlah Penumpang</label></div>
                    <div class="col-12 col-md-10"><input type="text" id="jumlah_penumpang" name="jumlah_penumpang" placeholder="Jumlah Penumpang" class="form-control"></div>
                </div>
                <div class="row form-group">
                  <div class="col col-md-2"><label for="text-input" class="form-control-label">Harga</label></div>
                    <div class="col-12 col-md-10"><input type="text" id="harga" name="harga" placeholder="Harga" class="form-control"></div>
                </div>
                <div class="row form-group">
                  <div class="col col-md-2"><label for="text-input" class="form-control-label">Keterangan</label></div>
                    <div class="col-12 col-md-10"><input type="text" id="keterangan" name="keterangan" placeholder="Keterangan" class="form-control"></div>
                </div>
              </div>
              <div class="row form-group">
                <div class="col col-md-2"><label for="text-input" class="form-control-label">Gambar</label></div>
                <div class="col-12 col-md-10"><input type="file" class="form-control" id="gambar" name="gambar">
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
