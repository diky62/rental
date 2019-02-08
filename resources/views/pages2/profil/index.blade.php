@extends('layouts.users_view')
@section('content')
<!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Profil</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">

              <table id="example1" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Id</th>
                  <th>Aksi</th>
                  <th>Nama</th>
                  <th>Nik</th>
                  <th>Provinsi</th>
                  <th>Kabupaten</th>
                  <th>Kecamatan</th>
                  <th>Alamat</th>
                  <th>Email</th>
                  <th>Password</th>
                </tr>
                </thead>
                <tbody>
                  @php $no = 1; @endphp
                      @foreach($user as $users)
                        <td>{{$no++}}</td>
                        <td>
                      {{ csrf_field() }}
                          <center><a href=""><button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></button></a>
                        </td>
                        <td>{{$users->name}}</td>
                        <td>{{$users->nik}}</td>
                        <td>{{$users->Provinsi->nama_provinsi}}</td>
                        <td>{{$users->Kabupaten->nama_kabupaten}}</td>
                        <td>{{$users->Kecamatan->nama_kecamatan}}</td>
                        <td>{{$users->alamat}}</td>
                        <td>{{$users->email}}</td>
                        <td>{{$users->Roles->level}}</td>
                    </form>
                    </td>
            </tr>
              @endforeach
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        @endsection
