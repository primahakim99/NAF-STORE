@extends('layouts.loginRegisterLayout')

@section('content')
<form class="login100-form validate-form" method="POST" action="{{ route('register') }}">
	@csrf
	<center><img src="Assets/images/logo.png" class="logo " alt=""></center>
	<span class="login100-form-title p-b-26">Sign Up</span>

	<div class="wrap-input100 validate-input">
		<label for="name" class="col-md-4 col-form-label text-md-end">Name</label>
		<input class="input100 @error('name') is-invalid @enderror" type="text" name="name" value="{{ old('name') }}"
			required autocomplete="name" autofocus>
		@error('name')
		<span class="invalid-feedback alert alert-danger" role="alert">
			<strong>{{ $message }}</strong>
		</span>
		@enderror
	</div>

	<div class="wrap-input100 validate-input">
		<label for="phone" class="col-md-4 col-form-label text-md-end">Phone Number</label>
		<input class="input100 @error('phone') is-invalid @enderror" type="text" name="phone" value="{{ old('phone') }}"
			required autocomplete="name" autofocus>
		@error('phone')
		<span class="invalid-feedback alert alert-danger" role="alert">
			<strong>{{ $message }}</strong>
		</span>
		@enderror
	</div>

	<div class="wrap-input100 validate-input" data-validate="Valid email is: a@b.c">
		<label for="email" class="col-md-4 col-form-label text-md-end">E-mail</label>
		<input class="input100  @error('email') is-invalid @enderror" type="text" name="email"
			value="{{ old('email') }}" required autocomplete="email">
		@error('email')
		<span class="invalid-feedback alert alert-danger" role="alert">
			<strong>{{ $message }}</strong>
		</span>
		@enderror
	</div>

	<div class="wrap-input100 validate-input" data-validate="Enter password">
		<span onclick="showPassword()" class="btn-show-pass">
			<i class="zmdi zmdi-eye"></i>
		</span>
		<label for="password" class="col-md-4 col-form-label text-md-end">Password</label>
		<input id="password" class="input100 @error('password') is-invalid @enderror" name="password" required
			autocomplete="new-password" type="password">
		@error('password')
		<span class="invalid-feedback alert alert-danger" role="alert">
			<strong>{{ $message }}</strong>
		</span>
		@enderror
	</div>
	<div class="wrap-input100 validate-input" data-validate="Enter password confirmation">
		<span onclick="showPasswordConfirm()" class="btn-show-pass">
			<i class="zmdi zmdi-eye"></i>
		</span>
		<label for="password-confirm" class="col-md-4 col-form-label text-md-end">Confirm Password</label>
		<input id="passwordConfirm" class="input100" type="password" name="password_confirmation" required
			autocomplete="new-password">
	</div>

	<div class="container-login100-form-btn">
		<div class="wrap-login100-form-btn">
			<div class="login100-form-bgbtn"></div>
			<button class="login100-form-btn">
				Sign Up
			</button>
		</div>
	</div>

	<div class="text-center p-t-115">
		<span class="txt1">
			Already have account
		</span>

		<a class="txt2" href="/sign-in">
			Sign In
		</a>
	</div>
</form>

@endsection