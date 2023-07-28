@extends('layouts.app')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/css/iziToast.min.css">
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
    <form class="login__form" action="{{route('verify.email.code')}}" method="POST">
      @csrf
			<div class="login__form-wrapper">
				<h1>Please Enter 4 Digit Code</h1>
				<p class="mb-2">Verify Its you</p>
                <div class="inputs_wrapper">
                    <div class="login__field-group">
                        <input id="name" type="number" class="login__field" name="otp[]" value="" required autocomplete="name" autofocus>
                    </div>
                    <div class="login__field-group">
                        <input id="name" type="number" class="login__field" name="otp[]" value="" required autocomplete="name" autofocus>
                    </div>
                    <div class="login__field-group">
                        <input id="name" type="number" class="login__field" name="otp[]" value="" required autocomplete="name" autofocus>
                    </div>
                    <div class="login__field-group">
                        <input id="name" type="number" class="login__field" name="otp[]" value="" required autocomplete="name" autofocus>
                    </div>
                </div>
                <div class="resend-wrap">
                    <a href="{{route('resend.code')}}" class="resend-btn">Resend</a>
                </div>
				<button class="login__btn" type="submit">
					Submit
				</button>
			</div>
		</form>
	</div>
</main>
<script src="{{ asset('assets/libs/jquery/jquery.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js"></script>
@if(session('success'))
    <script>
        iziToast.success({
            title: 'Success!',
            message: "{{ session('success') }}",
            position: 'topRight',
            timeout: 3000, // Automatically close after 3 seconds
            progressBarColor: 'rgba(40, 167, 69, 0.7)', // Green progress bar
            backgroundColor: 'rgba(40, 167, 69, 0.9)', // Green background color
            icon: 'icon-class', // Add your custom icon class
            transitionIn: 'fadeInLeft', // Animation for showing notification
            transitionOut: 'fadeOut', // Animation for hiding notification
        });
    </script>
@endif

@if(session('error'))
    <script>
        iziToast.error({
            title: 'Error!',
            message: "{{ session('error') }}",
            position: 'topRight',
            timeout: 5000, // Automatically close after 5 seconds
            progressBarColor: 'rgba(220, 53, 69, 0.7)', // Red progress bar
            backgroundColor: 'rgba(220, 53, 69, 0.9)', // Red background color
            icon: 'icon-class', // Add your custom icon class
            transitionIn: 'fadeInRight', // Animation for showing notification
            transitionOut: 'fadeOut', // Animation for hiding notification
        });
    </script>
@endif

@endsection
