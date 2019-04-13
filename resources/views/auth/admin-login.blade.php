@extends('layouts.app')

@section('content')
<div class="limiter">
    <div class="container-login100" style="background-image: url('/css/images/bg-01.jpg');">
        <div class="wrap-login100">
            <div class="panel panel-default">
                    <form class="login100-form validate-form" role="form" method="POST" action="{{ route('admin.login.submit', app()->getLocale()) }}">
                        {{ csrf_field() }}
 <span class="login100-form-logo">
						<i class="zmdi zmdi-landscape"></i>
					</span>
                    <span class="login100-form-title p-b-34 p-t-27">
						@lang('header.admin_login')
					</span>
                        <div class="wrap-input100 validate-input" data-validate = "Enter email">
						<input class="input100" type="email" name="email" value="{{ old('email') }}" placeholder="Email" id="email" required autofocus>
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
                        @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
						@if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
					</div>


                      

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit">
							@lang('header.login')
						</button>
					</div>

					<div class="text-center p-t-90">
						<a class="txt1" href="{{ route('admin.password.request', app()->getLocale()) }}">
							@lang('header.forgot')
						</a>
					</div>


                    </form>
           
        </div>
    </div>
</div>
<div id="dropDownSelect1"></div>
@endsection
