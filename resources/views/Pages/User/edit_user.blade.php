<!-- @extends('layouts.admin_view') -->
@section('content')
    <div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <strong>User Management</strong> Edit Data
        </div>
    </div>
    <form action="{{ route('superadmin.user.update', $user->id) }}" method="post">
      {{ csrf_field() }}

    <div class="row form-group">
        <div class="col col-md-2"><label for="text-input" class=" form-control-label">Name</label></div>
        <div class="col-10 col-md-9"><input type="text" id="name" name="name" class="form-control" value="{{ $user->name }}">
        </div>
      </div>
    <div class="row form-group">
        <div class="col col-md-2"><label for="text-input" class=" form-control-label">Email</label></div>
        <div class="col-10 col-md-9"><input type="text" id="email" name="email" class="form-control" value="{{ $user->email }}">
        </div>
    </div>
    <div class="row form-group">
        <div class="col col-md-2"><label for="text-input" class=" form-control-label">Level</label></div>
        <div class="col-10 col-md-9"><input type="text" id="role_id" name="role_id" class="form-control" value="{{ $user->Role->level }}" disabled>
        </div>
    </div>
    <div class="card-footer">
        <button type="submit" class="btn btn-primary btn-sm">
            <i class="fa fa-dot-circle-o"></i> Submit
        </button>
        <button type="reset" class="btn btn-success btn-sm">
            <i class="fa fa-ban"></i> Reset
        </button>
        <a href="{{route('superadmin.user.data')}}">
        <button type="button" class="btn btn-danger btn-sm">
          <i class="fa fa-close"></i> Cancel
        </button></a>
    </div>
  </form>
@endsection
