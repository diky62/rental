<!-- @extends('layouts.admin_view') -->
@section('content')
                <div class="breadcrumbs">
                    <div class="col-sm-4">
                        <div class="page-header float-left">
                            <div class="page-title">
                                <h1>Form Role</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="card">
                      <div class="card-header">
                        <strong>Tambah Data</strong> Role
                      </div>
                      <div class="card-body card-block">
                        <form action="" method="POST" enctype="application/json" class="form-horizontal">

                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class="form-control-label">Role</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="name" name="name" placeholder="Role name" class="form-control"></div>
                          </div>

                                      </div>
                                    </div>
                      <div class="card-footer">
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
                    </div>
@endsection
