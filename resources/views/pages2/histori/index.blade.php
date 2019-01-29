@extends('layouts.users_view')
@section('content')
<!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Histori Pesanan</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              
              <table id="example1" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Nama</th>
                  <th>Aksi</th>
                  <th>Tanggal Sewa</th>
                  <th>Tanggal Kembali</th>
                  <th>Harga Sewa</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>1</td>
                  <td>
                        <center><a href=""><button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></button></a>
                        <form action="" method="post" style="display: inline-block">
                        </a></center>
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
