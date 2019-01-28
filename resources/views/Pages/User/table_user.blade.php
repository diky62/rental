@extends('layouts.admin_view')
@section('content')

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
                      <div class="table-responsive">
                  <table id="example1" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                      <th>No</th>
                      <th>Aksi</th>
                      <th>Nama</th>
                      <th>NIK</th>
                      <th>Alamat</th>
                      <th>Email</th>
                      <th>No HP</th>
                    </tr>
                    </thead>
                    <tbody>
                      @php $no = 1; @endphp
                          @foreach($user as $users)
                            <td>{{$no++}}</td>
                            <td>
                                  <center><a href=""><button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></button></a>
                                  <form action="{{ route('user.delete', $users->id) }}" method="post" style="display: inline-block">
                                    {{ csrf_field() }}
                                  <button class="btn btn-danger btn-sm" type="submit" onclick="return confirm('Yakin ingin menghapus data?')"><i class="fa fa-trash-o"></i></button></a></center>
                                  </form>
                                </td>
                            <td>{{$users->name}}</td>
                            <td>{{$users->nik}}</td>
                            <td>{{$users->provinsi_id}}</td>
                            <td>{{$users->kabupaten_id}}</td>
                            <td>{{$users->kecamatan_id}}</td>
                            <td>{{$users->alamat}}</td>
                            <td>{{$users->email}}</td>
                            <td>{{$users->name}}</td>
                    </tr>
                      @endforeach
                    </tfoot>
                  </table>
                </div>
              </div>
                <!-- /.box-body -->
              </div>
              <!-- /.box -->
@endsection
