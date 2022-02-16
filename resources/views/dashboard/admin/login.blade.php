@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">

@include('auth.includes.header')
<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form method="POST" action="{{route('login') }}" class="login100-form       validate-form p-l-55 p-r-55 p-t-178">
                    @csrf
					<span class="login100-form-title">
						Log in
					</span>

                    <div class="wrap-input100 validate-input m-b-16" data-validate="Please enter your email">
						<input class="input100" type="email" name="email" placeholder="Enter Your Email">

                        @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror

						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Please enter password">
						<input class="input100  @error('password') is-invalid @enderror" type="password" name="password" placeholder="Enter Your Password">

                        @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror

						<span class="focus-input100"></span>
					</div>



					<div class="text-right p-t-13 p-b-23">
						<span class="txt1">
							Forgot
						</span>
                        @if (Route::has('password.request'))
                         <a class="txt1" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                         </a>
                        @endif

						<a href="#" class="txt2">

							Username / Password?
						</a>
					</div>

					<div class="container-login100-form-btn">
						<button type="submit" class="login100-form-btn">
							Log in
						</button>
					</div>

					<div class="flex-col-c p-t-170 p-b-40">
						<span class="txt1 p-b-9">
							Don't have an account?
						</span>

						<a href="#" class="txt3">
							Sign up now
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>


    @include('auth.includes.footer')
</body>
</html>



@endsection
