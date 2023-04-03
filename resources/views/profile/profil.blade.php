<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg"
    data-sidebar-image="none" data-preloader="enable">


<!-- Mirrored from themesbrand.com/velzon/html/default/pages-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 09 Feb 2023 04:43:45 GMT -->

<head>

    <meta charset="utf-8" />
    <title>Profile | User</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('admin/themesbrand.com/velzon/html/default/assets/images/favicon.ico') }}">

    <!-- swiper css -->
    <link rel="stylesheet"
        href="{{ asset('admin/themesbrand.com/velzon/html/default/assets/libs/swiper/swiper-bundle.min.css') }}">

    <!-- Layout config Js -->
    <script src="{{ asset('admin/themesbrand.com/velzon/html/default/assets/js/layout.js') }}"></script>
    <!-- Bootstrap Css -->
    <link href="{{ asset('admin/themesbrand.com/velzon/html/default/assets/css/bootstrap.min.css') }}" rel="stylesheet"
        type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('admin/themesbrand.com/velzon/html/default/assets/css/icons.min.css') }}" rel="stylesheet"
        type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('admin/themesbrand.com/velzon/html/default/assets/css/app.min.css') }}" rel="stylesheet"
        type="text/css" />
    <!-- custom Css-->
    <link href="{{ asset('admin/themesbrand.com/velzon/html/default/assets/css/custom.min.css') }}" rel="stylesheet"
        type="text/css" />

    <!-- include summernote css/js -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
</head>

