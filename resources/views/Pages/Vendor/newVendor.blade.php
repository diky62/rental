@extends('layouts.vendor_view')
@section('content')
<div class="col-md-12">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Tambah Data Vendor</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <!-- <form class="form-horizontal"> -->
              <div class="box-body">
                <form action="{{route('vendor.tambahVendor')}}" method="POST" enctype="multipart/form-data" class="form-horizontal">
                        {{ csrf_field() }}
                        <div class="row form-group">
                                    <div class="col col-md-2"><label for="select" class=" form-control-label">Nama</label></div>
                                    <div class="col-12 col-md-10">
                                      <select name="name" id="name" data-placeholder="Please select..." class="standardSelect" tabindex="1">
                                        <option value=""></option>
                                        @foreach($names as $name)
                                        <option value="{{$name->id}}">{{$name->name}}</option>
                                        @endforeach
                                      </select>
                                    </div>
                                  </div>
                <div class="row form-group">
                  <div class="col col-md-2"><label for="text-input" class="form-control-label">Nama Rental</label></div>
                    <div class="col-12 col-md-10"><input type="text" id="nama_rental" name="nama_rental" placeholder="Nama Rental" class="form-control"></div>
                </div>
                <div class="row form-group">
                  <div class="col col-md-2"><label for="text-input" class="form-control-label">Alamat</label></div>
                    <div class="col-12 col-md-10"><input type="text" id="alamat" name="alamat" placeholder="Alamat" class="form-control"></div>
                </div>
                <div class="row form-group">
                  <div class="col col-md-2"><label for="text-input" class="form-control-label">No Rekening</label></div>
                    <div class="col-12 col-md-10"><input type="text" id="no_rekening" name="no_rekening" placeholder="No Rekening" class="form-control"></div>
                </div>
                <div class="row form-group">
                  <div class="col col-md-2"><label for="text-input" class="form-control-label">Nama Pemilik</label></div>
                    <div class="col-12 col-md-10"><input type="text" id="nama_pemilik" name="nama_pemilik" placeholder="Nama Pemilik" class="form-control"></div>
                </div>
                <div class="row form-group">
                            <div class="col col-md-2"><label for="select" class=" form-control-label">Nama Bank</label></div>
                            <div class="col-12 col-md-10">
                              <select name="nama_bank" id="nama_bank" data-placeholder="Please select..." class="standardSelect" tabindex="1">
                                <option value=""></option>
                                <option value="Bank Anda">Bank Anda</option>
                                <option value="Bank BCA">Bank BCA</option>
                                <option value="Bank BCA Syariah">Bank BCA Syariah</option>
                                <option value="Bank BJB">Bank BJB</option>
                                <option value="Bank BJB Syariah">Bank BJB Syariah</option>
                                <option value="Bank BNI">Bank BNI</option>
                                <option value="Bank BNI Syariah">Bank BNI Syariah</option>
                                <option value="Bank BRI">Bank BRI</option>
                                <option value="Bank BRI Syariah">Bank BRI Syariah</option>
                                <option value="Bank BTN">Bank BTN</option>
                                <option value="Bank BTN Syariah">Bank BTN Syariah</option>
                                <option value="Bank Bukopin">Bank Bukopin</option>
                                <option value="Bank Syariah Bukopin">Bank Bukopin Syariah</option>
                                <option value="Bank Danamon Keluarga">Bank Danamon Keluarga</option>
                                <option value="Bank Indonesia">Bank Indonesia</option>
                                <option value="Bank Mandiri">Bank Mandiri</option>
                                <option value="Bank Syariah Mandiri">Bank Syariah Mandiri</option>
                                <option value="Bank Mayora">Bank Mayora</option>
                                <option value="Bank Mega">Bank Mega</option>
                                <option value="Bank Mega Syariah">Bank Mega Syariah</option>
                                <option value="Bank Mybank Indonesia">Bank Mybank Indonesia</option>
                                <option value="Bank Mybank Syariah Indonesia">Bank Mybank Syariah Indonesia</option>
                                <option value="Bank Sinarmas">Bank Sinarmas</option>
                                <option value="Panin Bank">Panin Bank Syariah</option>
                                <option value="Bank Royal Indonesia">Bank Royal Indonesia</option>
                                <option value="CIMB Niaga">CIMB Niaga</option>
                                <option value="CIMB Niaga Syariah">CIMB Niaga Syariah</option>xam
                              </select>
                            </div>
                          </div>
                <div class="row form-group">
                  <div class="col col-md-2"><label for="text-input" class="form-control-label">No HP</label></div>
                    <div class="col-12 col-md-10"><input type="text" id="no_hp" name="no_hp" placeholder="No HP" class="form-control"></div>
                </div>

              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                        <a href="{{route('vendor.tambahVendor')}}">
                        <button type="submit" class="btn btn-primary btn-sm">
                          <i class="fa fa-dot-circle-o"></i> Submit
                        </button></a>
                        <button type="reset" class="btn btn-success btn-sm">
                          <i class="fa fa-ban"></i> Reset
                        </button>
                        <a href="{{route('vendor.index1')}}">
                        <button type="button" class="btn btn-danger btn-sm">
                          <i class="fa fa-close"></i> Cancel
                        </button></a>
                        </form>
                      </div>
@endsection
