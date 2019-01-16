@extends('layouts.admin_view')
@section('content')
<div class="col-md-12">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Data User</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal">
              <div class="box-body">
                <div class="row form-group">
                  <div class="col col-md-2"><label for="text-input" class="form-control-label">Nama</label></div>
                    <div class="col-12 col-md-10"><input type="text" id="name" name="name" placeholder="Nama" class="form-control"></div>
                </div>
                <div class="row form-group">
                  <div class="col col-md-2"><label for="text-input" class="form-control-label">NIK</label></div>
                    <div class="col-12 col-md-10"><input type="text" id="name" name="name" placeholder="NIK" class="form-control"></div>
                </div>
                <div class="row form-group">
                  <div class="col col-md-2"><label for="text-input" class="form-control-label">ID Provinsi</label></div>
                    <div class="col-12 col-md-10"><input type="text" id="name" name="name" placeholder="ID Provinsi" class="form-control"></div>
                </div>
                <div class="row form-group">
                  <div class="col col-md-2"><label for="text-input" class="form-control-label">ID Kabupaten</label></div>
                    <div class="col-12 col-md-10"><input type="text" id="name" name="name" placeholder="ID Kabupaten" class="form-control"></div>
                </div>
                <div class="row form-group">
                  <div class="col col-md-2"><label for="text-input" class="form-control-label">ID Kecamatan</label></div>
                    <div class="col-12 col-md-10"><input type="text" id="name" name="name" placeholder="ID Kecamatan" class="form-control"></div>
                </div>
                <div class="row form-group">
                  <div class="col col-md-2"><label for="text-input" class="form-control-label">Alamat</label></div>
                    <div class="col-12 col-md-10"><input type="text" id="name" name="name" placeholder="Alamat" class="form-control"></div>
                </div>
                <div class="row form-group">
                  <div class="col col-md-2"><label for="text-input" class="form-control-label">Email</label></div>
                    <div class="col-12 col-md-10"><input type="text" id="name" name="name" placeholder="Email" class="form-control"></div>
                </div>
                <div class="row form-group">
                  <div class="col col-md-2"><label for="text-input" class="form-control-label">Password</label></div>
                    <div class="col-12 col-md-10"><input type="text" id="name" name="name" placeholder="Password" class="form-control"></div>
                </div>
                <div class="row form-group">
                  <div class="col col-md-2"><label for="text-input" class="form-control-label">ID Role</label></div>
                    <div class="col-12 col-md-10"><input type="text" id="name" name="name" placeholder="ID Role" class="form-control"></div>
                </div>
                <div class="row form-group">
                  <div class="col col-md-2"><label for="text-input" class="form-control-label">No HP</label></div>
                    <div class="col-12 col-md-10"><input type="text" id="name" name="name" placeholder="No HP" class="form-control"></div>
                </div>

              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                        <button type="submit" class="btn btn-primary btn-sm">
                          <i class="fa fa-dot-circle-o"></i> Submit
                        </button>
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
