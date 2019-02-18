@extends('layouts.vendor_view')
@section('content')
<!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Pelanggan</h3>
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
                  <th>No Hp</th>
                  <th>Email</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  @php $no = 1; @endphp
                      @foreach($data as $datas)
                        <td>{{$no++}}</td>
                        <td>
                              <form action="{{ route('user.mobile.delete', $datas->id) }}" method="post" style="display: inline-block">
                                {{ csrf_field() }}
                              <button class="btn btn-danger btn-sm" type="submit" onclick="return confirm('Yakin ingin menghapus data?')"><i class="fa fa-trash-o"></i></button></a></center>
                              </form>
                            </td>
                            <td>{{$datas->name}}</td>
                            <td>{{$datas->nik}}</td>
                            <td>{{$datas->alamat}}</td>
                            <td>{{$datas->no_hp}}</td>
                            <td>{{$datas->email}}</td>
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
