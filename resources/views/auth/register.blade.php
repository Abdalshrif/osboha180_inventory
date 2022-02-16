@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="en">

@include('auth.includes.header')
<body>

	 <div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form method="POST" action="{{ route('register') }}" class="login100-form validate-form p-l-55 p-r-55 p-t-178">
                    @csrf
					<span class="login100-form-title">
						Register
					</span>

                    <div class="wrap-input100 validate-input m-b-16" data-validate="Please enter your Name">
						<input class="input100" type="text" name="name" placeholder="Enter Your Name" value="{{ old('name') }}">

                        @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror

						<span class="focus-input100"></span>
					</div>

                    <div class="wrap-input100 validate-input m-b-16" data-validate="Please enter your Email">
						<input class="input100" type="text" name="email" value="{{ old('email') }}" placeholder="Enter Your Email">

                        @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror

						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-16" data-validate = "Please enter password">
						<input class="input100  @error('password') is-invalid @enderror" type="password" name="password" required autocomplete="new-password" placeholder="Please Enter password">

                        @error('password')
                                    <span class="invalid-feedback role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror

						<span class="focus-input100"></span>
					</div>

                    <div class="wrap-input100 validate-input m-b-16" data-validate = "Please conferm password">
                        <input class="input100  @error('password') is-invalid @enderror" type="password" name="password_confirmation" required autocomplete="new-password" placeholder="Please conferm password">

                        <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input m-b-16" data-validate = "Please conferm password">
                        <input class="input100  @error('number_of_team') is-invalid @enderror" type="text" name="number_of_team" required autocomplete="number_of_team" placeholder="Please Enter Your Team Number">

                        <span class="focus-input100"></span>
                    </div>

                    {{-- <div class="wrap-input100 validate-input m-b-16" data-validate = "Please conferm password">
                        <select name="rol_id" id="" class="input100">
                            <option selected>Open this select menu</option>
                            <option value="guided">Gided</option>
                            <option value="monitor">Monitor</option>
                        </select>
                    </div> --}}


					<div class="container-login100-form-btn">
						<button type="submit" class="login100-form-btn">
							Sign in
						</button>
					</div>

                    <span class="txt1 p-b-9">
                        You already have an acount
                    </span>

                    <a href="{{route('login')}}" class="txt3">
                        Login
                    </a>

				</form>
			</div>
		</div>
	</div>


    @include('auth.includes.footer')
</body>
</html>


@endsection
