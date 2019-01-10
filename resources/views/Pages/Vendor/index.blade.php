<!-- @extends('layouts.admin_view') -->
@section('content')
<!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Mobil</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div align="right">
                <a href="{{ route('mobil.tambahdata') }}"><button type="button" class="btn btn-success btn-sm"><i class="fa fa-plus"></i>&nbsp; Tambah</button></a>
                  </div><br>
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Aksi</th>
                  <th>No Mobil</th>
                  <th>No Polisi</th>
                  <th>Warna</th>
                  <th>Harga</th>
                  <th>Keterangan</th>
                  <th>ID User</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>1</td>
                  <td>
                        <center><a href=""><button type="submit" class="btn btn-outline-primary btn-sm"><i class="fa fa-edit"></i></button></a>
                        <form action="" method="post" style="display: inline-block">
                        <button class="btn btn-outline-danger btn-sm" type="submit" onclick="return confirm('Yakin ingin menghapus data?')"><i class="fa fa-trash-o"></i></button></a></center>
                        </form>
                      </td>
                  <td>1234567</td>
                  <td>123456789098765</td>
                  <td>Ungu</td>
                  <td>200000</td>
                  <td>mobil ini blablabla</td>
                  <td>User</td>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        @endsection
