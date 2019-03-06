@extends('layouts.vendor_view')
@section('content')
<div class="container">
  <!-- Content Header (Page header) -->
  <section class="content-header">
      <script type="text/javascript">
      (function($){
        $(function(){
          $('.button-collapse').sideNav();
        });
      })(jQuery);

      </script>
          <div class="col-11">
              <!-- Breadcrumbs-->
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="#">Dashboard</a>
                </li>
              </ol>

      <div class="col-xs-12">
        <!-- ./col -->
    <div class="col-xs-12">
      <div class="col-lg-3 col-xs-5">
        <!-- small box -->
        <div class="small-box bg-yellow">
          <div class="inner">
            <h3>1</h3>
            <p>Data Pelanggan</p>
          </div>
          <div class="icon">
            <i class="ion ion-person-add"></i>
          </div>
          <a href="{{ route('user.mobile') }}" class="small-box-footer">
            More info <i class="fa fa-arrow-circle-right"></i>
          </a>
        </div>
      </div>

      <div class="col-lg-3 col-xs-5">
        <!-- small box -->
        <div class="small-box bg-green">
          <div class="inner">
            <h3>1</h3>
            <p>Data Vendor</p>
          </div>
          <div class="icon">
            <i class="ion ion-person-add"></i>
          </div>
          <a href="{{ route('vendor.index1') }}" class="small-box-footer">
            More info <i class="fa fa-arrow-circle-right"></i>
          </a>
        </div>
      </div>

      <div class="col-lg-3 col-xs-5">
        <!-- small box -->
        <div class="small-box bg-red">
          <div class="inner">
            <h3>1</h3>
            <p>Data Mobil</p>
          </div>
          <div class="icon">
            <i class="fa fa-files-o"></i>
          </div>
          <a href="{{ route('mobil.index') }}" class="small-box-footer">
            More info <i class="fa fa-arrow-circle-right"></i>
          </a>
        </div>
      </div>
    </div>
<div class="col-xs-12">
      <div class="col-lg-3 col-xs-5">
        <!-- small box -->
        <div class="small-box bg-purple">
          <div class="inner">
            <h3>1</h3>
            <p>Stok Mobil</p>
          </div>
          <div class="icon">
            <i class="fa fa-calendar"></i>
          </div>
          <a href="{{ route('stok.mobil') }}" class="small-box-footer">
            More info <i class="fa fa-arrow-circle-right"></i>
          </a>
        </div>
      </div>

      <div class="col-lg-3 col-xs-5">
        <!-- small box -->
        <div class="small-box bg-blue">
          <div class="inner">
            <h3>1</h3>
            <p>Data Rental</p>
          </div>
          <div class="icon">
            <i class="fa fa-shopping-cart"></i>
          </div>
          <a href="{{ route('rental.index') }}" class="small-box-footer">
            More info <i class="fa fa-arrow-circle-right"></i>
          </a>
        </div>
      </div>
    </div>
    </div>
    </div>
  </div>
@endsection
