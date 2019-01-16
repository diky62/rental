@extends('layouts.admin_view')
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
                <div class="row form-group">
                  <div class="col col-md-2"><label for="text-input" class="form-control-label">No Mobil</label></div>
                    <div class="col-12 col-md-10"><input type="text" id="name" name="name" placeholder="No Mobil" class="form-control"></div>
                </div>
                <div class="row form-group">
                  <div class="col col-md-2"><label for="text-input" class="form-control-label">No Polisi</label></div>
                    <div class="col-12 col-md-10"><input type="text" id="name" name="name" placeholder="No Polisi" class="form-control"></div>
                </div>
                <div class="row form-group">
                  <div class="col col-md-2"><label for="text-input" class="form-control-label">Warna</label></div>
                    <div class="col-12 col-md-10"><input type="text" id="name" name="name" placeholder="Warna" class="form-control"></div>
                </div>
                <div class="row form-group">
                  <div class="col col-md-2"><label for="text-input" class="form-control-label">Harga</label></div>
                    <div class="col-12 col-md-10"><input type="text" id="name" name="name" placeholder="Harga" class="form-control"></div>
                </div>
                <div class="row form-group">
                  <div class="col col-md-2"><label for="text-input" class="form-control-label">Keterangan</label></div>
                    <div class="col-12 col-md-10"><input type="text" id="name" name="name" placeholder="Keterangan" class="form-control"></div>
                </div>
                <div class="row form-group">
                  <div class="col col-md-2"><label for="text-input" class="form-control-label">ID User</label></div>
                    <div class="col-12 col-md-10"><input type="text" id="name" name="name" placeholder="ID User" class="form-control"></div>
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