<body>

    <!-- Begin page -->
    <div id="layout-wrapper">

        <header id="page-topbar">
            <div class="layout-width">

            </div>
        </header>

        <!-- removeNotificationModal -->
        <!-- /.modal -->
        <!-- ========== App Menu ========== -->

        <!-- Left Sidebar End -->
        <!-- Vertical Overlay-->
        <div class="vertical-overlay"></div>

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <!-- <div class="main-content"> -->

        <div class="page-content">
            <div class="container-fluid">
                <div class="profile-foreground position-relative mx-n4 mt-n4">
                    <div class="profile-wid-bg">
                        <img src="{{ asset('admin/themesbrand.com/velzon/html/default/assets/images/profile-bg.jpg') }}"
                            alt="" class="profile-wid-img" />
                    </div>
                </div>
                <div class="pt-4 mb-4 mb-lg-3 pb-lg-4">
                    <div class="row g-4">
                        <div class="col-auto">

                            <div class="avatar-lg p-0 rounded-circle profile-photo-edit">

                                <img src="{{ asset('storage/' . Auth::user()->foto) }}"
                                    class="rounded-circle avatar-lg img-thumbnail user-profile-image"
                                    alt="user-profile-image" />
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col">
                            <div class="p-2">

                                <h3 class="text-white mb-1">
                                    {{ Auth::user()->name }}
                                </h3>
                                <p class="text-white-75">
                                    {{ Auth::user()->email }}
                                </p>
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-12 col-lg-auto order-last order-lg-0">
                            <div class="row text text-white-50 text-center">
                                <div class="col-lg-6 col-4">
                                    <!-- <div class="p-2">
                                            <h4 class="text-white mb-1">24.3K</h4>
                                            <p class="fs-14 mb-0">Followers</p>
                                        </div> -->
                                </div>
                            </div>

                        </div>
                    </div>
                    <!--end col-->

                </div>
                <!--end row-->
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div>
                        <div class="d-flex">
                            <!-- Nav tabs -->
                            <ul class="nav nav-pills animation-nav profile-nav gap-2 gap-lg-3 flex-grow-1"
                                role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link fs-14" data-bs-toggle="tab" href="#projects" role="tab">
                                        <i class="ri-price-tag-line d-inline-block d-md-none"></i> <span
                                            class="d-none d-md-inline-block">Wisata</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link fs-14" data-bs-toggle="tab" href="#activities" role="tab">
                                        <i class="ri-list-unordered d-inline-block d-md-none"></i> <span
                                            class="d-none d-md-inline-block">Tambah Wisata</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/" class="nav-link" data-key="t-echarts">Home</a>

                                </li>
                                {{-- <li class="nav-item">
                                    <a class="nav-link fs-14" data-bs-toggle="tab" href="#documents" role="tab">
                                        <i class="ri-folder-4-line d-inline-block d-md-none"></i> <span
                                            class="d-none d-md-inline-block">Komentar</span>
                                    </a>
                                </li> --}}
                            </ul>
                            <div class="flex-shrink-0">
                                <a href="/editprofil/{id}" class="btn btn-success"><i
                                        class="ri-edit-box-line align-bottom"></i> Edit Profile</a>
                            </div>
                            &nbsp;
                            &nbsp;
                            <div class="flex-shrink-0">
                                <a href="/logoutuser" class="btn btn-danger"><i
                                        class="ri-edit-box-line align-bottom"></i> Logout </a>
                            </div>\
                        </div>
                        <!-- Tab panes -->
                        <div class="tab-content pt-4 text-muted">

                            <div class="tab-pane fade" id="grafik" role="tabpanel">

                            </div>
                            <!--end col-->
                            <div class="tab-pane fade" id="activities" role="tabpanel">
                                <section>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5 class="card-title mb-0">Tambah Detail Wisata</h5>
                                                    </div>
                                                    @if ($errors->any())
                                                        <div class="alert alert-danger">
                                                            <ul>
                                                                @foreach ($errors->all() as $error)
                                                                    <li>{{ $error }}</li>
                                                                @endforeach
                                                            </ul>
                                                        </div>
                                                    @endif
                                                    <div class="card-body">
                                                        <form action="/insertdetailwisata" method="POST"
                                                            enctype="multipart/form-data">
                                                            @csrf
                                                            <div>
                                                                <input type="hidden" name="id_user"
                                                                    value="{{ auth()->user()->id }}">

                                                            </div>
                                                            <div>
                                                                <input type="hidden" name="nama"
                                                                    value="{{ auth()->user()->name }}">

                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="customername-field"
                                                                    class="form-label">Nama
                                                                    Kota</label>
                                                                <select class="form-select form-control"
                                                                    aria-label="Default select example" name="id_kota"
                                                                    required>
                                                                    <option selected>Tidak ada yang dipilih</option>
                                                                    @foreach ($kotadetail as $hm)
                                                                        <option value="{{ $hm->id }}">
                                                                            {{ $hm->nama_kota }}</option>
                                                                    @endforeach
                                                                </select>
                                                                <div class="invalid-feedback">Masukkan nama kota.</div>
                                                            </div>

                                                            <div class="mb-3">
                                                                <label for="date-field" class="form-label">Nama
                                                                    Wisata</label>
                                                                <input type="text" id="date-field" name="wisata"
                                                                    class="form-control"
                                                                    placeholder="Masukkan nama wisata" required />
                                                                <div class="invalid-feedback">Nama wisata</div>
                                                            </div>

                                                            <div class="mb-3">
                                                                <label for="date-field"
                                                                    class="form-label">Foto</label>
                                                                <input type="file" id="date-field" name="foto"
                                                                    class="form-control" accept="image/*"
                                                                    placeholder="Select Photo" required />
                                                                <div class="invalid-feedback">Pilih Foto.</div>
                                                            </div>

                                                            <div class="mb-3">
                                                                <label for="customername-field"
                                                                    class="form-label">Deskripsi
                                                                    Wisata</label>
                                                                <textarea id="deskripsi" name="detail_wisata" class="deskripsi form-control" height=""
                                                                    placeholder="Masukkan detail wisata" required></textarea>
                                                            </div>
                                                            <div class="checkbox">
                                                                <input type="checkbox" id="termsCheck">
                                                                <label for="termsCheck">Saya setuju dengan <a
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#exampleModalScrollable"
                                                                        class="modal-title"
                                                                        id="exampleModalScrollableTitle">ketentuan</label>
                                                                dan syarat tertentu</p>
                                                            </div>

                                                            <div class="modal-footer">
                                                                <div class="hstack gap-2 justify-content-end">
                                                                    <a href="/detailwisata" type="button"
                                                                        class="btn btn-light">Close</a>
                                                                    <button type="submit" class="btn btn-success"
                                                                        id="submitBtn" disabled>Tambah
                                                                        Detail Wisata</button>
                                                                    <!-- <button type="button" class="btn btn-success" id="edit-btn">Update</button> -->
                                                                </div>
                                                            </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </form>
                                    <!-- Scrollable modal -->
                                    {{-- <button type="button" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#exampleModalScrollable">Scrollable Modal</button> --}}

                                    <div class="modal fade" id="exampleModalScrollable" tabindex="-1"
                                        role="dialog" aria-labelledby="exampleModalScrollableTitle"
                                        aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-scrollable">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalScrollableTitle">Syarat
                                                        dan Ketentuan Cari Wisata</h5>
                                                </div>
                                                <div class="modal-body">
                                                    <p class="card-text">Cari Wisata dengan ini menetapkan Syarat dan
                                                        Ketentuan dalam pengaturan pemakaian situs www.CariWisata.com.
                                                        Yang mendaftar atau menggunakan situs www.CariWisata.com, maka
                                                        pengguna dianggap telah membaca dan menyetujui semua isi dalam
                                                        Syarat dan Ketentuan.
                                                        Apabila ada yang kurang jelas, dapat menghubungi kami di halaman
                                                        kontak.</p>
                                                    <h6 class="fs-15">Syarat</h6>
                                                    <div class="d-flex">
                                                        <div class="flex-shrink-0">
                                                            <i class="ri-checkbox-circle-fill text-success"></i>
                                                        </div>
                                                        <div class="flex-grow-1 ms-2">
                                                            <p class="text-muted mb-0">Akses
                                                                untuk dapat menggunakan dan mengakses KulinerKu,
                                                                pengguna diharuskan untuk berumur lebih dari 18 tahun.
                                                                Apabila pengguna berumur kurang dari 18 tahun, maka
                                                                tidak diijinkan untuk menggunakan dan mengakses
                                                                KulinerKu.</p>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex mt-2">
                                                        <div class="flex-shrink-0">
                                                            <i class="ri-checkbox-circle-fill text-success"></i>
                                                        </div>
                                                        <div class="flex-grow-1 ms-2 ">
                                                            <p class="text-muted mb-0">Dilarang untuk menulis dan/atau
                                                                menjual ulang
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex mt-2">
                                                        <div class="flex-shrink-0">
                                                            <i class="ri-checkbox-circle-fill text-success"></i>
                                                        </div>
                                                        <div class="flex-grow-1 ms-2 ">
                                                            <p class="text-muted mb-0">Dilarang untuk melakukan
                                                                penulisan ulang review-review yang di-post oleh Pengguna
                                                                CariWisata selain Pengguna itu sendiri.

                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex mt-2">
                                                        <div class="flex-shrink-0">
                                                            <i class="ri-checkbox-circle-fill text-success"></i>
                                                        </div>
                                                        <div class="flex-grow-1 ms-2 ">
                                                            <p class="text-muted mb-0">Pengguna diwajibkan untuk
                                                                melakukan registrasi untuk melakukan post review di
                                                                CariWisata.</p>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex mt-2">
                                                        <div class="flex-shrink-0">
                                                            <i class="ri-checkbox-circle-fill text-success"></i>
                                                        </div>
                                                        <div class="flex-grow-1 ms-2 ">
                                                            <p class="text-muted mb-0">Apabila Pengguna melakukan
                                                                registrasi di CariWisata, Pengguna secara otomatis
                                                                memberikan kuasa dan ijin kepada Perusahaan untuk dapat
                                                                melakukan penulisan ulang, pendistribusian, sub-lisensi
                                                                hal-hal yang Pengguna post di CariWisata, termasuk di
                                                                dalamnya adalah review.</p>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex mt-2">
                                                        <div class="flex-shrink-0">
                                                            <i class="ri-checkbox-circle-fill text-success"></i>
                                                        </div>
                                                        <div class="flex-grow-1 ms-2 ">
                                                            <p class="text-muted mb-0">Pengguna menjamin kepada
                                                                Perusahaan bahwa mereka memiliki hak-hak atas review
                                                                yang mereka post. Pengguna juga menjamin bahwa review
                                                                yang mereka post tidak melanggar hukum-hukum yang
                                                                berlaku, hak-hak orang lain ataupun hak cipta pihak
                                                                ketiga.</p>
                                                        </div>
                                                    </div>

                                                    <div class="d-flex mt-2">
                                                        <div class="flex-shrink-0">
                                                            <i class="ri-checkbox-circle-fill text-success"></i>
                                                        </div>
                                                        <div class="flex-grow-1 ms-2 ">
                                                            <p class="text-muted mb-0">Perusahaan atau pihak ketiga
                                                                yang menerima sub-lisensi dari Perusahaan, dapat
                                                                menggunakan review yang di-post oleh Pengguna CariWisata
                                                                dengan menggunakan isi dari konten-konten tersebut.
                                                                Dalam hal ini, perlu diketahui bahwa ada kemungkinan
                                                                terjadi sedikit perubahan-perubahan terhadap review
                                                                untuk kenyamanan. Untuk kegiatan-kegiatan seperti ini,
                                                                Perusahaan menjamin akan menampilkan akun Pengguna yang
                                                                mem-post review tersebut.</p>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex mt-2">
                                                        <div class="flex-shrink-0">
                                                            <i class="ri-checkbox-circle-fill text-success"></i>
                                                        </div>
                                                        <div class="flex-grow-1 ms-2 ">
                                                            <p class="text-muted mb-0">Kondisi untuk menggunakan
                                                                Berpergian Dengan menggunakan CariWisata, Pengguna
                                                                setuju dengan Syarat dan Ketentuan yang ditentukan.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-light"
                                                        data-bs-dismiss="modal">Close</button>
                                                </div>
                                            </div><!-- /.modal-content -->
                                        </div><!-- /.modal-dialog -->
                                    </div><!-- /.modal -->
                            </div>

                        </div>

                        <div class="d-none code-view">
                            <pre class="language-markup">
<code>&lt;!-- Scrollable Modal --&gt;
                                            </section>
                                            <!--end card-->
                                        </div>
                                        <!--end tab-pane-->
                                        <div class="tab-pane fade" id="projects" role="tabpanel">
                                            <div class="card">

                                                <div class="card-body col-12">
                                                    <div class="row">
                                                    <h5 class="card-title mb-3">Daftar Wisata</h5>
                                                    @foreach ($data as $yolaa)
<div class="col-xxl-3 col-6">
                                                        <div class="card profile-project-card shadow-none profile-project-warning">
                                                            <div class="card-body p-4">
                                                            <div class="d-flex">
                                                                    <div class="flex-grow-1 text-muted overflow-hidden">
                                                                    <h5 class="fs-14 text-truncate"><a href="#" class="text-dark">{{ $yolaa->wisata }}</a></h5>
                                                                        <p class="text-muted text-truncate mb-0">Last Update : <span class="fw-semibold text-dark">{{ $yolaa->updated_at }}</span></p>
                                                                        <p class="text-muted text-truncate mb-0">Kota Wisata : <span class="fw-semibold text-dark">{{ $yolaa->kota_details->nama_kota }}</span></p>
                                                                        <p class="text-muted text-truncate mb-0">Deskripsi Wisata : <span class="fw-semibold text-dark">{{ $yolaa->detail_wisata }}</span></p>
                                                                        <p class="text-muted text-truncate mb-0">Foto Wisata : <span class="fw-semibold text-dark"> <img src="{{ asset('foto/detailwisata/' . $yolaa->foto) }}"
                                                                            alt="" width="150"></span></p>
                                                                        </div>

                                                                        <div class="d-flex gap-2">
                                                                            <div class="edit">
                                                                                <a href="/tampilwisata/{{ $yolaa->id }}"
                                                                                    class="btn btn-sm btn-success edit-item-btn">Edit</a>
                                                                            </div>
                                                                            <div class="remove">
                                                                                <a href="/deletedetailwisata1/{{ $yolaa->id }}"
                                                                                    data-id="{{ $yolaa->id }}"
                                                                                    data-nama="{{ $yolaa->detail_wisata }}"
                                                                                    class="btn btn-sm btn-danger deletedetailwisata">Remove</a>
                                                                            </div>
                                                                        </div>
                                                                    {{-- <div class="flex-shrink-0 ms-2">
                                                                        <div class="badge badge-soft-warning fs-10">
                                                                            @if ($yolaa->status == 0)
                                                                                <span class="badge bg-warning text-dark">Menunggu Pesrsetujuan</span>
                                                                            @elseif ($yolaa->status == 2)
                                                                                <span class="badge bg-danger text-dark">Ditolak</span>
                                                                            @else
                                                                                <span class="badge bg-succes text-dark">Disetujui</span>
                                                                            @endif
                                                                        </div>
                                                                    </div> --}}
                                                            </div>
                                                            </div>
                                                        </div>
                                                    </div>
@endforeach
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!--end tab-pane-->
                        </div>
                        <!--end tab-content-->
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->

        </div><!-- container-fluid -->
    </div><!-- End Page-content -->

    <!-- <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <script>
                                document.write(new Date().getFullYear())
                            </script> © Velzon.
                        </div>
                        <div class="col-sm-6">
                            <div class="text-sm-end d-none d-sm-block">
                                Design & Develop by Themesbrand
                            </div>
                        </div>
                    </div>
                </div>
            </footer> -->
    </div><!-- end main content-->

    </div>
    <!-- END layout-wrapper -->



    <!--start back-to-top-->
    <!-- <button onclick="topFunction()" class="btn btn-danger btn-icon" id="back-to-top">
        <i class="ri-arrow-up-line"></i>
    </button> -->
    <!--end back-to-top-->

    <!--preloader-->


    <!-- Theme Settings -->


    <!-- JAVASCRIPT -->
    <script
        src="{{ asset('admin/themesbrand.com/velzon/html/default/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}">
    </script>
    <script src="{{ asset('admin/themesbrand.com/velzon/html/default/assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('admin/themesbrand.com/velzon/html/default/assets/libs/node-waves/waves.min.js') }}"></script>
    <script src="{{ asset('admin/themesbrand.com/velzon/html/default/assets/libs/feather-icons/feather.min.js') }}">
    </script>
    <script src="{{ asset('admin/themesbrand.com/velzon/html/default/assets/js/pages/plugins/lord-icon-2.1.0.js') }}">
    </script>
    <script src="{{ asset('admin/themesbrand.com/velzon/html/default/assets/js/plugins.js') }}"></script>

    <!-- swiper js -->
    <script src="{{ asset('admin/themesbrand.com/velzon/html/default/assets/libs/swiper/swiper-bundle.min.js') }}">
    </script>

    <!-- profile init js -->
    <script src="{{ asset('admin/themesbrand.com/velzon/html/default/assets/js/pages/profile.init.js') }}"></script>

    <!-- App js -->
    <script src="{{ asset('admin/themesbrand.com/velzon/html/default/assets/js/app.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#deskripsi').summernote();
        });
    </script>
    <script src="https://code.highcharts.com/highcharts.js"></script>
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


<!-- Mirrored from themesbrand.com/velzon/html/default/pages-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 09 Feb 2023 04:43:46 GMT -->

</html>
