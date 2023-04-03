<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from iconic-themes.com/html/iqoniqtravel/iqoniq-travel-light/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 28 Feb 2023 06:25:53 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags must come first in the head; any other head content must come after these tags -->
    <title> Home</title>
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
    <!-- Svg Icon CSS -->
    <link href="{{ asset('iqoniq/iconic-themes.com/html/iqoniqtravel/iqoniq-travel-light/css/svg.css') }}" rel="stylesheet">
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

    <link rel="stylesheet" href="{{ asset('owl.carousel.min.css') }}">

<link rel="stylesheet" href="{{ asset('bootstrap.min.css') }}">

<link rel="stylesheet" href="{{ asset('style.css') }}">
</head>

<body>
    <!-- iqoniq Wrapper Start-->
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
                                <a href="/">Beranda</a>
                            </li>
                            <li><a href="/aboutus">About us</a></li>
                            <li class="menu-item mg-parent-menu"><a href="/destinasi">destinasi</a>
                            </li>
                            <li class="menu-item mg-parent-menu"><a href="/contactus">contact us</a>
                            </li>
                        </ul>
                    </div>

                    <div class="mg_login">
                        @if (Route::has('login'))
                            @auth
                                <a class="mg_search_btn" data-toggle="modal" data-target="#search" href="#"><i
                                        class="fa fa-search"></i></a>
                                @if (Auth::user()->foto)
                                    <a href="/profil/{{ Auth::user()->id}}">
                                        <img class="user-avatar rounded-circle"
                                            src="{{ asset('storage/' . Auth::user()->foto) }}" alt="User Avatar"
                                            style="width: 35px;height:35px;border-radius:50%">
                                    </a>
                                @else
                                    <img class="user-avatar rounded-circle"
                                        src="{{ asset('storage/' . Auth::user()->foto) }}"alt=""
                                        style="width: 30px">
                                @endif
                                @auth
                                    Selamat datang {{ Auth::user()->name }}
                                @endauth
                                {{-- <a class="mg_login_btn" href="/logout"><i class="fa fa-lock"></i><span>Logout</span></a> --}}
                            @else
                                <a class="mg_login_btn" href="/login"><i class="fa fa-lock"></i><span>Login &
                                        Register</span></a>
                                </a>
                            @endauth
                            @endif

                        </div>
                    </div>
                    <!-- iqoniq Navigation End-->
                </div>
                <!-- iqoniq Top Navigation Outr Wrap End-->
        </header>
        <!-- iqoniq Header End-->
        <!-- iqoniq Mina Banner Start-->
        <div class="mg_hotel_banner">
            <div class="mg_slider1">
                <div>
                    <figure>
                        <img src="{{ asset('iqoniq/iconic-themes.com/html/iqoniqtravel/iqoniq-travel-light/extra-images/banner4.jpg') }}" alt="" />
                    </figure>
                </div>
                <div>
                    <figure>
                        <img src="{{ asset('iqoniq/iconic-themes.com/html/iqoniqtravel/iqoniq-travel-light/extra-images/banner5.jpg') }}" alt="" />
                    </figure>
                </div>
                <div>
                    <figure>
                        <img src="{{ asset('iqoniq/iconic-themes.com/html/iqoniqtravel/iqoniq-travel-light/extra-images/banner7.jpg') }}" alt="" />
                    </figure>
                </div>
            </div>
            <!-- iqoniq Search Wrapper Start-->

            <!-- iqoniq Search Wrapper End-->
        </div>
        <!-- iqoniq Mina Banner End-->
        <!-- iqoniq Contant Wrapper Start-->
        <div class="iqoniq_contant_wrapper">
            <section>
                <div class="container">
                    <!-- iqoniq Heading Start -->
                    <div class="mg_hotel_hd1">
                        <h6></h6>
                        <h4>Cari dan Nikmati</h4>
                    </div>
                    <!-- iqoniq Heading End -->
                    <!-- Destination Start -->
                    <div class="mg_hotel_destination_tab">
                        <!-- Nav tabs Start -->
                        <ul class="mg_hotel_nav2" role="tablist">
                        @foreach ($data->take(6) as $KotaDetail)
                                <li role="presentation"
                                    class="{{ strtolower($KotaDetail->nama_kota) == strtolower(request()->KotaDetail) ? 'active' : '' }}">
                                    <a href="  $KotaDetail->nama_kota  }}/{{ $KotaDetail->id }} " aria-controls="worldwide"
                                        role="tab" data-toggle="tab">{{ $KotaDetail->nama_kota }}</a></li>
                            @endforeach
                        </ul>
                        <!-- Nav tabs End -->
                        <!-- Tab panes Start -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="worldwide">
                                <!-- Destination Tab Wrap Start -->
                                <div class="mg_hotel_destination_wrapper">
                                    <div class="row">
                                        <!-- Hotel Destination Start -->
                                        @foreach ($data2->take(6) as $wisata)
                                        <div class="col-md-4 col-sm-6">
                                            <div class="mg_hotel_destination fancy-overlay">
                                                <figure>
                                                    <img src="{{ asset('fotosampul/'.$wisata->sampul_wisata) }}" alt="" />
                                                    <figcaption>
                                                        <a class="view_btn" href="/lembang">selengkapnya</a>
                                                    </figcaption>
                                                </figure>
                                                <div class="text">
                                                    <div class="mg_destination_hd">
                                                        <h5><a href="">{{$wisata->judul_wisata}}</a></h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach



                                        <!-- Hotel Destination End -->
                                    </div>
                                </div>
                                <!-- Destination Tab Wrap End -->
                            </div>

                        </div>
                        <!-- Tab panes End -->
                    </div>
                    <!-- Destination End -->
                </div>
            </section>
            <!-- Why Chooses us Section Start -->
            <section class="why_chooseus">
                <div class="container-fluid">
                    <!-- iqoniq Heading Start -->
                    <div class="mg_hotel_hd1 white">
                        <h6>Dipilih oleh Jutaan Wisatawan</h6>
                        <h4>Mengapa memilih iqoniq Travel</h4>
                    </div>
                    <!-- iqoniq Heading End -->
                    <div class="row">
                        <!-- Chooseus Slider Start -->
                        <div class="chooseus_slider">
                            <!-- Chooseus Thumb Start -->
                            @foreach ($data2 as $wisata)
                            <div class="col-md-4">
                                <div class="mg_chooseus fancy-overlay">
                                    <figure>
                                        <img src="{{ asset('fotosampul/'.$wisata->sampul_wisata) }}" alt="">
                                    </figure>
                                    <div class="text">
                                        <h5><a href="#">{{$wisata->judul_wisata}}</a></h5>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            <!-- Chooseus Thumb End -->
                        </div>
                        <!-- Chooseus Slider Ens -->
                    </div>
                </div>
            </section>
            <!-- Why Chooses us Section End -->
            <!-- Destination Section Start -->
            <section class="mg_destination_bg">
                <div class="container">
                    <!-- iqoniq Heading Start -->
                    <div class="mg_hotel_hd1">
                        <h6>Perjalanan Terbaik, Dipilih oleh Jutaan Wisatawan</h6>
                        <h4>Pemenang Penghargaan Travellers' Choice</h4>
                    </div>
                    <!-- iqoniq Heading End -->
                    <div class="row">
                        <!-- Hotel Destination Start -->
                        @foreach ($data->take(6) as $KotaDetail)
                            <div class="col-md-4 col-sm-4">
                                <div class="mg_hotel_destination fancy-overlay">
                                    <figure>
                                        <img src="{{ asset('foto/fotoaja/'. $KotaDetail->foto_aja) }}" alt="" />
                                        <figcaption>
                                            <a class="view_btn" href="/selengkapnya/{{$KotaDetail->id}}">{{ $KotaDetail->nama_kota }}</a>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                        @endforeach

                        <!-- Hotel Destination End -->
                        <!-- Hotel Destination Start -->

                        <!-- Hotel Destination End -->
                    </div>
                </div>
            </section>
            <!-- Destination Section End -->
            <!-- Services Section Start -->
            <!-- Services Section End -->
            <!-- Call to Action Section Start-->
            <section class="mg_travelplan">
                <div class="container">
                    <!-- iqoniq Heading Start -->
                    <div class="mg_hotel_hd1 white">
                        <h6>Buat liburan berdasarkan Selera Anda</h6>
                        <h4>Mulailah membuat Rencana Perjalanan Anda</h4>
                    </div>
                    <!-- iqoniq Heading End -->
                    <!-- Caption Start -->
                    <div class="mg_plan_caption">
                        <p>ducate, aid, kriteria katalisator John Lennon. Kebutuhan keanekaragaman yang menyelamatkan jiwa meningkatkan pemberdayaan hak karbon di seluruh dunia. Mengejar aspirasi ini memanfaatkan, aksesibilitas UNICEF, mengurangi perlindungan kota kolaboratif kematian anak. ekonomi informal non-partisan; evolusi transformatif perubahan iklim manfaat lokal.</p>
                    </div>
                    <!-- Caption End -->
                </div>
            </section>
            <!-- Call to Action Section End-->
            <!-- Masonry Gallery Section Start-->
            <section class="gray-bg">
                <div class="container-fluid">
                    <!-- iqoniq Heading Start -->
                    <div class="mg_hotel_hd1">
                        <h6></h6>
                        <h4>Galeri foto</h4>
                    </div>
                    <!-- iqoniq Heading End -->
                    <!-- Masonry Grid Start -->
                    <div class="masonry-2 grid">
                        <div class="row masonry masonryFlyIn">
                            <!-- Masonry Item Start -->
                            <!-- <div class="masonry-item">
                                <h4 class="text-link item-height100 green">
                                    <a href="#"><span>Nature & Adventure</span></a>
                                </h4>
                            </div> -->
                            <!-- Masonry Item End -->
                            <!-- Masonry Item Start -->
                            @foreach ($data2->take(15) as $Galery)
                            <div class="masonry-item fancy-overlay">
                                <figure class="thumb-link"><img src="{{ asset('foto/fotogalery/'.$Galery->fotogalery) }}" alt=""></figure>
                            </div>
                            @endforeach

                            <!-- Masonry Item End -->
                            <!-- Masonry Item Start -->

                            <!-- Masonry Item End -->
                        </div>
                    </div>
                    <!-- Masonry Grid Start -->
                </div>
            </section>
            <!-- Masonry Gallery Section End-->
            <!-- Blog Section Start-->
            <!-- Blog Section End-->
            <!-- Pricing Table Section Start-->
            <!-- <section class="pricing_wrap">
                <div class="container">
                    <!-- iqoniq Heading Start --
                    <div class="mg_hotel_hd1">
                        <h6>Sekarang</h6>
                        <h4>Informasi transpor t </h4>
                    </div>

                    <div class="row">
                        <div class="col-md-4 col-sm-6">
                            <!-- iqoniq Pricing Table Start --
                            <div class="mg_pricing fancy-overlay">
                                <span class="fa fa-plane"></span>
                                <div class="thumb">
                                    <img src="{{ asset('iqoniq/iconic-themes.com/html/iqoniqtravel/iqoniq-travel-light/extra-images/price1.jpg') }}" alt="">
                                    <div class="caption">
                                        <div class="clear"></div>
                                        <h6>Bandara Indonesia</h6>
                                        <b>22 Bandara</b>
                                    </div>
                                </div>
                                <div class="text">
                                    <h6><a href="#">penerbangan</a></h6>
                                    <p>Penerbangan di Indonesia merupakan sarana penting untuk menghubungkan ribuan pulau di Nusantara. </p>
                                </div>
                            </div>
                            <!-- iqoniq Pricing Table End --
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <!-- iqoniq Pricing Table Start --
                            <div class="mg_pricing fancy-overlay">
                                <span class="fa fa-train"></span>
                                <div class="thumb">
                                    <img src="{{ asset('iqoniq/iconic-themes.com/html/iqoniqtravel/iqoniq-travel-light/extra-images/price2.jpg') }}" alt="">
                                    <div class="caption">
                                        <div class="clear"></div>
                                        <h6>Stasiun Indonesia</h6>
                                        <b>143 stasiun</b>
                                    </div>
                                </div>
                                <div class="text">
                                    <h6><a href="#">Stasiun </a></h6>
                                    <p>sStasiun kereta api adalah fasilitas operasi kereta api atau tempat kereta api berhenti secara teratur untuk menaikturunkan penumpang atau membongkar-muat barang.</p>
                                </div>
                            </div>
                            <!-- iqoniq Pricing Table End --
                        </div>
                        <div class="col-md-4 hidden-sm">
                            <!-- iqoniq Pricing Table Start --
                            <div class="mg_pricing fancy-overlay">
                                <span class="fa fa-ship"></span>
                                <div class="thumb">
                                    <img src="{{ asset('iqoniq/iconic-themes.com/html/iqoniqtravel/iqoniq-travel-light/extra-images/price3.jpg') }}" alt="">
                                    <div class="caption">
                                        <div class="clear"></div>
                                        <h6>Pelabuhan Indonesia</h6>
                                        <b>28 Pelabuhan</b>
                                    </div>
                                </div>
                                <div class="text">
                                    <h6><a href="#">Pelabuhan </a></h6>
                                    <p>Sebagai negara maritim, keberadaan infrastruktur pelabuhan di Tanah Air berperan penting sebagai pintu masuk orang dan logistik. </p>
                                </div>
                            </div>
                            <!-- iqoniq Pricing Table End --
                        </div>
                    </div>
                </div>
            </section> -->
            <!-- Pricing Table Section End-->
            <!-- Bottom Bar Start-->
            <!-- Bottom Bar End-->
        </div>
        <!-- iqoniq Contant Wrapper End-->
        <!-- iqoniq Footer Start-->
        <footer class="mg_footer1">
            <div class="container">
                <!-- Widget Text Start-->
                <div class="col-md-4 col-sm-6">
                    <div class="widget widget_text">
                        <div class="logo">
                            <a href="#"><img src="{{ asset('iqoniq/iconic-themes.com/html/iqoniqtravel/iqoniq-travel-light/images/cariwisata.png') }}" alt="" /></a>
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
                            <li><a href="#">Beranda</a></li>
                            <li><a href="#">Contact us</a></li>
                            <li><a href="#">Destinasi</a></li>
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
                        <form>
                            <div class="mg_input_1">
                                <input type="text" placeholder="Your E-mail">
                            </div>
                            <div class="mg_input_1">
                                <textarea placeholder="Your Message"></textarea>
                            </div>
                            <p><input type="button" value="Kirim pesan"></p>
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
        <div class="modal fade" id="search" tabindex="-1" role="dialog">
                <div class="modal-dialog login1 login5 login5-1">
                    <div class="modal-tab">
                        <form action="{{ route('welcome') }}" method="get">
                        <div class="mg_input_1">
                            <input type="search" class="form-control" name="keyword" placeholder="Search keyword" >
                            <label class="search_icon"><input type="submit"></label>
                        </div>
                    </div>
                </div>
            </div>
        <!-- register Modal end-->
    </div>
    <!-- iqoniq Wrapper End-->
    <!-- jQuery -->
    <script src="{{ asset('iqoniq/iconic-themes.com/html/iqoniqtravel/iqoniq-travel-light/js/jquery.js') }}"></script>
    <!-- bootstrap -->
    <script src="{{ asset('iqoniq/iconic-themes.com/html/iqoniqtravel/iqoniq-travel-light/js/bootstrap.js') }}"></script>
    <!-- Slick Slider -->
    <script src="{{ asset('iqoniq/iconic-themes.com/html/iqoniqtravel/iqoniq-travel-light/js/slick.min.js') }}"></script>
    <!-- Masonry -->
    <script src="{{ asset('iqoniq/iconic-themes.com/html/iqoniqtravel/iqoniq-travel-light/js/masonry.min.js') }}"></script>
    <!-- Date Time Picker -->
    <script src="{{ asset('iqoniq/iconic-themes.com/html/iqoniqtravel/iqoniq-travel-light/js/scripts.js') }}"></script>
    <script src="{{ asset('iqoniq/iconic-themes.com/html/iqoniqtravel/iqoniq-travel-light/js/jquery.datetimepicker.full.js') }}"></script>
    <!--Dl Menu Script-->
    <script src="{{ asset('iqoniq/iconic-themes.com/html/iqoniqtravel/iqoniq-travel-light/js/dl-menu/modernizr.custom.js') }}"></script>
    <script src="{{ asset('iqoniq/iconic-themes.com/html/iqoniqtravel/iqoniq-travel-light/js/dl-menu/jquery.dlmenu.js') }}"></script>
    <!--Custom Script-->
    <script src="{{ asset('iqoniq/iconic-themes.com/html/iqoniqtravel/iqoniq-travel-light/js/custom.js') }}"></script>
</body>

<!-- Mirrored from iconic-themes.com/html/iqoniqtravel/iqoniq-travel-light/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 28 Feb 2023 06:29:18 GMT -->

</html>
