<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Signup - certify India</title>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

    {{-- <link rel="stylesheet" href="{{ asset('css/style.css') }}"> --}}
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"><link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="box-form">
	<div class="left">
		<div class="overlay">
            <div class="">
                <img src="{{ asset('assets/img/loginimg.svg') }}" width="550x" height="500px" alt="" >
            </div>
		</div>
	</div>
	
	
		<div class="right">
		<img class="logo" src="{{  asset('assets/img/logo.png') }}" width="300px" height="250px" alt="">
		<div class="inputs">
			<form method="POST" action="{{ route('register') }}">
				@csrf
				<input type="text" placeholder="User Name" class="@error('username') is-invalid @enderror" name="name" value="{{ old('name') }}" required>
				@error('name')
					<span class="invalid-feedback" role="alert">
						<strong>{{ $message }}</strong>
					</span>
				@enderror
				<br>

				<input type="email" placeholder="E-mail" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required>
				@error('email')
					<span class="invalid-feedback" role="alert">
						<strong>{{ $message }}</strong>
					</span>
				@enderror
				<br>

				<input id="password" placeholder="Password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

				@error('password')
					<span class="invalid-feedback" role="alert">
						<strong>{{ $message }}</strong>
					</span>
				@enderror

				{{-- <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label> --}}

	
					<input id="password-confirm" placeholder="Re-Enter Password" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
	
				{{-- <input id="password-confirm" placeholder="re-password" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password"> --}}

			<br>
			<br>
				<button type="submit">Sign Up</button>
				<br>
			</form>
		</div>
			<br><br>
		<p class="mt-4">Already have an account? <a href="{{route('register')}}">Login here</a> it takes less than a minute.</p>
	</div>
</div>  
</body>
</html>
