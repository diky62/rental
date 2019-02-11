@extends('layouts.vendor_view')
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
                  <th>Nama</th>
                  <th>Nama Rental</th>
                  <th>Alamat</th>
                  <th>No Rekening</th>
                  <th>Nama Pemilik</th>
                  <th>Nama Bank</th>
                  <th>No HP</th>
                  <th>Status</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  @php $no = 1; @endphp
                      @foreach($vendor as $vendors)
                        <td>{{$no++}}</td>
                        <td>
                              <center><a href="{{route('vendor.edit', [$vendors]) }}"><button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></button></a>
                              <!-- <form action="{{ route('vendor.delete', $vendors->id) }}" method="post" style="display: inline-block"> -->
                                {{ csrf_field() }}
                              <button class="btn btn-danger btn-sm" type="submit" onclick="return confirm('Yakin ingin menghapus data?')"><i class="fa fa-trash-o"></i></button></a></center>
                              </form>
                            </td>
                        <td>{{$vendors->Users->name}}</td>
                        <td>{{$vendors->nama_rental}}</td>
                        <td>{{$vendors->alamat}}</td>
                        <td>{{$vendors->no_rekening}}</td>
                        <td>{{$vendors->nama_pemilik}}</td>
                        <td>{{$vendors->nama_bank}}</td>
                        <td>{{$vendors->no_hp}}</td>
                        <td><form action="{{route('vendor.status', $vendors->id)}}" method="post">
                            {{csrf_field()}}
                          @if ($vendors->status == 0)
                            <button type="link" onClick="return confirm('apakah vendor akan dinonaktifkan?');" value="0" class="btn btn-primary btn-sm">True</i></button>
                          @else
                            <button type="link" onClick="return confirm('apakah vendor akan diaktifkan?');" value="1" class="btn btn-success btn-sm">False</i></button>
                          @endif
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
