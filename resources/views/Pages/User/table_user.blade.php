@extends('layouts.admin_view')
@section('content')
<!-- Content Wrapper. Contains page content -->
  <!-- <div class="content-wrapper">

    <section class="content-header">
      <h1>
        Data Tables
        <small>advanced tables</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Data tables</li>
      </ol>
    </section> -->

    <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Data User</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <div align="right">
                    <a href="{{route('user.newUser')}}"><button type="button" class="btn btn-success btn-sm"><i class="fa fa-plus"></i>&nbsp; Tambah</button></a>
                      </div><br>
                  <table id="example1" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                      <th>No</th>
                      <th>Aksi</th>
                      <th>Nama</th>
                      <th>NIK</th>
                      <th>Provinsi</th>
                      <th>Kabupaten</th>
                      <th>Kecamatan</th>
                      <th>Alamat</th>
                      <th>Email</th>
                      <th>Role</th>
                      <th>No Hp</th>
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
                      <td>Lufianti</td>
                      <td>1234567890987654</td>
                      <td>Jawa Barat</td>
                      <td>Cirebon</td>
                      <td>Tengah Tani</td>
                      <td>Desa Kalitengah</th>
                      <td>Lufianti08@gmail.com</td>
                      <td>User</td>
                      <td>089654283916</td>
                    </tr>

                    </tfoot>
                  </table>
                </div>
                <!-- /.box-body -->
              </div>
              <!-- /.box -->
@endsection
