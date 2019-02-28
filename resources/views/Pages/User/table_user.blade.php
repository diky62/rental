@extends('layouts.admin_view')
@section('content')
<!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Administrator</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Aksi</th>
                  <th>Nama</th>
                  <th>NIK</th>
                  <th>Alamat</th>
                  <th>Email</th>
                  <th>Level</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  @php $no = 1; @endphp
                      @foreach($user as $users)
                        <td>{{$no++}}</td>
                        <td>
                              <form action="{{ route('user.delete', $users->id) }}" method="post" style="display: inline-block">
                                {{ csrf_field() }}
                              <button class="btn btn-danger btn-sm" type="submit" onclick="return confirm('Yakin ingin menghapus data?')"><i class="fa fa-trash-o"></i></button></a></center>
                              </form>
                            </td>
                            <td>{{$users->name}}</td>
                            <td>{{$users->nik}}</td>
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
