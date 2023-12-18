<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="ltr" data-nav-layout="vertical" data-theme-mode="light" data-header-styles="light" data-menu-styles="light" loader="enabled">

<head>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- TITLE -->
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('build/assets/images/brand/favicon.ico') }}"
        type="image/x-icon">

    <!-- ICONS CSS -->
    <link href="{{ asset('build/assets/iconfonts/icons.css') }}" rel="stylesheet">

    <!-- Main Theme Js -->
    <script src="{{ asset('build/assets/main.js') }}"></script>

    <!-- BOOTSTRAP CSS -->
    <link id="style" href="{{ asset('build/assets/libs/bootstrap/css/bootstrap.min.css') }}"
        rel="stylesheet">

    <!-- Choices JS -->
    <script src="build/assets/libs/choices.js/public/assets/scripts/choices.min.js">
    </script>

    <!-- Simplebar Css -->
    <link href="build/assets/libs/simplebar/simplebar.min.css" rel="stylesheet">

    <!-- Color Picker Css -->
    <link rel="stylesheet" href="build/assets/libs/flatpickr/flatpickr.min.css">
    <link rel="stylesheet"
        href="build/assets/libs/@simonwep/pickr/themes/nano.min.css">

    <!-- Choices Css -->
    <link rel="stylesheet"
        href="build/assets/libs/choices.js/public/assets/styles/choices.min.css">
    <!-- APP CSS & APP SCSS -->
    <link rel="preload" as="style" href="build/assets/app-e29e56ca.css" />
    <link rel="stylesheet" href="build/assets/app-e29e56ca.css" />
    <!-- Sweetalerts CSS -->
    <link rel="stylesheet" href="build/assets/libs/sweetalert2/sweetalert2.min.css">

</head>

<body class="app sidebar-mini" id="app">

    <!-- GLOBAL-LOADER -->
    <div id="loader">
        <img src="build/assets/images/loader.svg" class="loader-img"
            alt="Loader">
    </div>
    <!-- /GLOBAL-LOADER -->

    <!-- PAGE -->
    <div class="page">
        <div class="page-main">

            @include('template.header')

            <!--Main-Sidebar-->
            <aside class="app-sidebar sticky" id="sidebar">

                <!-- Start::main-sidebar-header -->
                <div class="main-sidebar-header">
                    <a href="{{ route('home') }}" class="header-logo">
                        <img src="build/assets/images/brand/desktop-logo.png"
                            alt="logo" class="desktop-logo">
                        <img src="build/assets/images/brand/toggle-logo.png"
                            alt="logo" class="toggle-logo">
                        <img src="build/assets/images/brand/desktop-dark.png"
                            alt="logo" class="desktop-dark">
                        <img src="build/assets/images/brand/toggle-dark.png"
                            alt="logo" class="toggle-dark">
                    </a>
                </div>
                <!-- End::main-sidebar-header -->

                <!-- Start::main-sidebar -->
                <div class="main-sidebar" id="sidebar-scroll">

                    @include('template.navigation')
                   

                </div>
                <!-- End::main-sidebar -->

            </aside>
            <!-- End Main-Sidebar-->

            <!--app-content open-->
            <div class="main-content app-content mt-0">


                <!-- PAGE-HEADER -->
                <div class="page-header d-flex align-items-center justify-content-between border-bottom mb-4">
                    <h1 class="page-title">{{ $title }}</h1>
                    <div>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Extension</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Empty</li>
                        </ol>
                    </div>
                </div>
                <!-- PAGE-HEADER END -->

                <!-- CONTAINER -->
                <div class="main-container container-fluid">

                    <!-- ROW-1 OPEN -->
                    <div class="row ">
                        <div class="col-md-12">
                        </div>
                    </div>
                    <!-- ROW-1 CLOSED -->

                </div>
                <!-- CONTAINER CLOSED -->


            </div>
            <!-- END APP-CONTENT -->

        </div>
        <!--app-content closed-->

        <!-- Footer opened -->
        <footer class="footer">
            <div class="container">
                <div class="row align-items-center flex-row-reverse">
                    <div class="col-md-12 col-sm-12 text-center">
                        Copyright © <span id="year"></span> <a href="javascript:void(0);">Vexel</a>. Designed
                        with <span class="fa fa-heart text-danger"></span> by <a href="javascript:void(0);"> Spruko
                        </a> All
                        rights reserved.
                    </div>
                </div>
            </div>
        </footer> <!-- End Footer -->



    </div>
    <!-- END PAGE-->

    <!-- SCRIPTS -->
    <!-- Scroll To Top -->
    <div class="scrollToTop">
        <span class="arrow"><i class="fa fa-angle-up fs-20"></i></span>
    </div>
    <!-- Scroll To Top -->

    <div id="responsive-overlay"></div>
    <script src="{{ mix('js/app.js') }}" type="text/javascript"></script>

    <!-- Popper JS -->
    <script src="build/assets/libs/@popperjs/core/umd/popper.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="build/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Node Waves JS-->
    <script src="build/assets/libs/node-waves/waves.min.js"></script>

    <!-- Simplebar JS -->
    <script src="build/assets/libs/simplebar/simplebar.min.js"></script>
    <link rel="modulepreload" href="build/assets/simplebar-635bad04.js" />
    <script type="module" src="build/assets/simplebar-635bad04.js"></script>
    <!-- Color Picker JS -->
    <script src="build/assets/libs/@simonwep/pickr/pickr.es5.min.js"></script>


    <!-- Sticky JS -->
    <script src="build/assets/sticky.js"></script>

    <!-- APP JS-->
    <link rel="modulepreload" href="build/assets/app-6df099bd.js" />
    <link rel="modulepreload" href="build/assets/defaultmenu-7feba3a7.js" />
    <script type="module" src="build/assets/app-6df099bd.js"></script>

    <!-- Sweetalerts JS -->
    <script src="build/assets/libs/sweetalert2/sweetalert2.min.js"></script>

    @if (session(APP_NOTIF))
        @if (session(APP_NOTIF)[0] == 1)
            <script>
                Swal.fire({
                    icon: "success",
                    title: "Berhasil!",
                    text: "{{ session(APP_NOTIF)[1] }}"
                })
            </script>
        @else
            <script>
                Swal.fire({
                    icon: "error",
                    title: "Oops...",
                    text: "{{ session(APP_NOTIF)[1] }}"
                })
            </script>
        @endif
    @endif
    <!-- END SCRIPTS -->

</body>

</html>
