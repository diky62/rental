@extends('layouts.admin_view')
@section('content')
<div class="col-md-12">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Data Vendor</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <!-- <form class="form-horizontal"> -->
              <div class="box-body">
                <form action="{{route('vendor.update', $vendor->id)}}" method="POST" enctype="multipart/form-data" class="form-horizontal">
                        {{ csrf_field() }}
                <div class="row form-group">
                  <div class="col col-md-2"><label for="text-input" class="form-control-label">ID User</label></div>
                    <div class="col-12 col-md-10"><input type="text" id="name" name="name" class="form-control" value="{{ $vendor->Users->name }}" disabled></div>
                    </div>
                <div class="row form-group">
                  <div class="col col-md-2"><label for="text-input" class="form-control-label">Nama Rental</label></div>
                    <div class="col-12 col-md-10"><input type="text" id="nama_rental" name="nama_rental" class="form-control" value="{{ $vendor->nama_rental }}"></div>
                </div>
                <div class="row form-group">
                  <div class="col col-md-2"><label for="text-input" class="form-control-label">Alamat</label></div>
                    <div class="col-12 col-md-10"><input type="text" id="alamat" name="alamat" class="form-control" value="{{ $vendor->alamat }}"></div>
                </div>
                <div class="row form-group">
                  <div class="col col-md-2"><label for="text-input" class="form-control-label">No Rekening</label></div>
                    <div class="col-12 col-md-10"><input type="text" id="no_rekening" name="no_rekening" class="form-control" value="{{ $vendor->no_rekening }}"></div>
                </div>
                <div class="row form-group">
                  <div class="col col-md-2"><label for="text-input" class="form-control-label">Nama Pemilik</label></div>
                    <div class="col-12 col-md-10"><input type="text" id="nama_pemilik" name="nama_pemilik" class="form-control" value="{{ $vendor->nama_pemilik }}"></div>
                </div>
                <div class="row form-group">
                  <div class="col col-md-2"><label for="text-input" class="form-control-label">Nama Bank</label></div>
                    <div class="col-12 col-md-10"><input type="text" id="nama_bank" name="nama_bank" class="form-control" value="{{ $vendor->nama_bank }}"></div>
                </div>
                <div class="row form-group">
                  <div class="col col-md-2"><label for="text-input" class="form-control-label">No HP</label></div>
                    <div class="col-12 col-md-10"><input type="text" id="no_hp" name="no_hp" class="form-control" value="{{ $vendor->no_hp }}"></div>
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
                        <a href="{{route('vendor.index')}}">
                        <button type="button" class="btn btn-danger btn-sm">
                          <i class="fa fa-close"></i> Cancel
                        </button></a>
                        </form>
                      </div>
@endsection
