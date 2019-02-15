@extends('layouts.vendor_view')
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
                  <th>Nama Rental</th>
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
                      @foreach($mobil as $mobils)
                        <td>{{$no++}}</td>
                        <td>
                              <center><a href="{{route('mobil.edit', [$mobils->id]) }}"><button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></button></a>
                              <form action="{{ route('mobil.delete', $mobils->id) }}" method="post" style="display: inline-block">
                                {{ csrf_field() }}
                              <button class="btn btn-danger btn-sm" type="submit" onclick="return confirm('Yakin ingin menghapus data?')"><i class="fa fa-trash-o"></i></button></a></center>
                              </form>
                            </td>
                        <td>{{$mobils->Vendor->nama_rental}}</td>
                        <td>{{$mobils->nama_mobil}}</td>
                        <td>{{$mobils->no_polisi}}</td>
                        <td>{{$mobils->warna}}</td>
                        <td>{{$mobils->transmisi}}</td>
                        <td>{{$mobils->jumlah_penumpang}}</td>
                        <td>{{$mobils->harga}}</td>
                        <td>{{$mobils->keterangan}}</td>
                        <td><img src="{{ url('uploads/gambar/'.$mobils->gambar) }}" style="width: 75px; height: 75px;"></td>
                </tr>
                  @endforeach
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        @endsection
