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
				<!-- <header class="login__brand">
            <img src="{{asset('./assets/images/site-logo.svg')}}" alt="">
        </header> -->
		<form class="login__form" method="POST" action="{{ route('login') }}">
            @csrf
			<div class="login__form-wrapper">
				<h1>Welcome back</h1>
				<p class="mb-2">Sign in to your account.</p>
				<div class="login__field-group">
					<label class="login__label" for="user-email">Email</label>
                    <input id="email" type="email" class="login__field @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
				</div>
				<div class="login__field-group">
					<label class="login__label" for="pass">Password</label>
                    <input id="password" type="password" class="login__field @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
				</div>
				<div class="login__field-group login__field-group--horz">
					<label class="login__label login__label--horz">
                        <input class="login__checkbox" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
						<span>{{ __('Remember Me') }}</span>
					</label>
                    @if (Route::has('password.request'))
                    <a class="" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                    @endif
				</div>
				<button class="login__btn" type="submit">
					<span class="login__btn-label">{{ __('Login') }}</span>
					<span class="login__btn-spinner"></span>
				</button>
				<span class="or">or</span>
				<div class="sign-up-with-google">
					<a href="{{ url('auth/google') }}">
						<img src="{{asset('./assets/images/google-icon.svg')}}" alt="">
						<span>Login with Google</span>
					</a>
				</div>
				<p class="login__sign-up">Don’t have an account? <a href="{{ route('register') }}">Sign up</a></p>
			</div>
		</form>
	</div>
</main>
@endsection
