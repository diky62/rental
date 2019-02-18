@extends('layouts.user')
@section('content')
<section>
  
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Profil</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <div class="form-group">
              <img src="{{asset('gambar/avatar/default.png')}}" class="rounded mx-auto d-block" width="100">
                                {{-- <input type="file" name="avatar" class="form-control"> --}}     
            </div>
                           {{--  <div class="form-group">
                                <button class="btn btn-success"> Ubah Gambar</button>     
                            </div> --}}
                       {{--  </form> --}}

            <div class="form-group">
              <label>Nama </label>
              <input type="text" class="form-control col-12 col-md-9" value="{{$user->name}}" readonly="true" name="first_name" value="" placeholder="type something" required> 
            </div> 
            <div class="form-group">
              <label>NIK </label>
              <input type="text" class="form-control col-12 col-md-9" value="{{$user->nik}}" readonly="true" name="first_name" value="" placeholder="type something" required> 
            </div> 
            <div class="form-group">
              <label>Alamat </label>
              <input type="text" class="form-control col-12 col-md-9" value="{{$user->alamat}}" readonly="true" name="first_name" value="" placeholder="type something" required> 
            </div> 
            <div class="form-group">
              <label>No Hp </label>
              <input type="text" class="form-control col-12 col-md-9" value="{{$user->no_hp}}" readonly="true" name="first_name" value="" placeholder="type something" required> 
            </div> 
            <div class="form-group">
              <label>Email</label>
                <input type="text" class="form-control col-12 col-md-9" value="{{$user->email}}" readonly="true" name="last_name" placeholder="type something" required> 
            </div>
                        
          </div>
        </div>
      </div>
    </div>
  </div>

</section>
 
@endsection
