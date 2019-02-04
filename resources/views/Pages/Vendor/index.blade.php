@extends('layouts.admin_view')
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
              <table id="example1" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Aksi</th>
                  <th>ID Vendor</th>
                  <th>Nama Mobil</th>
                  <th>No Polisi</th>
                  <th>Warna</th>
                  <th>Transmisi</th>
                  <th>Jumlah Penumpang</th>
                  <th>Harga</th>
                  <th>Keterangan</th>
                  <th>Gambar</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  @php $no = 1; @endphp
                      @foreach($data as $datas)
                        <td>{{$no++}}</td>
                        <td>
                              <center><a href="{{route('mobil.edit', [$datas]) }}"><button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></button></a>
                              <form action="{{ route('mobil.delete', $datas->id) }}" method="post" style="display: inline-block">
                                {{ csrf_field() }}
                              <button class="btn btn-danger btn-sm" type="submit" onclick="return confirm('Yakin ingin menghapus data?')"><i class="fa fa-trash-o"></i></button></a></center>
                              </form>
                            </td>
                        <td>{{$datas->Vendor->nama_rental}}</td>
                        <td>{{$datas->nama_mobil}}</td>
                        <td>{{$datas->no_polisi}}</td>
                        <td>{{$datas->warna}}</td>
                        <td>{{$datas->transmisi}}</td>
                        <td>{{$datas->jumlah_penumpang}}</td>
                        <td>{{$datas->harga}}</td>
                        <td>{{$datas->keterangan}}</td>
                        <td><img src="{{ url('uploads/gambar/'.$datas->gambar) }}" style="width: 75px; height: 75px;"></td>
                </tr>
                  @endforeach
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        @endsection
