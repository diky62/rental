@extends('layouts.vendor_view')
@section('content')
<!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Rental</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <!-- <div align="right">
                <a href="{{ route('rental.tambahdata') }}"><button type="button" class="btn btn-success btn-sm"><i class="fa fa-plus"></i>&nbsp; Tambah</button></a>
                  </div><br> -->
              <table id="example1" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Aksi</th>
                  <th>ID User</th>
                  <th>ID Mobil</th>
                  <th>Tanggal Rental</th>
                  <th>Tanggal Kembali</th>
                  <th>Harga Sewa</th>
                  <th>Status</th>
                </tr>
                </thead>
                <tbody>
                  <tr>
                    @php $no = 1; @endphp
                        @foreach($rental as $rentals)
                          <td>{{$no++}}</td>
                          <td>
                                <form action="{{ route('rental.delete', $rentals->id) }}" method="post" style="display: inline-block">
                                  {{ csrf_field() }}
                                <button class="btn btn-danger btn-sm" type="submit" onclick="return confirm('Yakin ingin menghapus data?')"><i class="fa fa-trash-o"></i></button></a></center>
                                </form>
                                <span data-toggle="modal" data-target="#modalPrint" onclick="print({{$rentals->id}})">
                                  <a class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="top" title="Cetak Pesanan">
                                  <i class="fa fa-print"></i>
                                  </a>
                                </span>
                              </td>
                          <td>{{-- {{$rentals->User->name}} --}}</td>
                          <td>{{$rentals->Mobil->nama_mobil}}</td>
                          <td>{{$rentals->tanggal_rental}}</td>
                          <td>{{$rentals->tanggal_kembali}}</td>
                          <td>{{$rentals->harga_sewa}}</td>
                          <td><form action="{{route('rental.status', $rentals->id)}}" method="post">
                              {{csrf_field()}}
                            @if ($rentals->status == 0)
                              <button type="link" onClick="return confirm('order belum dibayar?');" value="0" class="btn btn-primary btn-sm">Paid</i></button>
                            @else
                              <button type="link" onClick="return confirm('order sudah dibayar?');" value="1" class="btn btn-success btn-sm">Unpaid</i></button>
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
