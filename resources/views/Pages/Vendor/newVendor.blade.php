@extends('layouts.admin_view')
@section('content')
<div class="col-md-12">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Data Vendor</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <!-- <form class="form-horizontal"> -->
              <div class="box-body">
                <form action="{{route('vendor.tambahVendor')}}" method="POST" enctype="multipart/form-data" class="form-horizontal">
                        {{ csrf_field() }}
                        <div class="row form-group">
                                    <div class="col col-md-2"><label for="select" class=" form-control-label">Nama</label></div>
                                    <div class="col-12 col-md-10">
                                      <select name="name" id="name" data-placeholder="Please select..." class="standardSelect" tabindex="1">
                                        <option value=""></option>
                                        @foreach($names as $name)
                                        <option value="{{$name->id}}">{{$name->name}}</option>
                                        @endforeach
                                      </select>
                                    </div>
                                  </div>
                <div class="row form-group">
                  <div class="col col-md-2"><label for="text-input" class="form-control-label">Nama Rental</label></div>
                    <div class="col-12 col-md-10"><input type="text" id="nama_rental" name="nama_rental" placeholder="Nama Rental" class="form-control"></div>
                </div>
                <div class="row form-group">
                  <div class="col col-md-2"><label for="text-input" class="form-control-label">Alamat</label></div>
                    <div class="col-12 col-md-10"><input type="text" id="alamat" name="alamat" placeholder="Alamat" class="form-control"></div>
                </div>
                <div class="row form-group">
                  <div class="col col-md-2"><label for="text-input" class="form-control-label">No Rekening</label></div>
                    <div class="col-12 col-md-10"><input type="text" id="no_rekening" name="no_rekening" placeholder="No Rekening" class="form-control"></div>
                </div>
                <div class="row form-group">
                  <div class="col col-md-2"><label for="text-input" class="form-control-label">Nama Pemilik</label></div>
                    <div class="col-12 col-md-10"><input type="text" id="nama_pemilik" name="nama_pemilik" placeholder="Nama Pemilik" class="form-control"></div>
                </div>
                <div class="row form-group">
                  <div class="col col-md-2"><label for="text-input" class="form-control-label">Nama Bank</label></div>
                    <div class="col-12 col-md-10"><input type="text" id="nama_bank" name="nama_bank" placeholder="Nama Bank" class="form-control"></div>
                </div>
                <div class="row form-group">
                  <div class="col col-md-2"><label for="text-input" class="form-control-label">No HP</label></div>
                    <div class="col-12 col-md-10"><input type="text" id="no_hp" name="no_hp" placeholder="No HP" class="form-control"></div>
                </div>

              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                        <a href="{{route('vendor.tambahVendor')}}">
                        <button type="submit" class="btn btn-primary btn-sm">
                          <i class="fa fa-dot-circle-o"></i> Submit
                        </button></a>
                        <button type="reset" class="btn btn-success btn-sm">
                          <i class="fa fa-ban"></i> Reset
                        </button>
                        <a href="">
                        <button type="button" class="btn btn-danger btn-sm">
                          <i class="fa fa-close"></i> Cancel
                        </button></a>
                        </form>
                      </div>
@endsection
