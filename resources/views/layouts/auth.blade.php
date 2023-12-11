<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

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
    <link rel="icon" href="{{ asset('build/assets/images/brand/favicon.ico') }}" type="image/x-icon">

    <!-- ICONS CSS -->
    <link href="{{ asset('build/assets/iconfonts/icons.css') }}" rel="stylesheet">

    <!-- BOOTSTRAP CSS -->
    <link id="style" href="{{ asset('build/assets/libs/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- APP CSS & APP SCSS -->
    <link rel="stylesheet" href="{{ asset('build/assets/app-e29e56ca.css') }}" />

    <!-- Sweetalerts CSS -->
    <link rel="stylesheet" href="https://laravelui.spruko.com/vexel/build/assets/libs/sweetalert2/sweetalert2.min.css">
</head>

<body class="app sidebar-mini ltr login-img">

    <!-- BACKGROUND-IMAGE -->
    <div class="">
        <!-- PAGE -->
        <div class="page">

            <!-- CONTAINER OPEN -->
            <div class="">
                <div class="text-center">
                    <a href="index.html"><img src="build/assets/images/brand/desktop-dark.png" class="header-brand-img"
                            alt=""></a>
                </div>
            </div>
            @yield('content')
            <!-- CONTAINER CLOSED -->


        </div>
        <!-- End PAGE -->
    </div>

    <!-- Bootstrap JS -->
    <script src="{{ asset('build/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Sweetalerts JS -->
    <script src="https://laravelui.spruko.com/vexel/build/assets/libs/sweetalert2/sweetalert2.min.js"></script>

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

</body>

</html>
