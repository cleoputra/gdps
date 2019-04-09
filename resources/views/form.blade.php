<!DOCTYPE html>
<html lang="en">
<head>
	<title>GDPS | E-Recruitment</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="{{asset('images/icons/favicon.ico')}}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('fonts/iconic/css/material-design-iconic-font.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('fonts/Linearicons-Free-v1.0.0/icon-font.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/animate/animate.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/css-hamburgers/hamburgers.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/animsition/css/animsition.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/select2/select2.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/daterangepicker/daterangepicker.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
	
    <link rel="icon" href="{{asset('img/logo-white.png')}}">

<!--===============================================================================================-->
</head>
<body>		
		<div class="bg-container-contact100" style="background-image: url(img/Foto/person.jpg);">
			<div class="contact100-header flex-sb-m">
				<a href="{{route('index')}}" class="contact100-header-logo">
					<img src="{{asset('img/Foto/logo_white.png')}}" alt="LOGO">
				</a>

				<div>
					<button class="btn-show-contact100">
						E-RECRUITMENT
					</button>
				</div>
			</div>
		</div>

		<div class="container-contact100">
			<div class="wrap-contact100">
				<button class="btn-hide-contact100">
					<i class="zmdi zmdi-close"></i>
				</button>

				<div class="contact100-form-title" style="background-image: url(images/bg-02.jpg);">
					<span>E-RECRUITMENT</span>
				</div>

				<form class="contact100-form validate-form" id="e-recruit" method="POST" action="{{ route('submit') }}" enctype="multipart/form-data">
					@csrf
					@if (session('success'))
			<div class="alert alert-success">
					<button type="button" class="close" data-dismiss="alert">&times;</button>
					{!! session('success') !!}
			</div>
			@endif
					<div class="wrap-input100 validate-input">
						<input id="name" class="input100" type="text" name="name" placeholder="Full name">
						<span class="focus-input100"></span>
						<label class="label-input100" for="name">
							<span class="lnr lnr-user m-b-2"></span>
						</label>
					</div>

					<div class="wrap-input100 validate-input">
						<input id="name" class="input100" type="text" name="nationality" placeholder="Nationality">
						<span class="focus-input100"></span>
						<label class="label-input100" for="name">
							<span class="lnr lnr-flag m-b-2"></span>
						</label>
					</div>

					<div class="wrap-input100 validate-input">
						<input id="name" class="input100" type="date" name="born_date" placeholder="Born Date" style="color: #BDBDBD">
						<span class="focus-input100"></span>
						<label class="label-input100" for="name">
							<span class="lnr lnr-calendar-full m-b-2"></span>
						</label>
					</div>

					<div class="wrap-input100 validate-input">
						<input id="name" class="input100" type="text" name="nik" placeholder="Nomor Induk Kependudukan" minlength="16" maxlength="16">
						<span class="focus-input100"></span>
						<label class="label-input100" for="name">
							<span class="lnr lnr-file-add m-b-2"></span>
						</label>
					</div>

					<div class="wrap-input100 validate-input"> 
						<select name="pendidikan" id="name" class="input100" style="height: 50px; color: #BDBDBD">
							<option value="" disabled selected hidden>PILIH PENDIDIKAN</option>
							<option value="smk">SMK</option>
							<option value="sma">SMA</option>
							<option value="d1">D1</option>
							<option value="d2">D2</option>
							<option value="d3">D3</option>
							<option value="s1">S1</option>
							<option value="s2">S2</option>
						</select>
						<label class="label-input100" for="name">
							<span class="lnr lnr-code m-b-2"></span>
						</label>
					</div>

					<div class="wrap-input100 validate-input">
						<input id="name" class="input100" type="text" name="jurusan" placeholder="Jurusan">
						<span class="focus-input100"></span>
						<label class="label-input100" for="name">
							<span class="lnr lnr-frame-contract m-b-5"></span>
						</label>
					</div>

					<div class="wrap-input100 validate-input">
						<input id="email" class="input100" type="email" name="email" placeholder="Eg. example@email.com">
						<span class="focus-input100"></span>
						<label class="label-input100" for="email">
							<span class="lnr lnr-envelope m-b-5"></span>
						</label>
					</div>

					<div class="wrap-input100 validate-input">
						<input id="phone" class="input100" type="text" name="phone" placeholder="Eg. +62 800 000000">
						<span class="focus-input100"></span>
						<label class="label-input100" for="phone">
							<span class="lnr lnr-smartphone m-b-2"></span>
						</label>
					</div>

					<div class="wrap-input100 validate-input">
						<textarea id="message" class="input100" name="address" placeholder="Your Address"></textarea>
						<span class="focus-input100"></span>
						<label class="label-input100 rs1" for="message">
							<span class="lnr lnr-inbox"></span>
						</label>
					</div>

					<div class="wrap-input100 validate-input">
						<p style="text-align: center"> CV (Format: .pdf | max: 2mb</p>
						<input id="cv" class="input100" type="file" name="cv"></input>
						<span class="focus-input100"></span>
						<label class="label-input100 rs1" for="message">
							<span class="lnr lnr-file-add"></span>
						</label>
					</div>

					<div class="wrap-input100 validate-input">
						<p style="text-align: center"> KTP | Passport (Format: .jpg .jpeg .png | max: 2mb</p>
						<input id="ktp" class="input100" type="file" name="ktp"></input>
						<span class="focus-input100"></span>
						<label class="label-input100 rs1" for="message">
							<span class="lnr lnr-file-add"></span>
						</label>
					</div>



					<div class="container-contact100-form-btn">
						<button class="contact100-form-btn" type="submit" id="e-recruit">
							Send Now
						</button>
						@if ($errors->any())
						    <div class="alert alert-danger">
						        <ul>
						            @foreach ($errors->all() as $error)
						                <li>{{ $error }}</li>
						            @endforeach
						        </ul>
						    </div>
						@endif
					</div>
				</form>
			</div>
		</div>



<!--===============================================================================================-->
	<script src="{{asset('vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('vendor/animsition/js/animsition.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('vendor/bootstrap/js/popper.js')}}"></script>
	<script src="{{asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('vendor/select2/select2.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('vendor/daterangepicker/moment.min.js')}}"></script>
	<script src="{{asset('vendor/daterangepicker/daterangepicker.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('vendor/countdowntime/countdowntime.js')}}"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
