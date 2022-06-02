@extends('layouts.loginRegisterLayout')

@section('content')
<form class="login100-form" method="POST" action="{{ route('login') }}">
	@csrf
	<center><img src="Assets/images/logo.png" class="logo " alt=""></center>
	<span class="login100-form-title p-b-26">Sign In</span>
	<div class="wrap-input100 validate-input" data-validate="Valid email is: ">
		<label for="login" class="col-md-4 col-form-label text-md-end">Phone Number or E-mail</label>
		<input class="input100" type="text" name="login" value="{{ old('username') ?: old('email') }}" required
			autofocus>
	</div>

	<div class="wrap-input100 validate-input" data-validate="Enter password">
		<span class="btn-show-pass" onclick="showPassword()">
			<i class="zmdi zmdi-eye"></i>
		</span>
		<label for="password" class="col-md-4 col-form-label text-md-end">Password</label>
		<input id="password" class="input100" type="password" @error('WrongCredentials') is-invalid @enderror"
			name="password" required autocomplete="current-password">
	</div>
	@error('WrongCredentials')
	<span class="invalid-feedback alert alert-danger" role="alert">
		<strong>{{ $message }}</strong>
	</span>
	@enderror
	<div class="container-login100-form-btn">
		<div class="wrap-login100-form-btn">
			<div class="login100-form-bgbtn"></div>
			<button class="login100-form-btn">
				Sign In
			</button>
		</div>
	</div>

	<div class="text-center p-t-115">
		<span class="txt1">
			New Member?
		</span>

		<a class="txt2" href="/sign-up">
			Sign Up
		</a>
	</div>
</form>

@endsection