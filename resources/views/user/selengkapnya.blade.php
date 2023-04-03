<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from iconic-themes.com/html/iqoniqtravel/iqoniq-travel-light/room-detail.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 28 Feb 2023 06:36:29 GMT -->
<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<title></title>
		<!-- Bootstrap -->
        <link href="{{ asset('iqoniq/iconic-themes.com/html/iqoniqtravel/iqoniq-travel-light/css/bootstrap.css') }}" rel="stylesheet">
        <!-- Typography CSS -->
        <link href="{{ asset('iqoniq/iconic-themes.com/html/iqoniqtravel/iqoniq-travel-light/css/typography.css') }}" rel="stylesheet">
        <!-- DL Menu CSS -->
        <link href="{{ asset('iqoniq/iconic-themes.com/html/iqoniqtravel/iqoniq-travel-light/js/dl-menu/component.css') }}" rel="stylesheet">
        <!-- Date And Time Picker CSS -->
        <link rel="stylesheet" href="{{ asset('iqoniq/iconic-themes.com/html/iqoniqtravel/iqoniq-travel-light/css/datetimepicker.css') }}">
        <!-- FontAwesome Icon CSS -->
        <link href="{{ asset('iqoniq/iconic-themes.com/html/iqoniqtravel/iqoniq-travel-light/css/font-awesome.css') }}" rel="stylesheet">
        <!-- Slick Slider CSS -->
        <link href="{{ asset('iqoniq/iconic-themes.com/html/iqoniqtravel/iqoniq-travel-light/css/slick.css') }}" rel="stylesheet">
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
                        <a href="#"><img src="{{ asset('iqoniq/iconic-themes.com/html/iqoniqtravel/iqoniq-travel-light/images/logo.png') }}" width="220" alt=""/></a>
                    </div>
                    <!-- iqoniq Logo End-->
                    <!-- iqoniq Navigation Start-->
                    <div class="mg_nav">
                        <ul class="mg_navigation">
                            <li><a href="/">Beranda</a></li>
                            <li><a href="/aboutus">About Us</a></li>
                            <li>
                                <a href="/destinasi">Destinasi</a>
                            </li>
                            <li>
                                <a href="/contactus">Contact Us</a>
                                <!-- <ul class="children">
                                    <li><a href="contact-us.html">contact-us</a></li>
                                    <li><a href="contact-us2.html">contact-us2</a></li>
                                </ul> -->
                            </li>
                        </ul>
                        <!--DL Menu Start-->
                        <div id="mg-responsive-navigation" class="dl-menuwrapper">
                            <button class="dl-trigger">Open Menu</button>
                            <ul class="dl-menu">
                                <li class="menu-item mg-parent-menu">
                                    <a href="/">Beranda</a>
                                </li>
                                <li><a href="/aboutus">About Us</a></li>
                                <li class="menu-item mg-parent-menu"><a href="/destinasi">Destinasi</a>
                                </li>
                                <li class="menu-item mg-parent-menu"><a href="/contactus">Contact Us</a>
                                    </li>
                            </ul>
                        </div>
                        <!--DL Menu END-->
                        <div class="mg_login">
                            <a class="mg_search_btn" data-toggle="modal" data-target="#search" href="#"><i class="fa fa-search"></i></a>
                            <!-- <a class="mg_login_btn" data-toggle="modal" data-target="#reg-box" href="#"><i class="fa fa-lock"></i><span>Login / Register</span></a> -->
                        </div>
                    </div>
                    <!-- iqoniq Navigation End-->
				</div>
                <!-- iqoniq Top Navigation Outr Wrap End-->
			</header>
            <!-- iqoniq Header End-->
            <!-- Sub Banner Start -->
            <div class="mg_sub_banner">
                <div class="container">
                <h2>{{ $data->nama_kota }}</h2>
                    <ul class="breadcrumb">
                        <li><a href="../top-destinations.html">Destinasi</a></li>
                    </ul>
                </div>
            </div>
            <!-- Sub Banner Start -->
            <div class="iqoniq_contant_wrapper">
                <section>
                    <div class="container">
                        <div class="mg_hotel_destination_tab">
                            <!-- Nav tabs Start -->
                            <ul class="mg_hotel_nav2" role="tablist">
                                <li role="presentation" class="active"><a href="#worldwide" aria-controls="worldwide" role="tab" data-toggle="tab">Informasi</a></li>
                                <li role="presentation"><a href="#usa" aria-controls="usa" role="tab" data-toggle="tab">Daftar Wisata</a></li>
                                <li role="presentation"><a href="#mexico" aria-controls="mexico" role="tab" data-toggle="tab">Lokasi</a></li>
                            </ul>
                            <!-- Nav tabs End -->
                            <!-- Tab panes Start -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="worldwide">
                                    <!-- Destination Tab Wrap Start -->
                                    <div class="row">{!! $data->detail_kota !!}</div>
                                    <!-- Destination Tab Wrap End -->
                                </div>
                                <div role="tabpanel" class="tab-pane" id="usa">
                                    <!-- Destination Tab Wrap Start -->
                                    <div class="mg_hotel_destination_wrapper">
                                        <div class="row">
                                            <!-- Hotel Destination Start -->
                                            <div class="col-md-4 col-sm-6">
                                                <div class="mg_hotel_destination fancy-overlay">
                                                    <figure>
                                                    <img src="https://res.klook.com/image/upload/fl_lossy.progressive,q_85/c_fill,w_1000/v1604304682/blog/ywholpnn3tydffdo1vql.webp" alt=""/>
                                                        <figcaption>
                                                            <a class="view_btn" href="/lembang">Selengkapnya</a>
                                                        </figcaption>
                                                    </figure>
                                                    <div class="text">
                                                        <div class="mg_destination_hd">
                                                            <h5><a href="/lembang">Lembang Park & Zoo</a></h5>
                                                        </div>
                                                        <div class="mg_destination_review">
                                                            <p>Lembang Park & Zoo cocok untuk Anda yang ingin berlibur bersama keluarga dan anak-anak.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Hotel Destination End -->
                                            <!-- Hotel Destination Start -->
                                            <div class="col-md-4 col-sm-6">
                                                <div class="mg_hotel_destination fancy-overlay">
                                                    <figure>
                                                    <img src="https://th.bing.com/th/id/OIP.bu8EqSN2pVRobAmc-LhMOgHaE8?pid=ImgDet&w=1600&h=1067&rs=1" alt=""/>
                                                        <figcaption>
                                                            <a class="view_btn" href="/kawah">Selengkapnya</a>
                                                        </figcaption>
                                                    </figure>
                                                    <div class="text">
                                                        <div class="mg_destination_hd">
                                                            <h5><a href="/kawah">Kawah Putih Ciwidey</a></h5>
                                                        </div>
                                                        <div class="mg_destination_review">
                                                            <p>Wisata Kawah Putih Ciwidey cocok untuk kalian yang suka berswafoto dan cuci mata.</p>
                                                        </div>
                                                        <!-- <div class="mg_destination_review">
                                                            <p>Ayana Gedong Songo cocok untuk Anda yang ingin berakhir pekan dengan banyak spot foto dan instagramable.</p>
                                                        </div> -->
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Hotel Destination End -->
                                            <!-- Hotel Destination Start -->
                                            <div class="col-md-4 col-sm-6">
                                                <div class="mg_hotel_destination fancy-overlay">
                                                    <figure>
                                                        <img src="{{ asset('iqoniq/iconic-themes.com/html/iqoniqtravel/iqoniq-travel-light/extra-images/usa3.jpg') }}" alt=""/>
                                                        <figcaption>
                                                            <a class="view_btn" href="#">Selengkapnya</a>
                                                        </figcaption>
                                                    </figure>
                                                    <div class="text">
                                                        <div class="mg_destination_hd">
                                                            <h5><a href="#">Coming Soon</a></h5>
                                                        </div>
                                                        </div>
                                                </div>
                                            </div>
                                            <!-- Hotel Destination End -->
                                            <!-- Hotel Destination Start -->
                                            <div class="col-md-12">
                                                <!-- Pagination Start-->
                                                <div class="mg_pagination text-center">
                                                    <span class="page-numbers current">1</span>
                                                    <a class="page-numbers" href="#">2</a>
                                                    <a class="page-numbers" href="#">3</a>
                                                    <a class="page-numbers border_none" href="#">...</a>
                                                    <a class="page-numbers" href="#">18</a>
                                                    <a class="page-numbers" href="#">19</a>
                                                    <a class="page-numbers" href="#">20</a>
                                                </div>
                                                <!-- Pagination End-->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Destination Tab Wrap End -->
                                </div>
                                <div role="tabpanel" class="tab-pane" id="mexico">
                                    <!-- Destination Tab Wrap Start -->
                                    <div class="mapouter" style="margin-top: 100px"><div class="gmap_canvas"><iframe width="2048" height="1748" id="gmap_canvas" src="https://maps.google.com/maps?q=bandung&t=&z=10&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://2yu.co">2yu</a><br><style>.mapouter{position:relative;text-align:right;height:1748px;width:2048px;}</style><a href="https://embedgooglemap.2yu.co">html embed google map</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:1748px;width:2048px;}</style></div></div>
                                    <!-- Destination Tab Wrap End -->
                                </div>
                            </div>
                            <!-- Tab panes End -->
                        </div>

                    </div>
                </section>
            </div>
            <!-- iqoniq Footer Start-->
            <footer class="mg_footer1">
                <div class="container">
                    <!-- Widget Text Start-->
                    <div class="col-md-4 col-sm-6">
                        <div class="widget widget_text">
                            <div class="logo">
                                <a href="#"><img src="{{ asset('iqoniq/iconic-themes.com/html/iqoniqtravel/iqoniq-travel-light/images/logo.png') }}" alt="" /></a>
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
                <p>Copyrights 2016-17. All rights reserved by:<a target="_blank" href="#"> TADIKA
                        MESRA</a></p>
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
        <!-- Slick Slider -->
        <script src="{{ asset('iqoniq/iconic-themes.com/html/iqoniqtravel/iqoniq-travel-light/js/slick.min.js') }}"></script>
        <!--Dl Menu Script-->
        <script src="{{ asset('iqoniq/iconic-themes.com/html/iqoniqtravel/iqoniq-travel-light/js/dl-menu/modernizr.custom.js') }}"></script>
        <script src="{{ asset('iqoniq/iconic-themes.com/html/iqoniqtravel/iqoniq-travel-light/js/dl-menu/jquery.dlmenu.js') }}"></script>
        <!-- Accordian -->
        <script src="{{ asset('iqoniq/iconic-themes.com/html/iqoniqtravel/iqoniq-travel-light/js/jquery.accordion.js') }}"></script>
        <!-- Date Time Picker -->
        <script src="{{ asset('iqoniq/iconic-themes.com/html/iqoniqtravel/iqoniq-travel-light/js/jquery.datetimepicker.full.js') }}"></script>
        <script src="{{ asset('iqoniq/iconic-themes.com/html/iqoniqtravel/iqoniq-travel-light/js/scripts.js') }}"></script>
        <!--Custom Script-->
        <script src="{{ asset('iqoniq/iconic-themes.com/html/iqoniqtravel/iqoniq-travel-light/js/custom.js') }}"></script>
	</body>

<!-- Mirrored from iconic-themes.com/html/iqoniqtravel/iqoniq-travel-light/room-detail.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 28 Feb 2023 06:37:17 GMT -->
</html>
