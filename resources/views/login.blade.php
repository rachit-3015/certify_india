<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login - certify India</title>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"><link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>
<body>

<div class="box-form">
	<div class="left">
		<div class="overlay">
            <div class="">
                <img src="{{ asset('assets/img/loginimg.svg') }}" width="550x" height="500px" alt="" >
            </div>
		</div>
	</div>
	
	
		<div class="right">
		<img class="logo" src="{{  asset('assets/img/lg.png') }}" width="300px" height="250px" alt="">
		<div class="inputs">
			<form method="POST" action="{{ route('login') }}">
			@csrf
				<input type="text" placeholder="E-mail" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required>
				@error('email')
					<span class="invalid-feedback" role="alert">
						<strong>{{ $message }}</strong>
					</span>
				@enderror
				<br>
				<input type="password" placeholder="password" class="@error('password') is-invalid @enderror" name="password" required>
				@error('password')
					<span class="invalid-feedback" role="alert">
						<strong>{{ $message }}</strong>
					</span>
				@enderror
				<div class="remember-me--forget-password">
				
		<label>
			<input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}/>
			<span class="text-checkbox">Remember me</span>
		</label>
				<p>forget password?</p>
			</div>
				<br>
				<button type="submit" class="loginbtn">Login</button>
				<br>
			</form>
		</div>
			
			<br><br>

		<p class="mt-4">Don't have an account? <a href="{{ route('signup') }}">Creat Your Account</a> it takes less than a minute</p>

	</div>
	
</div>
<!-- partial -->
  
</body>
</html>
