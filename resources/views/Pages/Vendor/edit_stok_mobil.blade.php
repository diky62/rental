@extends('layouts.vendor_view')
@section('content')
<div class="col-md-12">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Data Stok Mobil</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <!-- <form class="form-horizontal"> -->
              <div class="box-body">
                <form action="{{route('stok_mobil.update', $data->id)}}" method="POST" enctype="multipart/form-data" class="form-horizontal">
                        {{ csrf_field() }}
                <div class="row form-group">
                  <div class="col col-md-2"><label for="text-input" class="form-control-label">Nama Mobil</label></div>
                    <div class="col-12 col-md-10"><input type="text" id="nama_mobil" name="nama_mobil" class="form-control" value="" disabled></div>
                  </div>
                <div class="row form-group">
                  <div class="col col-md-2"><label for="text-input" class="form-control-label">Tanggal</label></div>
                    <div class="col-12 col-md-10"><input type="date" id="tanggal" name="tanggal" class="form-control" value=""></div>
                </div>

              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                        <a href="{{route('stok_mobil.tambahmobil')}}">
                        <button type="submit" class="btn btn-primary btn-sm">
                          <i class="fa fa-dot-circle-o"></i> Submit
                        </button>
                        <button type="reset" class="btn btn-success btn-sm">
                          <i class="fa fa-ban"></i> Reset
                        </button>
                        <a href="{{route('stok.mobil')}}">
                        <button type="button" class="btn btn-danger btn-sm">
                          <i class="fa fa-close"></i> Cancel
                        </button></a>
                        </form>
                      </div>
@endsection
