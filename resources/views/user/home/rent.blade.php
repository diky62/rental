@extends('layouts.user')
@section('content')
<section>
  
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Rental</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <form method="POST" action="{{ route('/homeuser.store') }}" >
                          {{ csrf_field() }}
            
              <div class="form-group">
                <label>Nama Mobil </label>
                <input type="hidden" class="form-control col-12 col-md-9" value="{{$user->id}}" readonly="true" name="user_id" value="" placeholder="type something" required>
                <input type="hidden" class="form-control col-12 col-md-9" value="{{$stok->mobil->id}}" readonly="true" name="mobil_id" value="" placeholder="type something" required> 
                <input type="text" class="form-control col-12 col-md-9" value="{{$stok->mobil->nama_mobil}}" readonly="true" name="nama_mobil" value="" placeholder="type something" required> 
              </div> 
              <div class="form-group">
                <label>Tanggal Pinjam </label>
                <input type="text" class="form-control col-12 col-md-9" value="{{ $a }}" readonly="true" name="tgl_pinjam" value="" placeholder="type something" required> 
              </div> 
              <div class="form-group">
                <label>Tanggal Kembali </label>
                <input type="text" class="form-control col-12 col-md-9" value="{{ $b }}" readonly="true" name="tgl_kembali" value="" placeholder="type something" required> 
              </div>
              <div class="form-group">
                <label>Lama Pinjam (Hari) </label>
                <input type="text" class="form-control col-12 col-md-9" value="{{ $interval->days }}" readonly="true" name="lama" value="" placeholder="type something" required> 
              </div>
              {{-- <div class="form-group">
                <label>Harga (Rp.)</label>
                  <input type="text" class="form-control col-12 col-md-9" value="{{$stok->mobil->harga}}" readonly="true" name="harga" placeholder="type something" required> 
              </div> --}}
              <div class="form-group">
                <label>Total (Rp.)</label>
                  <input type="text" class="form-control col-12 col-md-9" value="{{ $total }}" readonly="true" name="total" placeholder="type something" required> 
              </div>
              <div class="form-group">
                  <input type="hidden" class="form-control col-12 col-md-9" value="1" readonly="true" name="status" placeholder="type something" required> 
              </div>
              <br><br>
                <div class="form-group">
                  <button type="submit" class="btn btn-info center-block btn-block"><i class="fa fa-zoom"></i> Pesan</button> 
                </div>
                    
            </form>

                        
          </div>
        </div>
      </div>
    </div>
  </div>

</section>
 
@endsection
