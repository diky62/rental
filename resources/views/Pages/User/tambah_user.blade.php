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
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Nama</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="Nama">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Nik</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputPassword3" placeholder="Nik">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">ID Provinsi</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputPassword3" placeholder="ID Provinsi">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">ID Kabupaten</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputPassword3" placeholder="ID Kabupaten">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">ID Kecamatan</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputPassword3" placeholder="ID Kecamatan">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Alamat</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputPassword3" placeholder="Alamat">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Email</label>
                  <div class="col-sm-10">
                    <input type="email" class="form-control" id="inputPassword3" placeholder="Email">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
                  <div class="col-sm-10">
                    <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">ID Role</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputPassword3" placeholder="ID Role">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">No. HP</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputPassword3" placeholder="No HP">
                  </div>
                </div>

              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-default">Cancel</button>
                <button type="submit" class="btn btn-info pull-right">Sign in</button>
              </div>
@endsection
