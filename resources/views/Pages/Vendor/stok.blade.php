@extends('layouts.vendor_view')
@section('content')
<!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Stok Mobil</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div align="right">
                <a href="{{ route('stok_mobil.tambahdata')}}"><button type="button" class="btn btn-success btn-sm"><i class="fa fa-plus"></i>&nbsp; Tambah</button></a>
                  </div><br>
              <table id="example1" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Aksi</th>
                  <th>Nama Mobil</th>
                  <th>Tanggal</th>
                  <th>Status</th>
                </tr>
                </thead>
                <tbody>
                  @php $no = 1; @endphp
                      @foreach($stok as $stoks)
                        <td>{{$no++}}</td>
                        <td>
                          <center><a href="{{route('stok_mobil.edit', [$stoks->id]) }}"><button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></button></a>
                              <form action="{{ route('stok_mobil.delete', $stoks->id) }}" method="post" style="display: inline-block">
                                {{ csrf_field() }}
                              <button class="btn btn-danger btn-sm" type="submit" onclick="return confirm('Yakin ingin menghapus data?')"><i class="fa fa-trash-o"></i></button></a></center>
                              </form>
                            </td>
                        <td>{{$stoks->Mobil->nama_mobil}}</td>
                        <td>{{$stoks->tanggal}}</td>
                        <td><form action="{{route('stok_mobil.status', $stoks->id)}}" method="post">
                            {{csrf_field()}}
                          @if ($stoks->status == 0)
                            <button type="link" onClick="return confirm('mobil belum diaktifkan?');" value="0" class="btn btn-primary btn-sm">True</i></button>
                          @else
                            <button type="link" onClick="return confirm('mobil sudah diaktifkan?');" value="1" class="btn btn-success btn-sm">False</i></button>
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
