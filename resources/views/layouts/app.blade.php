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

<body class="app sidebar-mini">

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

                    <!-- Start::nav -->
                    <nav class="main-menu-container nav nav-pills flex-column sub-open">
                        <div class="slide-left" id="slide-left">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24"
                                viewBox="0 0 24 24">
                                <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"></path>
                            </svg>
                        </div>
                        <ul class="main-menu">
                            <!-- Start::slide__category -->
                            <li class="slide__category"><span class="category-name">Main</span></li>
                            <!-- End::slide__category -->

                            <!-- Start::slide -->
                            <li class="slide">
                                <a href="https://laravelui.spruko.com/vexel/index" class="side-menu__item">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" height="24px"
                                        viewBox="0 0 24 24" width="24px" fill="#000000">
                                        <path d="M0 0h24v24H0V0z" fill="none" />
                                        <path
                                            d="M12 5.69l5 4.5V18h-2v-6H9v6H7v-7.81l5-4.5M12 3L2 12h3v8h6v-6h2v6h6v-8h3L12 3z" />
                                    </svg>
                                    <span class="side-menu__label">Dashboard</span>
                                </a>
                            </li>
                            <!-- End::slide -->

                            <!-- Start::slide__category -->
                            <li class="slide__category"><span class="category-name">PAGES</span></li>
                            <!-- End::slide__category -->

                            <!-- Start::slide -->
                            <li class="slide has-sub">
                                <a href="javascript:void(0);" class="side-menu__item">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                        class="side-menu__icon">
                                        <path d="M0 0h24v24H0V0z" fill="none"></path>
                                        <path
                                            d="M11.99 18.54l-7.37-5.73L3 14.07l9 7 9-7-1.63-1.27zM12 16l7.36-5.73L21 9l-9-7-9 7 1.63 1.27L12 16zm0-11.47L17.74 9 12 13.47 6.26 9 12 4.53z">
                                        </path>
                                    </svg>
                                    <span class="side-menu__label">Pages</span>
                                    <i class="fe fe-chevron-right side-menu__angle"></i>
                                </a>
                                <ul class="slide-menu child1">
                                    <li class="slide side-menu__label1">
                                        <a href="javascript:void(0);">Pages</a>
                                    </li>
                                    <li class="slide">
                                        <a href="https://laravelui.spruko.com/vexel/profile"
                                            class="side-menu__item">Profile</a>
                                    </li>
                                    <li class="slide">
                                        <a href="https://laravelui.spruko.com/vexel/notify-list"
                                            class="side-menu__item">Notification List</a>
                                    </li>
                                    <li class="slide">
                                        <a href="https://laravelui.spruko.com/vexel/email-inbox"
                                            class="side-menu__item">Mail-Inbox</a>
                                    </li>
                                    <li class="slide">
                                        <a href="https://laravelui.spruko.com/vexel/gallery"
                                            class="side-menu__item">Gallery</a>
                                    </li>
                                    <li class="slide has-sub">
                                        <a href="javascript:void(0);" class="side-menu__item">Extension
                                            <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                        <ul class="slide-menu child2">
                                            <li class="slide">
                                                <a href="https://laravelui.spruko.com/vexel/about"
                                                    class="side-menu__item">About Company</a>
                                            </li>
                                            <li class="slide">
                                                <a href="https://laravelui.spruko.com/vexel/faq"
                                                    class="side-menu__item">FAQS</a>
                                            </li>
                                            <li class="slide">
                                                <a href="https://laravelui.spruko.com/vexel/terms"
                                                    class="side-menu__item">Terms</a>
                                            </li>
                                            <li class="slide">
                                                <a href="https://laravelui.spruko.com/vexel/invoice"
                                                    class="side-menu__item">Invoice</a>
                                            </li>
                                            <li class="slide">
                                                <a href="https://laravelui.spruko.com/vexel/pricing"
                                                    class="side-menu__item">Pricing Tables</a>
                                            </li>
                                            <li class="slide">
                                                <a href="https://laravelui.spruko.com/vexel/settings"
                                                    class="side-menu__item">Settings</a>
                                            </li>
                                            <li class="slide">
                                                <a href="https://laravelui.spruko.com/vexel/blog"
                                                    class="side-menu__item">Blog</a>
                                            </li>
                                            <li class="slide">
                                                <a href="https://laravelui.spruko.com/vexel/blog-details"
                                                    class="side-menu__item">Blog Details</a>
                                            </li>
                                            <li class="slide">
                                                <a href="https://laravelui.spruko.com/vexel/blog-post"
                                                    class="side-menu__item">Blog Post</a>
                                            </li>
                                            <li class="slide">
                                                <a href="https://laravelui.spruko.com/vexel/emptypage"
                                                    class="side-menu__item">Empty Page</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="slide has-sub">
                                        <a href="javascript:void(0);" class="side-menu__item">File Manager
                                            <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                        <ul class="slide-menu child2">
                                            <li class="slide">
                                                <a href="https://laravelui.spruko.com/vexel/file-manager"
                                                    class="side-menu__item">File Manager</a>
                                            </li>
                                            <li class="slide">
                                                <a href="https://laravelui.spruko.com/vexel/filemanager-list"
                                                    class="side-menu__item">File Manager
                                                    List</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="slide has-sub">
                                        <a href="javascript:void(0);" class="side-menu__item">Ecommerce
                                            <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                        <ul class="slide-menu child2">
                                            <li class="slide">
                                                <a href="https://laravelui.spruko.com/vexel/shop"
                                                    class="side-menu__item">Shop</a>
                                            </li>
                                            <li class="slide">
                                                <a href="https://laravelui.spruko.com/vexel/shop-description"
                                                    class="side-menu__item">Product
                                                    Details</a>
                                            </li>
                                            <li class="slide">
                                                <a href="https://laravelui.spruko.com/vexel/cart"
                                                    class="side-menu__item">Shopping Cart</a>
                                            </li>
                                            <li class="slide">
                                                <a href="https://laravelui.spruko.com/vexel/add-product"
                                                    class="side-menu__item">Add Product</a>
                                            </li>
                                            <li class="slide">
                                                <a href="https://laravelui.spruko.com/vexel/wishlist"
                                                    class="side-menu__item">Wishlist</a>
                                            </li>
                                            <li class="slide">
                                                <a href="https://laravelui.spruko.com/vexel/checkout"
                                                    class="side-menu__item">Checkout</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <!-- End::slide -->

                            <!-- Start::slide -->
                            <li class="slide has-sub">
                                <a href="javascript:void(0);" class="side-menu__item">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24"
                                        width="24px" class="side-menu__icon" fill="#000000">
                                        <path
                                            d="M11 15h2v2h-2v-2zm0-8h2v6h-2V7zm.99-5C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8z">
                                        </path>
                                    </svg>
                                    <span class="side-menu__label">Authentication</span>
                                    <i class="fe fe-chevron-right side-menu__angle"></i>
                                </a>
                                <ul class="slide-menu child1">
                                    <li class="slide side-menu__label1">
                                        <a href="javascript:void(0);">Authentication</a>
                                    </li>
                                    <li class="slide">
                                        <a href="https://laravelui.spruko.com/vexel/login"
                                            class="side-menu__item">LogIn</a>
                                    </li>
                                    <li class="slide">
                                        <a href="https://laravelui.spruko.com/vexel/register"
                                            class="side-menu__item">Register</a>
                                    </li>
                                    <li class="slide">
                                        <a href="https://laravelui.spruko.com/vexel/forgot-password"
                                            class="side-menu__item">Forgot Password</a>
                                    </li>
                                    <li class="slide">
                                        <a href="https://laravelui.spruko.com/vexel/lockscreen"
                                            class="side-menu__item">Lock Screen</a>
                                    </li>
                                    <li class="slide">
                                        <a href="https://laravelui.spruko.com/vexel/under-maintenance"
                                            class="side-menu__item">Under Maintenance</a>
                                    </li>
                                    <li class="slide has-sub">
                                        <a href="javascript:void(0);" class="side-menu__item">Error Pages
                                            <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                        <ul class="slide-menu child2">
                                            <li class="slide">
                                                <a href="https://laravelui.spruko.com/vexel/error400"
                                                    class="side-menu__item">400</a>
                                            </li>
                                            <li class="slide">
                                                <a href="https://laravelui.spruko.com/vexel/error401"
                                                    class="side-menu__item">401</a>
                                            </li>
                                            <li class="slide">
                                                <a href="https://laravelui.spruko.com/vexel/error403"
                                                    class="side-menu__item">403</a>
                                            </li>
                                            <li class="slide">
                                                <a href="https://laravelui.spruko.com/vexel/error404"
                                                    class="side-menu__item">404</a>
                                            </li>
                                            <li class="slide">
                                                <a href="https://laravelui.spruko.com/vexel/error500"
                                                    class="side-menu__item">500</a>
                                            </li>
                                            <li class="slide">
                                                <a href="https://laravelui.spruko.com/vexel/error503"
                                                    class="side-menu__item">503</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <!-- End::slide -->

                            <!-- Start::slide -->
                            <li class="slide">
                                <a href="https://laravelui.spruko.com/vexel/widgets" class="side-menu__item">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon"
                                        viewBox="0 -960 960 960" fill="#000000">
                                        <path
                                            d="M679-466 466-679l213-213 213 213-213 213Zm-559-72v-301h301v301H120Zm418 418v-301h301v301H538Zm-418 0v-301h301v301H120Zm60-478h181v-181H180v181Zm502 51 129-129-129-129-129 129 129 129Zm-84 367h181v-181H598v181Zm-418 0h181v-181H180v181Zm181-418Zm192-78ZM361-361Zm237 0Z" />
                                    </svg>
                                    <span class="side-menu__label">Widgets</span>
                                </a>
                            </li>
                            <!-- End::slide -->

                            <!-- Start::slide__category -->
                            <li class="slide__category"><span class="category-name">GENERAL</span></li>
                            <!-- End::slide__category -->

                            <!-- Start::slide -->
                            <li class="slide has-sub">
                                <a href="javascript:void(0);" class="side-menu__item">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon"
                                        enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24"
                                        width="24px" fill="#000000">
                                        <g>
                                            <rect fill="none" height="24" width="24" />
                                        </g>
                                        <g>
                                            <g>
                                                <path
                                                    d="M12,2C6.48,2,2,6.48,2,12c0,5.52,4.48,10,10,10s10-4.48,10-10 C22,6.48,17.52,2,12,2z M12,20c-4.41,0-8-3.59-8-8c0-4.41,3.59-8,8-8s8,3.59,8,8C20,16.41,16.41,20,12,20z"
                                                    fill-rule="evenodd" />
                                                <path
                                                    d="M13.49,11.38c0.43-1.22,0.17-2.64-0.81-3.62c-1.11-1.11-2.79-1.3-4.1-0.59 l2.35,2.35l-1.41,1.41L7.17,8.58c-0.71,1.32-0.52,2.99,0.59,4.1c0.98,0.98,2.4,1.24,3.62,0.81l3.41,3.41c0.2,0.2,0.51,0.2,0.71,0 l1.4-1.4c0.2-0.2,0.2-0.51,0-0.71L13.49,11.38z"
                                                    fill-rule="evenodd" />
                                            </g>
                                        </g>
                                    </svg>
                                    <span class="side-menu__label">UI Kit</span>
                                    <i class="fe fe-chevron-right side-menu__angle"></i>
                                </a>
                                <ul class="slide-menu child1">
                                    <li class="slide side-menu__label1">
                                        <a href="javascript:void(0);">UI Kit</a>
                                    </li>
                                    <li class="slide">
                                        <a href="https://laravelui.spruko.com/vexel/alerts"
                                            class="side-menu__item">Alerts</a>
                                    </li>
                                    <li class="slide">
                                        <a href="https://laravelui.spruko.com/vexel/buttons"
                                            class="side-menu__item">Buttons</a>
                                    </li>
                                    <li class="slide">
                                        <a href="https://laravelui.spruko.com/vexel/colors"
                                            class="side-menu__item">Colors</a>
                                    </li>
                                    <li class="slide">
                                        <a href="https://laravelui.spruko.com/vexel/avatars"
                                            class="side-menu__item">Avatars</a>
                                    </li>
                                    <li class="slide">
                                        <a href="https://laravelui.spruko.com/vexel/dropdown"
                                            class="side-menu__item">Dropdowns</a>
                                    </li>
                                    <li class="slide">
                                        <a href="https://laravelui.spruko.com/vexel/listgroup"
                                            class="side-menu__item">Listgroup</a>
                                    </li>
                                    <li class="slide">
                                        <a href="https://laravelui.spruko.com/vexel/tags"
                                            class="side-menu__item">Tags</a>
                                    </li>
                                    <li class="slide">
                                        <a href="https://laravelui.spruko.com/vexel/pagination"
                                            class="side-menu__item">Pagination</a>
                                    </li>
                                    <li class="slide">
                                        <a href="https://laravelui.spruko.com/vexel/navigation"
                                            class="side-menu__item">Navigation</a>
                                    </li>
                                    <li class="slide">
                                        <a href="https://laravelui.spruko.com/vexel/typography"
                                            class="side-menu__item">Typography</a>
                                    </li>
                                    <li class="slide">
                                        <a href="https://laravelui.spruko.com/vexel/breadcrumbs"
                                            class="side-menu__item">Breadcrumbs</a>
                                    </li>
                                    <li class="slide">
                                        <a href="https://laravelui.spruko.com/vexel/badge"
                                            class="side-menu__item">Badges / Pills</a>
                                    </li>
                                    <li class="slide">
                                        <a href="https://laravelui.spruko.com/vexel/offcanvas"
                                            class="side-menu__item">Offcanvas</a>
                                    </li>
                                    <li class="slide">
                                        <a href="https://laravelui.spruko.com/vexel/toast"
                                            class="side-menu__item">Toast</a>
                                    </li>
                                    <li class="slide">
                                        <a href="https://laravelui.spruko.com/vexel/scrollspy"
                                            class="side-menu__item">Scrollspy</a>
                                    </li>
                                    <li class="slide">
                                        <a href="https://laravelui.spruko.com/vexel/mediaobject"
                                            class="side-menu__item">Media Object</a>
                                    </li>
                                    <li class="slide">
                                        <a href="https://laravelui.spruko.com/vexel/accordion"
                                            class="side-menu__item">Accordions</a>
                                    </li>
                                    <li class="slide">
                                        <a href="https://laravelui.spruko.com/vexel/tabs"
                                            class="side-menu__item">Tabs</a>
                                    </li>
                                    <li class="slide">
                                        <a href="https://laravelui.spruko.com/vexel/modal"
                                            class="side-menu__item">Modal</a>
                                    </li>
                                    <li class="slide">
                                        <a href="https://laravelui.spruko.com/vexel/tooltipandpopover"
                                            class="side-menu__item">Tooltip and Popover</a>
                                    </li>
                                    <li class="slide">
                                        <a href="https://laravelui.spruko.com/vexel/progress"
                                            class="side-menu__item">Progress</a>
                                    </li>
                                    <li class="slide">
                                        <a href="https://laravelui.spruko.com/vexel/carousel"
                                            class="side-menu__item">Carousels</a>
                                    </li>
                                </ul>
                            </li>
                            <!-- End::slide -->

                            <!-- Start::slide -->
                            <li class="slide has-sub">
                                <a href="javascript:void(0);" class="side-menu__item">
                                    <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24"
                                        height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"
                                        class="side-menu__icon">
                                        <g>
                                            <rect fill="none" height="24" width="24" />
                                        </g>
                                        <g>
                                            <g />
                                            <g>
                                                <circle cx="15.5" cy="9.5" r="1.5" />
                                                <circle cx="8.5" cy="9.5" r="1.5" />
                                                <path d="M12,18c2.28,0,4.22-1.66,5-4H7C7.78,16.34,9.72,18,12,18z" />
                                                <path
                                                    d="M11.99,2C6.47,2,2,6.48,2,12c0,5.52,4.47,10,9.99,10C17.52,22,22,17.52,22,12C22,6.48,17.52,2,11.99,2z M12,20 c-4.42,0-8-3.58-8-8c0-4.42,3.58-8,8-8s8,3.58,8,8C20,16.42,16.42,20,12,20z" />
                                            </g>
                                        </g>
                                    </svg>
                                    <span class="side-menu__label">Icons</span>
                                    <i class="fe fe-chevron-right side-menu__angle"></i>
                                </a>
                                <ul class="slide-menu child1">
                                    <li class="slide side-menu__label1">
                                        <a href="javascript:void(0);">Icons</a>
                                    </li>
                                    <li class="slide">
                                        <a href="https://laravelui.spruko.com/vexel/icons"
                                            class="side-menu__item">Font Awesome Icons</a>
                                    </li>
                                    <li class="slide">
                                        <a href="https://laravelui.spruko.com/vexel/icons2"
                                            class="side-menu__item">Material Design Icons</a>
                                    </li>
                                    <li class="slide">
                                        <a href="https://laravelui.spruko.com/vexel/icons3"
                                            class="side-menu__item">Simple Line Icons</a>
                                    </li>
                                    <li class="slide">
                                        <a href="https://laravelui.spruko.com/vexel/icons4"
                                            class="side-menu__item">Feather Icons</a>
                                    </li>
                                    <li class="slide">
                                        <a href="https://laravelui.spruko.com/vexel/icons5"
                                            class="side-menu__item">Ionic Icons</a>
                                    </li>
                                    <li class="slide">
                                        <a href="https://laravelui.spruko.com/vexel/icons6"
                                            class="side-menu__item">Flag Icons</a>
                                    </li>
                                    <li class="slide">
                                        <a href="https://laravelui.spruko.com/vexel/icons7"
                                            class="side-menu__item">Pe7 Icons</a>
                                    </li>
                                    <li class="slide">
                                        <a href="https://laravelui.spruko.com/vexel/icons8"
                                            class="side-menu__item">Typicon Icons</a>
                                    </li>
                                    <li class="slide">
                                        <a href="https://laravelui.spruko.com/vexel/icons9"
                                            class="side-menu__item">Weather Icons</a>
                                    </li>
                                    <li class="slide">
                                        <a href="https://laravelui.spruko.com/vexel/icons10"
                                            class="side-menu__item">Bootstrap Icons</a>
                                    </li>
                                </ul>
                            </li>
                            <!-- End::slide -->

                            <!-- Start::slide -->
                            <li class="slide has-sub">
                                <a href="javascript:void(0);" class="side-menu__item">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon"
                                        viewBox="0 0 24 24">
                                        <path d="M0 0h24v24H0V0z" fill="none"></path>
                                        <path
                                            d="M16.66 4.52l2.83 2.83-2.83 2.83-2.83-2.83 2.83-2.83M9 5v4H5V5h4m10 10v4h-4v-4h4M9 15v4H5v-4h4m7.66-13.31L11 7.34 16.66 13l5.66-5.66-5.66-5.65zM11 3H3v8h8V3zm10 10h-8v8h8v-8zm-10 0H3v8h8v-8z">
                                        </path>
                                    </svg>
                                    <span class="side-menu__label">Admin UI</span>
                                    <i class="fe fe-chevron-right side-menu__angle"></i>
                                </a>
                                <ul class="slide-menu child1">
                                    <li class="slide side-menu__label1">
                                        <a href="javascript:void(0);">Admin UI</a>
                                    </li>
                                    <li class="slide">
                                        <a href="https://laravelui.spruko.com/vexel/cards"
                                            class="side-menu__item">Cards Design</a>
                                    </li>
                                    <li class="slide">
                                        <a href="https://laravelui.spruko.com/vexel/calendar2"
                                            class="side-menu__item">Full Calendar</a>
                                    </li>
                                    <li class="slide">
                                        <a href="https://laravelui.spruko.com/vexel/chat"
                                            class="side-menu__item">Chat</a>
                                    </li>
                                    <li class="slide">
                                        <a href="https://laravelui.spruko.com/vexel/notify"
                                            class="side-menu__item">Notifications</a>
                                    </li>
                                    <li class="slide">
                                        <a href="https://laravelui.spruko.com/vexel/sweetalert"
                                            class="side-menu__item">Sweet alerts</a>
                                    </li>
                                    <li class="slide">
                                        <a href="https://laravelui.spruko.com/vexel/rangeslider"
                                            class="side-menu__item">Range slider</a>
                                    </li>
                                    <li class="slide">
                                        <a href="https://laravelui.spruko.com/vexel/scroll"
                                            class="side-menu__item">Content Scroll bar</a>
                                    </li>
                                    <li class="slide">
                                        <a href="https://laravelui.spruko.com/vexel/loaders"
                                            class="side-menu__item">Loaders</a>
                                    </li>
                                    <li class="slide">
                                        <a href="https://laravelui.spruko.com/vexel/rating"
                                            class="side-menu__item">Rating</a>
                                    </li>
                                    <li class="slide">
                                        <a href="https://laravelui.spruko.com/vexel/timeline"
                                            class="side-menu__item">Timeline</a>
                                    </li>
                                    <li class="slide">
                                        <a href="https://laravelui.spruko.com/vexel/treeview"
                                            class="side-menu__item">Treeview</a>
                                    </li>
                                    <li class="slide">
                                        <a href="https://laravelui.spruko.com/vexel/ribbons"
                                            class="side-menu__item">Ribbons</a>
                                    </li>
                                    <li class="slide">
                                        <a href="https://laravelui.spruko.com/vexel/swiper"
                                            class="side-menu__item">Swiper Js</a>
                                    </li>
                                    <li class="slide">
                                        <a href="https://laravelui.spruko.com/vexel/users-list"
                                            class="side-menu__item">User List</a>
                                    </li>
                                    <li class="slide">
                                        <a href="https://laravelui.spruko.com/vexel/search"
                                            class="side-menu__item">Search</a>
                                    </li>
                                </ul>
                            </li>
                            <!-- End::slide -->

                            <!-- Start::slide -->
                            <li class="slide">
                                <a href="https://laravelui.spruko.com/vexel/landing-page" class="side-menu__item">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon"
                                        enable-background="new 0 0 24 24" viewBox="0 0 24 24" fill="#000000">
                                        <g>
                                            <rect fill="none" height="24" width="24" />
                                        </g>
                                        <g>
                                            <g>
                                                <path
                                                    d="M6,15c-0.83,0-1.58,0.34-2.12,0.88C2.7,17.06,2,22,2,22s4.94-0.7,6.12-1.88C8.66,19.58,9,18.83,9,18C9,16.34,7.66,15,6,15 z M6.71,18.71c-0.28,0.28-2.17,0.76-2.17,0.76s0.47-1.88,0.76-2.17C5.47,17.11,5.72,17,6,17c0.55,0,1,0.45,1,1 C7,18.28,6.89,18.53,6.71,18.71z M17.42,13.65L17.42,13.65c6.36-6.36,4.24-11.31,4.24-11.31s-4.95-2.12-11.31,4.24l-2.49-0.5 C7.21,5.95,6.53,6.16,6.05,6.63L2,10.69l5,2.14L11.17,17l2.14,5l4.05-4.05c0.47-0.47,0.68-1.15,0.55-1.81L17.42,13.65z M7.41,10.83L5.5,10.01l1.97-1.97l1.44,0.29C8.34,9.16,7.83,10.03,7.41,10.83z M13.99,18.5l-0.82-1.91 c0.8-0.42,1.67-0.93,2.49-1.5l0.29,1.44L13.99,18.5z M16,12.24c-1.32,1.32-3.38,2.4-4.04,2.73l-2.93-2.93 c0.32-0.65,1.4-2.71,2.73-4.04c4.68-4.68,8.23-3.99,8.23-3.99S20.68,7.56,16,12.24z M15,11c1.1,0,2-0.9,2-2s-0.9-2-2-2s-2,0.9-2,2 S13.9,11,15,11z" />
                                            </g>
                                        </g>
                                    </svg>
                                    <span class="side-menu__label">Landing Page</span>
                                </a>
                            </li>
                            <!-- End::slide -->

                            <!-- Start::slide -->
                            <li class="slide has-sub">
                                <a href="javascript:void(0);" class="side-menu__item">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" height="24px"
                                        viewBox="0 0 24 24" width="24px" fill="#000000">
                                        <path d="M0 0h24v24H0V0z" fill="none"></path>
                                        <path
                                            d="M11 7h6v2h-6zm0 4h6v2h-6zm0 4h6v2h-6zM7 7h2v2H7zm0 4h2v2H7zm0 4h2v2H7zM20.1 3H3.9c-.5 0-.9.4-.9.9v16.2c0 .4.4.9.9.9h16.2c.4 0 .9-.5.9-.9V3.9c0-.5-.5-.9-.9-.9zM19 19H5V5h14v14z">
                                        </path>
                                    </svg>
                                    <span class="side-menu__label">Nested Menu</span>
                                    <i class="fe fe-chevron-right side-menu__angle"></i>
                                </a>
                                <ul class="slide-menu child1">
                                    <li class="slide side-menu__label1">
                                        <a href="javascript:void(0);">Nested Menu</a>
                                    </li>
                                    <li class="slide">
                                        <a href="javascript:void(0);" class="side-menu__item">Nested-1</a>
                                    </li>
                                    <li class="slide has-sub">
                                        <a href="javascript:void(0);" class="side-menu__item">Nested-2
                                            <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                        <ul class="slide-menu child2">
                                            <li class="slide">
                                                <a href="javascript:void(0);" class="side-menu__item">Nested-2-1</a>
                                            </li>
                                            <li class="slide has-sub">
                                                <a href="javascript:void(0);" class="side-menu__item">Nested-2-2
                                                    <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                                <ul class="slide-menu child3">
                                                    <li class="slide">
                                                        <a href="javascript:void(0);"
                                                            class="side-menu__item">Nested-2-2-1</a>
                                                    </li>
                                                    <li class="slide">
                                                        <a href="javascript:void(0);"
                                                            class="side-menu__item">Nested-2-2-2</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <!-- End::slide -->

                            <!-- Start::slide__category -->
                            <li class="slide__category"><span class="category-name">Forms & Tables</span></li>
                            <!-- End::slide__category -->

                            <!-- Start::slide -->
                            <li class="slide has-sub">
                                <a href="javascript:void(0);" class="side-menu__item">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24"
                                        width="24px" fill="#000000" class="side-menu__icon">
                                        <path d="M0 0h24v24H0V0z" fill="none"></path>
                                        <path
                                            d="M8 16h8v2H8zm0-4h8v2H8zm6-10H6c-1.1 0-2 .9-2 2v16c0 1.1.89 2 1.99 2H18c1.1 0 2-.9 2-2V8l-6-6zm4 18H6V4h7v5h5v11z">
                                        </path>
                                    </svg>
                                    <span class="side-menu__label">Forms</span>
                                    <i class="fe fe-chevron-right side-menu__angle"></i>
                                </a>
                                <ul class="slide-menu child1 mega-menu">
                                    <li class="slide side-menu__label1">
                                        <a href="javascript:void(0);">Forms</a>
                                    </li>
                                    <li class="slide">
                                        <a href="https://laravelui.spruko.com/vexel/form-elements"
                                            class="side-menu__item">Form Elements</a>
                                    </li>
                                    <li class="slide">
                                        <a href="https://laravelui.spruko.com/vexel/form-layouts"
                                            class="side-menu__item">Form Layouts</a>
                                    </li>
                                    <li class="slide">
                                        <a href="https://laravelui.spruko.com/vexel/form-advanced"
                                            class="side-menu__item">Form Advanced</a>
                                    </li>
                                    <li class="slide">
                                        <a href="https://laravelui.spruko.com/vexel/form-editor"
                                            class="side-menu__item">Form Editor</a>
                                    </li>
                                    <li class="slide">
                                        <a href="https://laravelui.spruko.com/vexel/form-validation"
                                            class="side-menu__item">Form Validation</a>
                                    </li>
                                    <li class="slide">
                                        <a href="https://laravelui.spruko.com/vexel/form-input-spinners"
                                            class="side-menu__item">Form Input
                                            Spinners</a>
                                    </li>
                                    <li class="slide">
                                        <a href="https://laravelui.spruko.com/vexel/select-2"
                                            class="side-menu__item">Select-2</a>
                                    </li>
                                </ul>
                            </li>
                            <!-- End::slide -->

                            <!-- Start::slide -->
                            <li class="slide has-sub">
                                <a href="javascript:void(0);" class="side-menu__item">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon"
                                        enable-background="new 0 0 24 24" viewBox="0 0 24 24" fill="#000000">
                                        <g>
                                            <rect fill="none" height="24" width="24" />
                                        </g>
                                        <g>
                                            <g>
                                                <g>
                                                    <path
                                                        d="M3,3v8h8V3H3z M9,9H5V5h4V9z M3,13v8h8v-8H3z M9,19H5v-4h4V19z M13,3v8h8V3H13z M19,9h-4V5h4V9z M13,13v8h8v-8H13z M19,19h-4v-4h4V19z" />
                                                </g>
                                            </g>
                                        </g>
                                    </svg>
                                    <span class="side-menu__label">Tables</span>
                                    <i class="fe fe-chevron-right side-menu__angle"></i>
                                </a>
                                <ul class="slide-menu child1">
                                    <li class="slide side-menu__label1">
                                        <a href="javascript:void(0);">Tables</a>
                                    </li>
                                    <li class="slide">
                                        <a href="https://laravelui.spruko.com/vexel/tables"
                                            class="side-menu__item">Default Tables</a>
                                    </li>
                                    <li class="slide">
                                        <a href="https://laravelui.spruko.com/vexel/datatable"
                                            class="side-menu__item">Data Tables</a>
                                    </li>
                                    <li class="slide">
                                        <a href="https://laravelui.spruko.com/vexel/grid-tables"
                                            class="side-menu__item">Grid Tables</a>
                                    </li>
                                </ul>
                            </li>
                            <!-- End::slide -->

                            <!-- Start::slide__category -->
                            <li class="slide__category"><span class="category-name">Maps & Charts</span></li>
                            <!-- End::slide__category -->

                            <!-- Start::slide -->
                            <li class="slide has-sub">
                                <a href="javascript:void(0);" class="side-menu__item">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24"
                                        width="24px" fill="#000000" class="side-menu__icon">
                                        <path d="M0 0h24v24H0z" fill="none"></path>
                                        <path
                                            d="M12 12c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2zm6-1.8C18 6.57 15.35 4 12 4s-6 2.57-6 6.2c0 2.34 1.95 5.44 6 9.14 4.05-3.7 6-6.8 6-9.14zM12 2c4.2 0 8 3.22 8 8.2 0 3.32-2.67 7.25-8 11.8-5.33-4.55-8-8.48-8-11.8C4 5.22 7.8 2 12 2z">
                                        </path>
                                    </svg>
                                    <span class="side-menu__label">Maps</span>
                                    <i class="fe fe-chevron-right side-menu__angle"></i>
                                </a>
                                <ul class="slide-menu child1">
                                    <li class="slide side-menu__label1">
                                        <a href="javascript:void(0);">Maps</a>
                                    </li>
                                    <li class="slide">
                                        <a href="https://laravelui.spruko.com/vexel/maps1"
                                            class="side-menu__item">Leaflet Maps</a>
                                    </li>
                                    <li class="slide">
                                        <a href="https://laravelui.spruko.com/vexel/maps2"
                                            class="side-menu__item">Google Maps</a>
                                    </li>
                                    <li class="slide">
                                        <a href="https://laravelui.spruko.com/vexel/maps"
                                            class="side-menu__item">Vector Maps</a>
                                    </li>
                                </ul>
                            </li>
                            <!-- End::slide -->

                            <!-- Start::slide -->
                            <li class="slide has-sub">
                                <a href="javascript:void(0);" class="side-menu__item">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24"
                                        width="24px" fill="#000000" class="side-menu__icon">
                                        <path d="M0 0h24v24H0V0z" fill="none"></path>
                                        <path
                                            d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 16H5V5h14v14zM7 10h2v7H7zm4-3h2v10h-2zm4 6h2v4h-2z">
                                        </path>
                                    </svg>
                                    <span class="side-menu__label">Charts</span>
                                    <i class="fe fe-chevron-right side-menu__angle"></i>
                                </a>
                                <ul class="slide-menu child1">
                                    <li class="slide side-menu__label1">
                                        <a href="javascript:void(0);">Charts</a>
                                    </li>
                                    <li class="slide">
                                        <a href="https://laravelui.spruko.com/vexel/chart-chartist"
                                            class="side-menu__item">Chart Js</a>
                                    </li>
                                    <li class="slide">
                                        <a href="https://laravelui.spruko.com/vexel/chart-echart"
                                            class="side-menu__item">ECharts</a>
                                    </li>
                                    <li class="slide">
                                        <a href="https://laravelui.spruko.com/vexel/chart-apex"
                                            class="side-menu__item">Apex-Charts</a>
                                    </li>
                                </ul>
                            </li>
                            <!-- End::slide -->

                        </ul>
                        <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg"
                                fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
                                <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z">
                                </path>
                            </svg></div>
                    </nav>
                    <!-- End::nav -->

                </div>
                <!-- End::main-sidebar -->

            </aside>
            <!-- End Main-Sidebar-->

            <!--app-content open-->
            <div class="main-content app-content mt-0">


                <!-- PAGE-HEADER -->
                <div class="page-header d-flex align-items-center justify-content-between border-bottom mb-4">
                    <h1 class="page-title">Empty</h1>
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

        <!-- Country-selector modal -->
        <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="searchModal"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <span class="input-group">
                            <input type="search" class="form-control px-2 " placeholder="Search..."
                                aria-label="Username">
                            <a href="javascript:void(0);" class="input-group-text bg-primary text-white"
                                id="Search-Grid"><i
                                    class="fe fe-search header-link-icon tx-fixed-white fs-18"></i></a>
                        </span>
                        <div class="mt-3">
                            <div class="">
                                <p class="fw-semibold text-muted mb-2 fs-13">Recent Searches</p>
                                <div class="ps-2">
                                    <a href="javascript:void(0);" class="search-tags"><i
                                            class="fe fe-search me-2"></i>People<span></span></a>
                                    <a href="javascript:void(0);" class="search-tags"><i
                                            class="fe fe-search me-2"></i>Pages<span></span></a>
                                    <a href="javascript:void(0);" class="search-tags"><i
                                            class="fe fe-search me-2"></i>Articles<span></span></a>
                                </div>
                            </div>
                            <div class="mt-3">
                                <p class="fw-semibold text-muted mb-2 fs-13">Apps and pages</p>
                                <ul class="ps-2">
                                    <li class="p-1 d-flex align-items-center text-muted mb-2 search-app">
                                        <a href="https://laravelui.spruko.com/vexel/calendar2"><span><i
                                                    class="bi bi-calendar me-2 fs-14 bg-primary-transparent avatar rounded-circle"></i>Calendar</span></a>
                                    </li>
                                    <li class="p-1 d-flex align-items-center text-muted mb-2 search-app">
                                        <a href="https://laravelui.spruko.com/vexel/email-inbox"><span><i
                                                    class="bi bi-envelope me-2 fs-14 bg-primary-transparent avatar rounded-circle"></i>Mail</span></a>
                                    </li>
                                    <li class="p-1 d-flex align-items-center text-muted mb-2 search-app">
                                        <a href="https://laravelui.spruko.com/vexel/buttons"><span><i
                                                    class="bi bi-dice-1 me-2 fs-14 bg-primary-transparent avatar rounded-circle"></i>Buttons</span></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="mt-3">
                                <p class="fw-semibold text-muted mb-2 fs-13">Links</p>
                                <ul class="ps-2">
                                    <li class="p-1 align-items-center  mb-1 search-app">
                                        <a href="javascript:void(0);"
                                            class="text-primary"><u>http://spruko/html/spruko.com</u></a>
                                    </li>
                                    <li class="p-1 align-items-center mb-1 search-app">
                                        <a href="javascript:void(0);"
                                            class="text-primary"><u>http://spruko/demo/spruko.com</u></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer d-block">
                        <div class="text-center">
                            <a href="javascript:void(0);" class="text-primary text-decoration-underline fs-15">View
                                all
                                results</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Country-selector modal -->

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
