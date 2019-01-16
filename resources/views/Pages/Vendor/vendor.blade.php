@extends('layouts.admin_view')
@section('content')
<!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Vendor</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div align="right">
                <a href="{{ route('vendor.tambahdata') }}"><button type="button" class="btn btn-success btn-sm"><i class="fa fa-plus"></i>&nbsp; Tambah</button></a>
                  </div><br>
              <table id="example1" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Aksi</th>
                  <th>ID User</th>
                  <th>Nama Rental</th>
                  <th>Alamat</th>
                  <th>No Rekening</th>
                  <th>Nama Pemilik</th>
                  <th>Nama Bank</th>
                  <th>No HP</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>1</td>
                  <td>
                        <center><a href=""><button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></button></a>
                        <form action="" method="post" style="display: inline-block">
                        <button class="btn btn-danger btn-sm" type="submit" onclick="return confirm('Yakin ingin menghapus data?')"><i class="fa fa-trash-o"></i></button></a></center>
                        </form>
                      </td>
                      <td>2</td>
                      <td>Yolanda Rental</td>
                      <td>Indramayu</td>
                      <td>12345678909876</td>
                      <td>Yolanda</td>
                      <td>BRI</td>
                      <td>089878787987</td>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        @endsection
