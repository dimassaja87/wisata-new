<!doctype html>
<html class="no-js" lang="">


<!-- Mirrored from affixtheme.com/html/xmee/demo/register-5.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 16 Feb 2023 02:15:34 GMT -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>User | Register</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Favicon -->
	<link rel="shortcut icon" type="image/x-icon" href="{{ asset('loginuser/affixtheme.com/html/xmee/demo/img/favicon.png') }}">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="{{ asset('loginuser/affixtheme.com/html/xmee/demo/css/bootstrap.min.css') }}">
	<!-- Fontawesome CSS -->
	<link rel="stylesheet" href="{{ asset('loginuser/affixtheme.com/html/xmee/demo/css/fontawesome-all.min.css') }}">
	<!-- Flaticon CSS -->
	<link rel="stylesheet" href="{{ asset('loginuser/affixtheme.com/html/xmee/demo/font/flaticon.css') }}">
	<!-- Google Web Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&amp;display=swap" rel="stylesheet">
	<!-- Custom CSS -->
	<link rel="stylesheet" href="{{ asset('loginuser/affixtheme.com/html/xmee/demo/style.css') }}">
</head>

<body>
	<!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <div id="preloader" class="preloader">
        <div class='inner'>
            <div class='line1'></div>
            <div class='line2'></div>
            <div class='line3'></div>
        </div>
    </div>
	<div id="wrapper" class="wrapper">
		<div class="fxt-template-animation fxt-template-layout5">
			<div class="fxt-bg-img fxt-none-767" data-bg-image="{{ asset('loginuser/affixtheme.com/html/xmee/demo/img/figure/bg5-l.jpg') }}">
				<div class="fxt-intro">
					<div class="sub-title">Welcome To</div>
					<h1>CariWisata</h1>
					<p>Silahkan Registrasi jika Anda belum mempunyai akun, jika sudah silahkan lewati halaman ini</p>
				</div>
			</div>
			<div class="fxt-bg-color">
				<div class="fxt-header">
					<a href="/login" class="fxt-logo"><img src="{{ asset('loginuser/affixtheme.com/html/xmee/demo/img/cariwisata.png') }}" width="250" alt="Logo"></a>
					<div class="fxt-page-switcher">
						<a href="/login" class="switcher-text switcher-text1">Login</a>
						<a href="/register" class="switcher-text switcher-text2 active">Register</a>
					</div>
				</div>
				<div class="fxt-form">
					<form action="/registeruser" method="POST">
                        @csrf
						@if ($errors->any())
						@foreach($errors->all() as $err)
                        <p class="alert alert-danger">{{ $err }}</p>
                        @endforeach
						@endif
						<div class="form-group fxt-transformY-50 fxt-transition-delay-1">
							<input type="text" class="form-control" name="name" placeholder="Full Name" required="required">
							<i class="flaticon-user"></i>
						</div>
						<div class="form-group fxt-transformY-50 fxt-transition-delay-2">
							<input type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Your Email" required="required">
							<i class="flaticon-envelope"></i>
						</div>
						<div class="form-group fxt-transformY-50 fxt-transition-delay-3">
							<input type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required="required">
							<i class="flaticon-padlock"></i>
						</div>
						<div class="form-group fxt-transformY-50 fxt-transition-delay-3">
							<input type="password" class="form-control" name="password_confirmation" placeholder="Confirmasi Password" required="required">
							<i class="flaticon-padlock"></i>
						</div>
						<div class="form-group fxt-transformY-50 fxt-transition-delay-4">
							<div class="fxt-content-between">
								<button type="submit" class="fxt-btn-fill" id="submitBtn" disabled>Register</button>

							</div>
						</div>
							<div class="checkbox">
									<input  type="checkbox" id="termsCheck">
									<label for="termsCheck">Saya setuju dengan <b>Syarat dan Ketentuan</b></label>
								</div>
					</form>
				</div>
				{{-- <div class="fxt-footer">
					<ul class="fxt-socials">
						<li class="fxt-facebook fxt-transformY-50 fxt-transition-delay-6"><a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
						<li class="fxt-twitter fxt-transformY-50 fxt-transition-delay-7"><a href="#" title="twitter"><i class="fab fa-twitter"></i></a></li>
						<li class="fxt-google fxt-transformY-50 fxt-transition-delay-8"><a href="#" title="google"><i class="fab fa-google-plus-g"></i></a></li>
						<li class="fxt-linkedin fxt-transformY-50 fxt-transition-delay-9"><a href="#" title="linkedin"><i class="fab fa-linkedin-in"></i></a></li>
						<li class="fxt-pinterest fxt-transformY-50 fxt-transition-delay-9"><a href="#" title="pinterest"><i class="fab fa-pinterest-p"></i></a></li>
					</ul>
				</div> --}}
			</div>
		</div>
	</div>
	<!-- jquery-->
	<script src="{{ asset('loginuser/affixtheme.com/html/xmee/demo/js/jquery-3.5.0.min.js') }}"></script>
	<!-- Bootstrap js -->
	<script src="{{ asset('loginuser/affixtheme.com/html/xmee/demo/js/bootstrap.min.js') }}"></script>
	<!-- Imagesloaded js -->
	<script src="{{ asset('loginuser/affixtheme.com/html/xmee/demo/js/imagesloaded.pkgd.min.js') }}"></script>
	<!-- Validator js -->
	<script src="{{ asset('loginuser/affixtheme.com/html/xmee/demo/js/validator.min.js') }}"></script>
	<!-- Custom Js -->
	<script src="{{ asset('loginuser/affixtheme.com/html/xmee/demo/js/main.js') }}"></script>
<script>
    const termsCheck = document.querySelector('#termsCheck');
    const submitBtn = document.querySelector('#submitBtn');

    // Memeriksa checkbox setiap kali diperbarui
    termsCheck.addEventListener('change', function() {
        if (this.checked) {
            // Checkbox dicentang, aktifkan tombol submit
            submitBtn.removeAttribute('disabled');
        } else {
            // Checkbox tidak dicentang, nonaktifkan tombol submit
            submitBtn.setAttribute('disabled', true);
        }
    });

</script>

</body>

<!-- Mirrored from affixtheme.com/html/xmee/demo/register-5.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 16 Feb 2023 02:15:34 GMT -->
</html>
