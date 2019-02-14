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
            
            <div class="form-group">
              <label>Nama Mobil </label>
              <input type="text" class="form-control col-12 col-md-9" value="" readonly="true" name="nama_mobil" value="" placeholder="type something" required> 
            </div> 
            <div class="form-group">
              <label>Tanggal Pinjam </label>
              <input type="text" class="form-control col-12 col-md-9" value="" readonly="true" name="tgl_pinjam" value="" placeholder="type something" required> 
            </div> 
            <div class="form-group">
              <label>Tanggal Kembali </label>
              <input type="text" class="form-control col-12 col-md-9" value="" readonly="true" name="tgl_kembali" value="" placeholder="type something" required> 
            </div> 
            <div class="form-group">
              <label>Lama </label>
              <input type="text" class="form-control col-12 col-md-9" value="" readonly="true" name="lama" value="" placeholder="type something" required> 
            </div> 
            <div class="form-group">
              <label>Harga</label>
                <input type="text" class="form-control col-12 col-md-9" value="" readonly="true" name="harga" placeholder="type something" required> 
            </div>
             <div class="form-group">
              <label>Total</label>
                <input type="text" class="form-control col-12 col-md-9" value="" readonly="true" name="total" placeholder="type something" required> 
            </div>
                        
          </div>
        </div>
      </div>
    </div>
  </div>

</section>
 
@endsection
