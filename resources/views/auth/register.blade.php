
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Sign up</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendorr/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendorr/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendorr/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendorr/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendorr/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendorr/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="csss/util.css">
	<link rel="stylesheet" type="text/css" href="csss/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-50">
				<form class="login100-form validate-form"  method="POST" action="{{ route('register') }}">
				@csrf
					<span class="login100-form-title p-b-33">
						Account Sign up
					</span>
          <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
          <input class="input100" placeholder="Full Name" id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
					</div>
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror	
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
					<input id="email" class="input100" type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
					</div>

					    		@error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

					<div class="wrap-input100 rs1 validate-input" data-validate="Password is required">
					<input class="input100" placeholder="Password" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
					</div>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror	    	
          <div class="wrap-input100 rs1 validate-input" data-validate="Password is required">
          <input  class="input100" placeholder="Confrim Password" id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
					</div>

					<div class="container-login100-form-btn m-t-20">
						<button  type="submit"  class="login100-form-btn">
						{{ __('Register') }}
						</button>
					

					</div>

					<div class="text-center p-t-45 p-b-4">
						<span class="txt1">
							Forgot
						</span>

						@if (Route::has('password.request'))
                                    <a class="btn btn-link" class="txt2 hov1" href="{{ route('password.request') }}">
                                     Password?
                                    </a>
                                @endif
					</div>

					<div class="text-center">
						<span class="txt1">
            Already have an account?
						</span>
						<a href="{{ route('login') }}" class="txt2 hov1" >	Login</a>

				
					</div>
				</form>
			</div>
		</div>
	</div>
	

	
<!--===============================================================================================-->
	<script src="vendorr/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendorr/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendorr/bootstrap/js/popper.js"></script>
	<script src="vendorr/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendorr/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendorr/daterangepicker/moment.min.js"></script>
	<script src="vendorr/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendorr/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="jjs/js/main.js"></script>

</body>
</html>