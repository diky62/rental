@extends('layouts.user')
@section('content')
<section>

  <div class="container">

    <div id="WJSlider" class="carousel slide" data-ride="carousel">
      <!-- Indikator yang bulat bulat ituloh gan-->
      <ol class="carousel-indicators">
        <li data-target="#WJSlider" data-slide-to="0" class="active"></li>
        <li data-target="#WJSlider" data-slide-to="1"></li>
        <li data-target="#WJSlider" data-slide-to="2"></li>

      </ol>

      <!-- Wrapper untuk slides -->
      <div class="carousel-inner" role="listbox">

        <div class="item active">
          <img src="{{asset('gambar/slide/1.jpg')}}" alt="slide1" width="460" height="345">
          <div class="carousel-caption">
            
          </div>
        </div>

        <div class="item">
          <img src="{{asset('gambar/slide/2.png')}}" alt="slide2" width="460" height="345">
          <div class="carousel-caption">
            
          </div>
        </div>
   
        <div class="item">
          <img src="{{asset('gambar/slide/3.jpg')}}" alt="slide3" width="460" height="345">
          <div class="carousel-caption">
            
          </div>
        </div>

          

      </div>

      <!-- Kode untuk Navigasi -->
      <a class="left carousel-control" href="#WJSlider" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Kembali</span>
      </a>
      <a class="right carousel-control" href="#WJSlider" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Lanjut</span>
      </a>
    </div>
    <br><br>

    <form method='post' action="{{ route('/homeuser.show') }}">
            @csrf
      <div class="row form-group">
        <div class="col col-md-2"><label for="text-input" class="form-control-label">Tanggal Pinjam</label></div>
          <div class="col-12 col-md-9">
            <input type="date" id="tgl_pinjam" name="tgl_pinjam"" class="form-control">
          </div>
      </div>
      <div class="row form-group">
        <div class="col col-md-2"><label for="text-input" class="form-control-label">Tanggal Kembali</label></div>
          <div class="col-12 col-md-9"><input type="date" id="tgl_kembali" name="tgl_kembali"" class="form-control"></div>
      </div>
   
       <button type="submit" class="btn btn-info center-block btn-block"><i class="fa fa-zoom"></i> Cari</button> 
    </form>
  </div>

</section>
 
@endsection
