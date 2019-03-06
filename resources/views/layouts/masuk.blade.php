<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login E-Rent Car</title>
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
				<form class="login100-form validate-form" method="POST" action="{{route('login') }}">
					{{ csrf_field() }}
					
					<span class="login100-form-title p-b-70">
						LOGIN 
					</span>
					<span>
						<center>
							<img src="{{asset('gambar/rent_car.png')}}" width="300px">
						</center>
						
					</span>

					<div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate = "Enter Email">
						<input class="input100" type="email" name="email">
						<span class="focus-input100" data-placeholder="email"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-50" data-validate="Enter password">
						<input class="input100" type="password" name="password">
						<span class="focus-input100" data-placeholder="Password"></span>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Login
						</button>
					</div>

					<ul class="login-more p-t-190">
						{{-- <li class="m-b-8">
							<span class="txt1">
								Forgot
							</span>

							<a href="#" class="txt2">
								Username / Password?
							</a>
						</li> --}}

						<li>
							<span class="txt1">
								Don’t have an account?
							</span>

							<a href="{{ route('register') }}" class="txt2">
								Sign up
							</a>
						</li>
					</ul>
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