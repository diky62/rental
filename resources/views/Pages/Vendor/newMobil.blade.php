<!-- @extends('layouts.admin_view') -->
@section('content')
<div class="col-md-12">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Data Mobil</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">No Mobil</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="No Mobil">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">No Polisi</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputPassword3" placeholder="No Polisi">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Warna</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputPassword3" placeholder="Warna">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Harga</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputPassword3" placeholder="Harga">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Keterangan</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputPassword3" placeholder="Keterangan">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">ID User</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputPassword3" placeholder="ID User">
                  </div>
                </div>
                
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-default">Cancel</button>
                <button type="submit" class="btn btn-info pull-right">Sign in</button>
              </div>
@endsection
