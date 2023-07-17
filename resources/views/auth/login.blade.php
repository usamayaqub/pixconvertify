@extends('layouts.master')

<style>
:root {
	--hue: 223;
	--bg: hsl(0,0%,100%);
	--fg: hsl(var(--hue),10%,10%);
	--primary: hsl(var(--hue),90%,50%);
	--trans-dur: 0.3s;
	font-size: calc(16px + (24 - 16) * (100vw - 320px) / (2560 - 320));
}
a {
	color: hsl(var(--hue),90%,50%);
	transition: color var(--trans-dur);
}
a:focus-visible,
a:hover {
	text-decoration: none;
}
body,
button,
input {
	color: var(--fg);
	font: 1em/1.5 Nunito, sans-serif;
}
body {
	background-color: var(--bg);
	display: flex;
	height: 100vh;
	overflow: hidden;
	transition:
		background-color var(--trans-dur),
		color var(--trans-dur);
}
h1 {
	font-size: 30px;
	margin: 0 0 0.75rem;
}
p {
	color: hsl(var(--hue),10%,30%);
	margin: 0 0 1.5em;
	transition: color var(--trans-dur);
}
.login,
.login__bg-img,
.login__col {
	display: flex;
}
.login,
.login__col {
	width: 100%;
	height: 100%;
}
.login__brand,
.login__copyright {
	padding: 1.5em;
}
.login__brand {
	display: flex;
	align-items: center;
	font-weight: bold;
    padding-bottom:0;
}
.login__btn {
	background-color: var(--btn-bg-red);
	border-radius: 0.2em;
	color: hsl(0,0%,100%);
	cursor: pointer;
	display: block;
	margin-bottom: 1.5em;
	outline: transparent;
	padding: 0.5em 1.5em;
	position: relative;
	width: 100%;
	transition:
		background-color var(--trans-dur),
		opacity var(--trans-dur);
	-webkit-appearance: none;
	appearance: none;
}
.login__btn:disabled {
	cursor: not-allowed;
	opacity: 0.5;
}
.login__btn:not(:disabled):focus-visible,
.login__btn:not(:disabled):hover {
	background-color: hsl(var(--hue),90%,30%);
}
.login__btn-spinner,
.login__btn-spinner:before,
.login__btn-spinner:after {
	animation: spinner 1s ease-in-out infinite;
	background-color: hsl(0,0%,100%);
	border-radius: 50%;
	position: absolute;
}
.login__btn-spinner {
	animation-delay: -0.2s;
	display: none;
	top: 50%;
	left: 50%;
	width: 0.375em;
	height: 0.375em;
	transform: translate(-50%,-50%);
}
.login__btn-spinner:before,
.login__btn-spinner:after {
	content: "";
	display: block;
	width: 100%;
	height: 100%;
}
.login__btn-spinner:before {
	animation-delay: -0.4s;
	left: -0.75em;
}
.login__btn-spinner:after {
	right: -0.75em;
}
.login__btn[data-login="true"] .login__btn-label {
	visibility: hidden;
}
.login__btn[data-login="true"] .login__btn-spinner {
	display: block;
}
.login__checkbox,
.login__field {
	background-color: hsla(var(--hue),90%,50%,0);
	border-radius: 0.2em;
	box-shadow: 0 0 0 1px hsl(var(--hue),10%,70%) inset;
	outline: transparent;
	transition:
		background-color var(--trans-dur),
		box-shadow var(--trans-dur);
	-webkit-appearance: none;
	appearance: none;
}
.login__checkbox {
	margin-right: 0.5em;
	width: 1em;
	height: 1em;
}
.login__checkbox:before {
	color: hsla(0,0%,100%,0);
	content: "\2713";
	display: block;
	line-height: 1.333;
	text-align: center;
}
.login__checkbox:checked {
	background-color: hsla(var(--hue),90%,50%,1);
	box-shadow: 0 0 0 1px var(--primary) inset;
}
.login__checkbox:checked:before {
	color: hsla(0,0%,100%,1);
}
.login__checkbox:focus-visible,
.login__checkbox:hover,
.login__field:focus-visible,
.login__field:hover {
	box-shadow: 0 0 0 1px var(--primary) inset;
}
.login__col {
	flex-direction: column;
	overflow-y: auto;
}
.login__copyright p {
	font-size: 0.75em;
	line-height: 2;
	margin: 0;
}
.login__field {
	padding: 0.5em 0.75em;
	width: 100%;
	height: 2.5em;
}
.login__field-group {
	margin-bottom: 0.75em;
}
.login__field-group--horz {
	display: flex;
	justify-content: space-between;
}
.login__form,
.login__form-wrapper {
	margin: auto;
}
.login__form-wrapper h1{
    font-size:30px;
    margin-top:0;
    line-height:40px;
}
.login__form-wrapper p{
    text-align:start;
}
.login__form {
	padding: 0 1.5em;
	width: 100%;
}
.login__form-wrapper {
	max-width: 22em;
}
.login__label {
	display: block;
	font-weight: 500;
}
.login__label--horz {
	font-weight: normal;
	display: flex;
	align-items: center;
}
.login__label,
.login__label + a,
.login__sign-up {
	font-size: 0.75em;
	line-height: 2;
}
.login__sign-up {
	margin: 0;
	text-align: center;
}

/* Dark theme */
/* Mobile */
/* @media (max-width: 767px) {
	.login__col + .login__col {
		display: none;
	}
} */
</style>

@section('content')
    <!-- <div class="container" style="display:none;">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Login') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Login') }}
                                    </button>

                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

<main class="login">
	<div class="login__col">
		<header class="login__brand">
            <img src="{{asset('./assets/images/site-logo.svg')}}" alt="">
        </header>
		<form class="login__form" method="POST" action="{{ route('login') }}">
            @csrf
			<div class="login__form-wrapper">
				<h1>Welcome back</h1>
				<p>Sign in to your account.</p>
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
				<button class="login__btn" type="button">
					<span class="login__btn-label">{{ __('Login') }}</span>
					<span class="login__btn-spinner"></span>
				</button>
				<p class="login__sign-up">Don’t have an account? <a href="#">Sign up</a></p>
			</div>
		</form>
	</div>
</main>
@endsection
