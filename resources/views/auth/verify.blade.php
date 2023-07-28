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
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verify Your Email Address') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->
<main class="login">
	<div class="login__col">
    <form class="login__form" method="POST" action="">
      @csrf
			<div class="login__form-wrapper">
				<h1>Please Enter 4 Digit Code</h1>
				<p class="mb-2">Verify Its you</p>
                <div class="inputs_wrapper">
                    <div class="login__field-group">
                        <input id="name" type="number" class="login__field" name="name" value="" required autocomplete="name" autofocus>
                    </div>
                    <div class="login__field-group">
                        <input id="name" type="number" class="login__field" name="name" value="" required autocomplete="name" autofocus>
                    </div>
                    <div class="login__field-group">
                        <input id="name" type="number" class="login__field" name="name" value="" required autocomplete="name" autofocus>
                    </div>
                    <div class="login__field-group">
                        <input id="name" type="number" class="login__field" name="name" value="" required autocomplete="name" autofocus>
                    </div>
                    <div class="login__field-group">
                        <input id="name" type="number" class="login__field" name="name" value="" required autocomplete="name" autofocus>
                    </div>
                    <div class="login__field-group">
                        <input id="name" type="number" class="login__field" name="name" value="" required autocomplete="name" autofocus>
                    </div>
                </div>
                <div class="resend-wrap">
                    <a href="" class="resend-btn">Resend</a>
                </div>
				<button class="login__btn" type="submit">
					Submit
				</button>
			</div>
		</form>
	</div>
</main>
@endsection
