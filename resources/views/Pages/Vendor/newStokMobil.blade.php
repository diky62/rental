@extends('layouts.vendor_view')
@section('content')
<div class="col-md-12">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Tambah Data Stok Mobil</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <!-- <form class="form-horizontal"> -->
              <div class="box-body">
                <form action="{{route('mobil.tambahmobil')}}" method="POST" enctype="multipart/form-data" class="form-horizontal">
                        {{ csrf_field() }}
                        <div class="row form-group">
                                    <div class="col col-md-2"><label for="select" class=" form-control-label">Nama Mobil</label></div>
                                    <div class="col-12 col-md-10">
                                      <select name="nama_mobil" id="nama_mobil" data-placeholder="Please select..." class="standardSelect" tabindex="1">
                                        <option value=""></option>
                                        @foreach($data as $datas)
                                        <option value="{{$datas->id}}">{{$datas->nama_mobil}}</option>
                                        @endforeach
                                      </select>
                                    </div>
                                  </div>

                <div class="row form-group">
                  <div class="col col-md-2"><label for="text-input" class="form-control-label">Tanggal</label></div>
                    <div class="col-12 col-md-10"><input type="date" id="tanggal" name="tanggal" placeholder="Tanggal" class="form-control"></div>
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
