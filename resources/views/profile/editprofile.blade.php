<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg"
    data-sidebar-image="none" data-preloader="disable">


<!-- Mirrored from themesbrand.com/velzon/html/default/pages-profile-settings.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 09 Feb 2023 04:43:51 GMT -->

<head>

    <meta charset="utf-8" />
    <title>Profile Settings | User</title>
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

                <div class="row justify-content-center">
                    <div class="col-sm-6">
                        <div class="card mt-xl-n5">
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <form method="post" action="/updateprofil/{{ Auth::user()->id }}"
                                        enctype="multipart/form-data">
                                        @method('put')
                                        @csrf
                                        <div class="profile-user position-relative d-inline-block mx-auto  mb-4">
                                            <img src="{{ asset('foto/' . Auth::user()->foto) }}"
                                                class="rounded-circle avatar-xl img-thumbnail user-profile-image"
                                                alt="user-profile-image">
                                            <div class="avatar-xs p-0 rounded-circle profile-photo-edit">
                                                <input id="profile-img-file-input" type="file"
                                                    class="profile-img-file-input" name="foto"
                                                    value="{{ Auth::user()->foto }}">
                                                <label for="profile-img-file-input"
                                                    class="profile-photo-edit avatar-xs">
                                                    <span class="avatar-title rounded-circle bg-light text-body">
                                                        <i class="ri-camera-fill"></i>
                                                    </span>
                                                </label>
                                            </div>
                                        </div>
                                        <center>
                                        <h5 class="fs-16 mb-3 w-50">
                                        <input type="text" name="name" value="{{Auth::user()->name }}" class="form-control" id="name">
                                        </h5>
                                        <p class="text-muted mb-3 w-50">
                                        <input type="text" name="email" value="{{Auth::user()->email }}" class="form-control" id="email">
                                        </p>
                                        <p class="text-muted mb-3 w-50">
                                        <input type="file" name="foto" value="{{Auth::user()->foto }}" class="form-control" id="foto">
                                        </p>
                                        </center>
                                        <div class="flex-shrink-0">
                                            <button type="submit" class="btn btn-primary">Edit Profil</button>


                                            <a type="submit" class="btn btn-danger" href="/editpassword">Edit
                                                Password</a>
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
