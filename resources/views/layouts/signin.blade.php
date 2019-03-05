<!DOCTYPE html>
<html lang="en">
<head>
	<title>Register E-Rent Car</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="{{asset('masuk/images/icons/favicon.ico')}}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('masuk/vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('masuk/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('masuk/fonts/iconic/css/material-design-iconic-font.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('masuk/vendor/animate/animate.css')}}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{asset('masuk/vendor/css-hamburgers/hamburgers.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('masuk/vendor/animsition/css/animsition.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('masuk/vendor/select2/select2.min.css')}}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{asset('masuk/vendor/daterangepicker/daterangepicker.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('masuk/css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('masuk/css/main.css')}}">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-t-85 p-b-20">
				<form class="login100-form validate-form" method="POST" action="{{route('register') }}">
					{{ csrf_field() }}
					
					<span class="login100-form-title p-b-70">
						REGISTER
					</span>
					<span>
						<center>
							<img src="{{asset('gambar/rent_car.png')}}" width="300px">
						</center>
						
					</span>

					<div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate = "Enter Name">
						<input class="input100" type="text" name="name">
						<span class="focus-input100" data-placeholder="Nama"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-50" data-validate="Enter NIK">
						<input class="input100" type="text" name="nik">
						<span class="focus-input100" data-placeholder="NIK"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-50" data-validate="Enter Alamat">
						<input class="input100" type="text" name="alamat">
						<span class="focus-input100" data-placeholder="Alamat"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-50" data-validate="Enter Email">
						<input class="input100" type="email" name="email">
						<span class="focus-input100" data-placeholder="Email"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-50" data-validate="Enter No Hp">
						<input class="input100" type="text" name="no_hp">
						<span class="focus-input100" data-placeholder="No Hp"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-50" data-validate="Enter Role">
						<select class="input100" name="roles_id">
							<option value="">-- Pillih Hak Akses --</option>
                            <option value="1">Admin</option>
                            <option value="2">Vendor</option>
                            <option value="3">User</option>
						</select>
						
					</div>

					<div class="wrap-input100 validate-input m-b-50" data-validate="Enter Password">
						<input class="input100" type="text" name="password">
						<span class="focus-input100" data-placeholder="Password"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-50" data-validate="Enter Konfirmasi Password">
						<input class="input100" type="text" name="password_confirmation">
						<span class="focus-input100" data-placeholder="Konfirmasi Password"></span>
					</div>

					

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Register
						</button>
					</div>

				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="{{asset('masuk/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('masuk/vendor/animsition/js/animsition.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('masuk/vendor/bootstrap/js/popper.js')}}"></script>
	<script src="{{asset('masuk/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('masuk/vendor/select2/select2.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('masuk/vendor/daterangepicker/moment.min.js')}}"></script>
	<script src="{{asset('masuk/vendor/daterangepicker/daterangepicker.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('masuk/vendor/countdowntime/countdowntime.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('masuk/js/main.js')}}"></script>

</body>
</html>