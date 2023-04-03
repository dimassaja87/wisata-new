<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from iconic-themes.com/html/iqoniqtravel/iqoniq-travel-light/contact-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 28 Feb 2023 06:26:37 GMT -->
<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<title>Contact us - Cari wisata</title>
		<!-- Bootstrap -->
        <link href="{{ asset('iqoniq/iconic-themes.com/html/iqoniqtravel/iqoniq-travel-light/css/bootstrap.css') }}" rel="stylesheet">
        <!-- Typography CSS -->
        <link href="{{ asset('iqoniq/iconic-themes.com/html/iqoniqtravel/iqoniq-travel-light/css/typography.css') }}" rel="stylesheet">
        <!-- DL Menu CSS -->
        <link href="{{ asset('iqoniq/iconic-themes.com/html/iqoniqtravel/iqoniq-travel-light/js/dl-menu/component.css') }}" rel="stylesheet">
        <!-- FontAwesome Icon CSS -->
        <link href="{{ asset('iqoniq/iconic-themes.com/html/iqoniqtravel/iqoniq-travel-light/css/font-awesome.css') }}" rel="stylesheet">
        <!-- Widget CSS -->
        <link href="{{ asset('iqoniq/iconic-themes.com/html/iqoniqtravel/iqoniq-travel-light/css/widget.css') }}" rel="stylesheet">
        <!-- Short Code CSS -->
        <link href="{{ asset('iqoniq/iconic-themes.com/html/iqoniqtravel/iqoniq-travel-light/css/shortcode.css') }}" rel="stylesheet">
        <!-- Custom Style CSS -->
        <link href="{{ asset('iqoniq/iconic-themes.com/html/iqoniqtravel/iqoniq-travel-light/style.css') }}" rel="stylesheet">
        <!-- Color CSS -->
        <link href="{{ asset('iqoniq/iconic-themes.com/html/iqoniqtravel/iqoniq-travel-light/css/color.css') }}" rel="stylesheet">
        <!-- Responsive CSS -->
        <link href="{{ asset('iqoniq/iconic-themes.com/html/iqoniqtravel/iqoniq-travel-light/css/responsive.css') }}" rel="stylesheet">
	</head>
	<body>
		<div class="iqoniq_wrapper">
            <!-- iqoniq Header Start-->
			<header class="mg_header_1">
                <!-- iqoniq Top Navigation Outr Wrap Start-->
				<div class="mg_nav_wrapper">
                    <!-- iqoniq Logo Start-->
					<div class="mg_logo">
                        <a href="#"><img src="{{ asset('iqoniq/iconic-themes.com/html/iqoniqtravel/iqoniq-travel-light/images/logo.png') }}" width="220px" alt="" /></a>
                    </div>
                    <!-- iqoniq Logo End-->
                    <!-- iqoniq Navigation Start-->
                    <div class="mg_nav">
                    <ul class="mg_navigation">
                        <li><a href="/">Beranda</a></li>
                        <li><a href="/aboutus">about us</a></li>
                        <li>
                            <a href="/destinasi">Destinasi</a>
                        </li>
                        <li>
                            <a href="/contactus">contact us</a>
                        </li>
                    </ul>
                    <!--DL Menu Start-->
                    <div id="mg-responsive-navigation" class="dl-menuwrapper">
                        <button class="dl-trigger">Open Menu</button>
                        <ul class="dl-menu">
                            <li class="menu-item mg-parent-menu">
                                <a href="/welcome">Beranda</a>
                            </li>
                            <li><a href="/aboutus">About us</a></li>
                            <li class="menu-item mg-parent-menu"><a href="/destinasi">destinasi</a>
                            </li>
                            <li class="menu-item mg-parent-menu"><a href="/hubungi">contact us</a>
                            </li>
                        </ul>
                    </div>
                    <!--DL Menu END-->
                    <div class="mg_login">
                        <a class="mg_search_btn" data-toggle="modal" data-target="#search" href="#"><i class="fa fa-search"></i></a>
                    </div>
                </div>
                    <!-- iqoniq Navigation End-->
				</div>
                <!-- iqoniq Top Navigation Outr Wrap End-->
			</header>
            <!-- iqoniq Header End-->
            <!-- Sub Banner Start-->
            <div class="mg_sub_banner">
                <div class="container">
                    <h2>Hubungi Kami</h2>
                    <ul class="breadcrumb">
                        <li><a href="#">Beranda</a></li>
                        <li class="active"><span>Hubungi Kami</span></li>
                    </ul>
                </div>
            </div>
            <!-- Sub Banner End-->
            <!-- Main Contant Wrap Start-->
            <div class="iqoniq_contant_wrapper">
                <section>
                    <div class="container">
                        <div class="row">
                            <!-- Contact Form Start-->
                            <div class="col-md-8">
                                <!-- iqoniq Contact Form Start-->
                                <div class="mg_contact_form">
                                    <h5 class="blog_main_title">Formulir Pengisian</h5>
                                    <form method="post" action="/insertkontak">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-12">
                                                <!-- Input Start-->
                                                <div class="mg_input_1">
                                                    <input type="hidden" name="nama" value="{{Auth::user()->name }}" class="form-control" id="nama" placeholder="Nama Kamu " >
                                                </div>
                                                <!-- Input End-->
                                            </div>
                                            <div class="col-md-12">
                                                <!-- Input Start-->
                                                <div class="mg_input_1">
                                                    <input type="hidden" name="email" value="{{Auth::user()->email }}" class="form-control" id="email" placeholder="Email " >
                                                </div>
                                                <!-- Input End-->
                                            </div>
                                            <div class="col-md-12">
                                                <!-- Input Start-->
                                                <div class="mg_input_1">
                                                    <textarea name="pesan" id="pesan" placeholder="Pesan Kamu"></textarea>
                                                </div>
                                                <!-- Input End-->
                                                <input class="mg_btn1" type="submit" value="Kirim">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- iqoniq Contact Form Start-->
                            </div>
                            <!-- Contact Form End-->
                            <!-- Sidebar Start-->
                            <div class="col-md-4">
                                <div class="contact-sidebar">
                                    <!-- Widget Text Start-->
                                    <div class="widget widget-text">
                                        <h5 class="blog_main_title">ALAMAT DAN INFORMASI</h5>
                                        <div class="border-bottom">
                                            <div class="text">
                                                <p>Website ini kami ciptakan untuk mempermudah mencari informasi dari sebuah wisata</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Widget Text End-->
                                    <!-- Widget Contact Start-->
                                    <div class="widget widget-contact">
                                        <h5 class="blog_main_title">Detail Kontak</h5>
                                        <div class="border-bottom">
                                            <div class="text">
                                                <div class="mg_contact"><i class="fa fa-map-marker"></i><span>Perum Permata Regency 1 Blok 10/28, Perum Gpa, Ngijo, Kec. Karang Ploso, Kabupaten Malang, Jawa Timur</span></div>
                                                <div class="mg_contact"><i class="fa fa-phone"></i><span>0851234567</span></div>
                                                <div class="mg_contact"><i class="fa fa-envelope-o"></i><a href="mailto:contact@iqoniqtravel.com">cariwisata@gmail.com</a></div>
                                                <div class="mg_contact"><i class="fa fa-clock-o"></i><span>Senin-Jum'at 8:00-16:00</span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Widget Contact End-->
                                    <!-- Widget Social Start-->
                                    <div class="widget widget-social">
                                        <h5 class="blog_main_title">Sosial Media</h5>
                                        <ul class="mg_social">
                                           <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                           <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                           <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        </ul>
                                    </div>
                                    <!-- Widget Social End-->
                                </div>
                            </div>
                            <!-- Side Bar End-->
                        </div>
                    </div>
                </section>
                <!-- iqoniq Map End-->
                <div class="mg-map">
                    <div id="map-canvas"></div>
                </div>
                <!-- iqoniq Map End-->
            </div>
            <!-- Main Contant Wrap End-->
            <!-- iqoniq Footer Start-->
            <footer class="mg_footer1">
            <div class="container">
                <!-- Widget Text Start-->
                <div class="col-md-4 col-sm-6">
                    <div class="widget widget_text">
                        <div class="logo">
                            <a href="#"><img
                                    src="{{ asset('iqoniq/iconic-themes.com/html/iqoniqtravel/iqoniq-travel-light/images/cariwisata.png') }}"
                                    alt="" /></a>
                        </div>
                        <div class="text">
                            <p>
                                Cariwisata adalah website penyedia informasi tentang pariwisata yang ada di Indonesia.
                            </p>
                            <div class="mg_contact"><i class="fa fa-phone"></i><span>+62 678 837 817</span></div>
                            <div class="mg_contact"><i class="fa fa-envelope-o"></i><span>cariwisata@gmail.com</span>
                            </div>
                        </div>
                        <ul class="mg_social">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
                <!-- Widget Text End-->
                <!-- Widget Archives Start-->
                <div class="col-md-4 col-sm-6">
                    <div class="widget widget_archives">
                        <h6 class="widget-title">Our Service</h6>
                        <ul>
                            <li><a href="/">Beranda</a></li>
                            <li><a href="/contactus">Contact us</a></li>
                            <li><a href="/destinasi">Destinasi</a></li>
                        </ul>
                    </div>
                </div>
                <!-- Widget Archives End-->
                <!-- Widget Flicker Start-->
                <!-- Widget Flicker End-->
                <!-- Widget Search Start-->
                <div class="col-md-4 col-sm-6">
                    <div class="widget widget_search">
                        <h6 class="widget-title">keep in touch</h6>
                        <form method="post" action="/insertkontak">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <!-- Input Start-->
                                    <div class="mg_input_1">
                                        <input type="hidden" name="nama" value="{{Auth::user()->name }}" class="form-control" id="nama" placeholder="Nama Kamu " >
                                    </div>
                                    <!-- Input End-->
                                </div>
                                <div class="col-md-12">
                                    <!-- Input Start-->
                                    <div class="mg_input_1">
                                        <input type="hidden" name="email" value="{{Auth::user()->email }}" class="form-control" id="email" placeholder="Email " >
                                    </div>
                                    <!-- Input End-->
                                </div>
                                <div class="col-md-12">
                                    <!-- Input Start-->
                                    <div class="mg_input_1">
                                        <textarea name="pesan" id="pesan" placeholder="Pesan Kamu"></textarea>
                                    </div>
                                    <!-- Input End-->
                                    <input class="mg_btn1" type="submit" value="Kirim">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Widget Search End-->
            </div>
        </footer>
            <!-- iqoniq Footer End-->
            <!-- iqoniq Copyright Start-->
            <div class="mg_copyright">
                <p>Copyrights 2016-17. All rights reserved by:<a target="_blank" href="http://bilalmghl.com/"> IQONIQ THEMES</a></p>
            </div>
            <!-- iqoniq Copyright End-->
            <!-- register Modal -->
            <div class="modal fade" id="reg-box" tabindex="-1" role="dialog">
                <div class="modal-dialog login1 login5 login5-1">
                    <div class="modal-tab">
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active"><a href="#sign-In1" aria-controls="sign-In1" role="tab" data-toggle="tab">Sign In</a></li>
                            <li role="presentation"><a href="#sign-up2" aria-controls="sign-up2" role="tab" data-toggle="tab">Sign Up</a></li>
                        </ul>
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="sign-In1">
                                <div class="modal-content">
                                    <div class="user-box">
                                        <!--FORM FIELD START-->
                                        <form>
                                            <div class="mg_input_1">
                                                <input type="text" placeholder="E-mail">
                                                <i class="fa fa-envelope-o"></i>
                                            </div>
                                            <div class="mg_input_1">
                                                <input type="text" placeholder="Password">
                                                <i class="fa fa-lock"></i>
                                            </div>
                                            <div class="dialog-footer">
                                                <div class="input-container">
                                                    <label>
                                                        <span class="radio">
                                                            <input type="checkbox" name="foo" value="1" checked>
                                                            <span class="radio-value" aria-hidden="true"></span>
                                                        </span>
                                                        <span>Remember me</span>
                                                    </label>
                                                    <a href="#">Forgot Password<i class="fa fa-question-circle"></i></a>
                                                </div>
                                                <button class="mg_btn1">Login</button>
                                            </div>
                                        </form>
                                        <!--FORM FIELD END-->
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="sign-up2">
                                <div class="modal-content">
                                    <div class="user-box">
                                       <!--FORM FIELD START-->
                                        <form>
                                            <div class="mg_input_1">
                                                <input type="text" placeholder="E-mail">
                                                <i class="fa fa-envelope-o"></i>
                                            </div>
                                            <div class="mg_input_1">
                                                <input type="text" placeholder="Password">
                                                <i class="fa fa-lock"></i>
                                            </div>
                                            <div class="dialog-footer">
                                                <div class="input-container">
                                                    <label>
                                                        <span class="radio">
                                                            <input type="checkbox" name="foo" value="1" checked>
                                                            <span class="radio-value" aria-hidden="true"></span>
                                                        </span>
                                                        <span>Remember me</span>
                                                    </label>
                                                </div>
                                                <button class="mg_btn1">Register</button>
                                            </div>
                                        </form>
                                        <!--FORM FIELD END-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- register Modal end-->
            <!-- register Modal -->
            <div class="modal fade" id="search" tabindex="-1" role="dialog">
                <div class="modal-dialog login1 login5 login5-1">
                    <div class="modal-tab">
                        <div class="mg_input_1">
                            <input placeholder="Search keyword" type="text">
                            <label class="search_icon"><input type="submit"></label>
                        </div>
                    </div>
                </div>
            </div>
            <!-- register Modal end-->
		</div>
        <!-- jQuery -->
        <script src="{{ asset('iqoniq/iconic-themes.com/html/iqoniqtravel/iqoniq-travel-light/js/jquery.js') }}"></script>
        <!-- bootstrap -->
        <script src="{{ asset('iqoniq/iconic-themes.com/html/iqoniqtravel/iqoniq-travel-light/js/bootstrap.js') }}"></script>
        <!--Dl Menu Script-->
        <script src="{{ asset('iqoniq/iconic-themes.com/html/iqoniqtravel/iqoniq-travel-light/js/dl-menu/modernizr.custom.js') }}"></script>
        <script src="{{ asset('iqoniq/iconic-themes.com/html/iqoniqtravel/iqoniq-travel-light/js/dl-menu/jquery.dlmenu.js') }}"></script>
        <!--Map Api Script-->
        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>
        <!--Custom Script-->
        <script src="{{ asset('iqoniq/iconic-themes.com/html/iqoniqtravel/iqoniq-travel-light/js/custom.js') }}"></script>
	</body>

<!-- Mirrored from iconic-themes.com/html/iqoniqtravel/iqoniq-travel-light/contact-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 28 Feb 2023 06:26:37 GMT -->
</html>
