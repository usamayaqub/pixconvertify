@extends('layouts.app')
<style>
body {
	background-color: var(--bg);
	display: flex;
	height: 100vh;
	overflow: hidden;
	transition:
		background-color var(--trans-dur),
		color var(--trans-dur);
}
</style>
@section('content')
<main class="login">
	<div class="login__col">
        <form class="login__form" method="POST" action="{{ route('register') }}">
            @csrf
			<div class="login__form-wrapper">
				<h1>Welcome to Pixconvertify</h1>
				<p class="mb-2">Sign Up your account.</p>
				<div class="login__field-group">
					<label class="login__label" for="user-email">Name</label>
                    <input id="name" type="text" class="login__field @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
				</div>

				<div class="login__field-group">
					<label class="login__label" for="user-email">Email</label>
                    <input id="email" type="email" class="login__field @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
				</div>

        <div class="login__field-group">
					<label class="login__label" for="user-email">Password</label>
                    <input id="password" type="password" class="login__field @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
				</div>

        <div class="login__field-group">
					<label class="login__label" for="user-email">Confirm Password</label>
                    <input id="password-confirm" type="password" class="login__field" name="password_confirmation" required autocomplete="new-password">
				</div>


				<button class="login__btn" type="submit">
					<span class="login__btn-label">{{ __('Register') }}</span>
					<span class="login__btn-spinner"></span>
				</button>
				<span class="or">or</span>
				<div class="sign-up-with-google">
					<a href="{{ url('auth/google') }}">
						<img src="{{asset('./assets/images/google-icon.svg')}}" alt="">
						<span>Login with Google</span>
					</a>
				</div>
				<p class="login__sign-up">Already have an account? <a href="{{ route('login') }}">Log In</a></p>
			</div>
		</form>
	</div>
</main>
@endsection