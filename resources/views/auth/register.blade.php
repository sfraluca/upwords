@extends('layouts.register-app')

@section('content')
<div class="limiter">
		<div class="container-login100" style="background-image: url('css/images/bg-01.jpg');">
			<div class="wrap-login100">
				<form class="login100-form validate-form">
					<span class="login100-form-logo">
						<i class="zmdi zmdi-landscape"></i>
					</span>

					<span class="login100-form-title p-b-34 p-t-27">
						Log in
					</span>
                    <form role="form" method="POST" action="{{ url('/register') }}">
                        {{ csrf_field() }}

                        <div class="wrap-input100 validate-input" data-validate = "Enter name">
						<input class="input100" type="text" name="name" placeholder="Name">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Enter email">
						<input class="input100" type="email" name="email" placeholder="Email">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
                       
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="passward" placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
                       
					</div>

					<div class="wrap-input100 validate-input" data-validate="Reenter password">
						<input class="input100" type="password" name="password_confirmation" placeholder="Confirm password">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
                       
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Register
						</button>
					</div>

					<div class="text-center p-t-90">
						<a class="txt1" href="{{ url('/login') }}">
							Have an account
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>

@endsection
