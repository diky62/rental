@extends('layouts.user')
@section('content')
<section>
  
  <div class="container">
    <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <!-- /.box-header -->
            <div class="box-body">
              <center><h3>Sukses</h3></center><br>
              <center><h4>Pesanan Berhasil, silahkan lakukan transfer dengan melihat pesanan yang telah anda pesan pada menu riwayat.</h4></center>

               <a href="{{url('/homeuser')}}"><button class="btn btn-info center-block btn-block"><i class="fa fa-check"></i> OK</button></a>
            </div>
              
          </div>
        </div>
    </div>
  </div>

</section>
 
@endsection
