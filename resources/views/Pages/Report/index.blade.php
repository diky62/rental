@extends('layouts.admin_view')
@section('content')
<!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Rental</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div align="right">
                <a href="{{ route('rental.tambahdata') }}"><button type="button" class="btn btn-success btn-sm"><i class="fa fa-plus"></i>&nbsp; Tambah</button></a>
                  </div><br>
              <table id="example1" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Aksi</th>
                  <th>ID User</th>
                  <th>ID Mobil</th>
                  <th>Tanggal Rental</th>
                  <th>Tanggal Kembali</th>
                  <th>Harga Sewa</th>
                  <th>Status</th>
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
                  <td>User</td>
                  <td>1</td>
                  <td></td>
                  <td></td>
                  <td>2000000</td>
                  <td><form action="" method="post">
                      <button type="link" onClick="return confirm('Aktifkan Jadwal ?');" value="0" class="btn btn-danger btn-sm">False</i></button>
                      <button type="link" onClick="return confirm('Nonaktifkan Jadwal ?');" value="1" class="btn btn-primary btn-sm">True</i></button>
                  </form>
                  </td>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        @endsection
