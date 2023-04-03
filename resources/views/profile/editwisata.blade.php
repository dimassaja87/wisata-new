<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg"
    data-sidebar-image="none" data-preloader="disable">


<!-- Mirrored from themesbrand.com/velzon/html/default/pages-profile-settings.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 09 Feb 2023 04:43:51 GMT -->

<head>

    <meta charset="utf-8" />
    <title>Edit Wisata | User</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('admin/themesbrand.com/velzon/html/default/assets/images/favicon.ico') }}">

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

</head>

<body>

    <!-- Begin page -->
    <div id="layout-wrapper">

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

        <div class="page-content" style="padding-top: 30px">
            <div class="container-fluid">

                <div class="position-relative mx-n4 mt-n4">
                    <div class="profile-wid-bg profile-setting-img">
                        <img src="{{ asset('admin/themesbrand.com/velzon/html/default/assets/images/profile-bg.jpg') }}"
                            class="profile-wid-img" alt="">
                        <div class="overlay-content">
                            <div class="text-end p-3">
                                <div class="p-0 ms-auto rounded-circle profile-photo-edit">
                                    <input id="profile-foreground-img-file-input" type="file"
                                        class="profile-foreground-img-file-input">
                                    <label for="profile-foreground-img-file-input"
                                        class="profile-photo-edit btn btn-light">
                                        <i class="ri-image-edit-line align-bottom me-1"></i> Change Cover
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card mt-n5">
                                <div class="card-body p-7">
                                    <div>
                                        <form action="{{ route('updatedetailwisata', $data->id) }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="mb-3">
                                                <label for="customername-field" class="form-label">Nama
                                                    Kota</label>
                                                <select class="form-select form-control"
                                                    aria-label="Default select example" name="id_kota" required>
                                                    <option selected>Pilih nama kota</option>
                                                    @foreach ($kotadetail as $ya)
                                                        <option value="{{ $ya->id }}" <?php if ($data->id_kota == $ya->id) {
                                                            echo 'selected';
                                                        } ?>>
                                                            {{ $ya->nama_kota }}</option>
                                                    @endforeach
                                                </select>
                                                <div class="invalid-feedback">Masukkan nama wisata.</div>
                                            </div>

                                            <div class="mb-3">
                                                <label for="customername-field" class="form-label">Nama
                                                    Wisata</label>
                                                <input type="text" id="customername-field" name="wisata"
                                                    class="form-control" placeholder="Enter Name"
                                                    value="{{ $data->wisata }}" required />
                                                <div class="invalid-feedback">Masukkan nama wisata</div>
                                            </div>

                                            <div class="mb-3">
                                                <label for="date-field" class="form-label">Foto</label><br>
                                                <img class="img mb-3"src="{{ asset('foto/fotowisata/' . $data->foto) }}"
                                                    alt="" style="width: 90px" alt="">
                                                <input type="file" id="date-field" name="foto"
                                                    class="form-control" placeholder="Select Photo" />
                                                <div class="invalid-feedback">Pilih Foto.</div>
                                            </div>

                                            {{-- <div class="mb-3">
                                                <label for="customername-field" class="form-label">Detail_Wisata</label>
                                                <section>
                                                    <textarea id="detail_kota" name="detail_wisata" class="snow-editor form-control" style="height: 300px;"
                                                        placeholder="Masukkan Detail wisata" value="" required>{!! $data->detail_wisata !!}</textarea>
                                                </section>
                                                <div class="invalid-feedback">Masukkan detail wisata.</div>
                                            </div> --}}
                                            <div class="mb-3">
                                                <label for="customername-field" class="form-label">Deskripsi
                                                    Wisata</label>
                                                <textarea id="summernote" name="detail_wisata" class="summernote form-control" height=""
                                                    placeholder="Masukkan detail wisata" value="" required>{!! $data->detail_wisata !!}></textarea>
                                            </div>

                                            <div class="modal-footer">
                                                <div class="hstack gap-2 justify-content-end">
                                                    <a href="/profil/{{ Auth::user()->id}}"><div class="btn btn-light">Back</div></a>
                                                    <button type="submit" class="btn btn-success"
                                                        id="edit-btn">Edit
                                                        Detail Wisata</button>
                                                    <!-- <button type="button" class="btn btn-success" id="edit-btn">Update</button> -->
                                                </div>
                                            </div>
                                        </form>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end card-->

                        <!--end card-->
                    </div>
                    <!--end col-->

                    <!--end col-->
                </div>
            </div>
            <!--end row-->

        </div>
        <!-- container-fluid -->
    </div><!-- End Page-content -->


    </div>
    <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->



    <!--start back-to-top-->
    <button onclick="topFunction()" class="btn btn-danger btn-icon" id="back-to-top">
        <i class="ri-arrow-up-line"></i>
    </button>
    <!--end back-to-top-->

    <!--preloader-->


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

    <!-- profile-setting init js -->
    <script src="{{ asset('admin/themesbrand.com/velzon/html/default/assets/js/pages/profile-setting.init.js') }}">
    </script>

    <!-- App js -->
    <script src="{{ asset('admin/themesbrand.com/velzon/html/default/assets/js/app.js') }}"></script>
</body>


<!-- Mirrored from themesbrand.com/velzon/html/default/pages-profile-settings.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 09 Feb 2023 04:43:52 GMT -->

</html>
