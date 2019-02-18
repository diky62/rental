@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div aclass="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('daftar.store') }}" >
                        @csrf
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nama') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="nik" class="col-md-4 col-form-label text-md-right">{{ __('NIK') }}</label>

                            <div class="col-md-6">
                                <input id="nik" type="text" class="form-control{{ $errors->has('nik') ? ' is-invalid' : '' }}" name="nik" value="{{ old('nik') }}" required autofocus>

                                @if ($errors->has('nik'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('nik') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="provinsi" class="col-md-4 col-form-label text-md-right">{{ __('Provinsi') }}
                            </label>
                            <div class="col-md-6">
                                <select class="form-control" name="provinsi_id" id="provinsi_id">
                                    <option value="0" disabled="true" selected="true">Pilih Provinsi</option>
                                    @foreach($provinsi as $provinsi)
                                    <option value="{{ $provinsi->id }}">{{ $provinsi->nama_provinsi }}</option>
                                    @endforeach 
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="kabupaten" class="col-md-4 col-form-label text-md-right">{{ __('Kabupaten') }}
                            </label>
                            <div class="col-md-6">
                                <select class="form-control" name="kabupaten" id="kabupaten">
                                    <option value="0" disabled="true" selected="true">Pilih Kabupaten</option>
                                     @foreach($kabupaten as $kabupaten)
                                    <option value="{{ $kabupaten->id }}">{{ $kabupaten->nama_kabupaten }}</option>
                                    @endforeach 
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="kecamatan" class="col-md-4 col-form-label text-md-right">{{ __('Kecamatan') }}
                            </label>

                            <div class="col-md-6">
                                <select class="form-control" name="kecamatan" id="kecamatan">
                                    <option value="0" disabled="true" selected="true">Pilih Kecamatan</option>
                                     @foreach($kecamatan as $kecamatan)
                                    <option value="{{ $kecamatan->id }}">{{ $kecamatan->nama_kecamatan }}</option>
                                    @endforeach 
                                </select>
                            </div>
                        </div>
                
                        <div class="form-group row">
                            <label for="alamat" class="col-md-4 col-form-label text-md-right">{{ __('Alamat') }}</label>

                            <div class="col-md-6">
                                <input id="alamat" type="text" class="form-control{{ $errors->has('alamat') ? ' is-invalid' : '' }}" name="alamat" value="{{ old('alamat') }}" required autofocus>

                                @if ($errors->has('alamat'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('alamat') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="roles_id" class="col-md-4 col-form-label text-md-right">{{ __('Role') }}
                            </label>

                            <div class="col-md-6">
                                <select class="form-control" name="roles_id" id="roles_id">
                                    @foreach($roles as $role)
                                    <option value="{{ $role->id }}">{{ $role->name }}</option>
                                    @endforeach 
                                </select>
                            </div>
                        </div>

                       
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    <script type="text/javascript">
      $('#provinsi').on('change', function(e){
        console.log(e);
        var provinsi_id = e.target.value;
        $.get('/json-kabupaten?provinsi_id=' + provinsi_id,function(data) {
          console.log(data);
          $('#kabupaten').empty();
          $('#kabupaten').append('<option value="0" disabled="true" selected="true">Pilih Kabupaten</option>');

          $('#kecamatan').empty();
          $('#kecamatan').append('<option value="0" disabled="true" selected="true">Pilih Kecamatan</option>');

          $.each(data, function(index, kabupatenObj){
            $('#kabupaten').append('<option value="'+ kabupatenObj.id +'">'+ kabupatenObj.name +'</option>');
          })
        });
      });

      $('#kabupaten').on('change', function(e){
        console.log(e);
        var kabupaten_id = e.target.value;
        $.get('/json-kecamatan?kabupaten_id=' + kabupaten_id,function(data) {
          console.log(data);
          $('#kecamatan').empty();
          $('#kecamatan').append('<option value="0" disable="true" selected="true">=== Pilih Kecamatan ===</option>');

          $.each(data, function(index, kecamatanObj){
            $('#kecamatan').append('<option value="'+ kecamatanObj.id +'">'+ kecamatanObj.name +'</option>');
          })
        });
      });
  </script>
  @endsection
