<!DOCTYPE html>
<html lang="en" dir="ltr" class="h-full" data-nav-layout="horizontal" data-nav-style="menu-click"
    data-menu-position="fixed">
<head>
    <!-- Meta Data -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">
    <link rel="canonical" href="@yield('canonical')" />

    <!-- TITLE -->
    <title>@yield('title')</title>

    <link rel="stylesheet" type="text/css" href="{{asset("public/vendor/cookie-consent/css/cookie-consent.css")}}">

    <!-- FAVICON -->
    <link rel="icon" href="{{ asset('assets/images/brand-logos/favicon.png') }}" type="image/x-icon">

    <!-- ICONS CSS -->
    <link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet">

    <!-- STYLE CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- SIMPLEBAR CSS -->
    <link href="{{ asset('assets/libs/simplebar/simplebar.min.css') }}" rel="stylesheet">

    <!-- COLOR PICKER CSS -->
    <link rel="stylesheet" href="{{ asset('assets/libs/%40simonwep/pickr/themes/nano.min.css') }}">

    <!-- SWIPER CSS -->
    <link rel="stylesheet" href="{{ asset('assets/libs/swiper/swiper-bundle.min.css') }}">

    <!-- js -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
 

    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script> --}}

    <script src="{{ asset('assets/js/message.js') }}"></script>


    <script>
        function getOS() {
            var userAgent = window.navigator.userAgent,
                platform = window.navigator?.userAgentData?.platform || window.navigator.platform,
                macosPlatforms = ['Macintosh', 'MacIntel', 'MacPPC', 'Mac68K'],
                windowsPlatforms = ['Win32', 'Win64', 'Windows', 'WinCE'],
                iosPlatforms = ['iPhone', 'iPad', 'iPod'],
                os = null;

            if (macosPlatforms.indexOf(platform) !== -1) {
                os = 'MacOS';
            } else if (iosPlatforms.indexOf(platform) !== -1) {
                os = 'iOS';
            } else if (windowsPlatforms.indexOf(platform) !== -1) {
                os = 'Windows';
            } else if (/Android/.test(userAgent)) {
                os = 'Android';
            } else if (/Linux/.test(platform)) {
                os = 'Linux';
            }

            return os;
        }

        document.addEventListener("DOMContentLoaded", function() {
            var os = getOS();
            if (os) {
                window.location.hash = os;
            }
        });
    </script>
    


    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"> --}}


</head>

<body class="landing-body">

    <!-- SWITCHER -->
   


    <div id="hs-overlay-switcher" class="hs-overlay hidden ti-offcanvas ti-offcanvas-right" tabindex="-1">
        <div class="ti-offcanvas-header">
            <h5 class="ti-offcanvas-title">
                Switcher
            </h5>
            <button type="button"
                class="ti-btn flex-shrink-0 p-0 transition-none text-defaulttextcolor dark:text-defaulttextcolor/70 hover:text-gray-700 focus:ring-gray-400 focus:ring-offset-white  dark:hover:text-white/80 dark:focus:ring-white/10 dark:focus:ring-offset-white/10"
                data-hs-overlay="#hs-overlay-switcher">
                <span class="sr-only">Close modal</span>
                <i class="ri-close-circle-line leading-none text-lg"></i>
            </button>
        </div>
        <div class="ti-offcanvas-body" id="switcher-body">
            <div>
                <div>
                    <p class="switcher-style-head">Theme Color Mode:</p>
                    <div class="grid grid-cols-3 gap-6 switcher-style">
                        <div class="flex">
                            <input type="radio" name="theme-style" class="ti-form-radio" id="switcher-light-theme"
                                checked>
                            <label for="switcher-light-theme"
                                class="text-xs text-defaulttextcolor dark:text-defaulttextcolor/70 font-semibold ms-2 ">Light</label>
                        </div>
                        <div class="flex">
                            <input type="radio" name="theme-style" class="ti-form-radio" id="switcher-dark-theme">
                            <label for="switcher-dark-theme"
                                class="text-xs text-defaulttextcolor dark:text-defaulttextcolor/70 font-semibold ms-2 ">Dark</label>
                        </div>
                    </div>
                </div>
                <div>
                    <p class="switcher-style-head">Directions:</p>
                    <div class="grid grid-cols-3 gap-6 switcher-style">
                        <div class="flex">
                            <input type="radio" name="direction" class="ti-form-radio" id="switcher-ltr" checked>
                            <label for="switcher-ltr"
                                class="text-xs font-semibold text-defaulttextcolor dark:text-defaulttextcolor/70 ms-2 ">LTR</label>
                        </div>
                        <div class="flex">
                            <input type="radio" name="direction" class="ti-form-radio" id="switcher-rtl">
                            <label for="switcher-rtl"
                                class="text-xs font-semibold text-defaulttextcolor dark:text-defaulttextcolor/70 ms-2 ">RTL</label>
                        </div>
                    </div>
                </div>
                <div class="theme-colors">
                    <p class="switcher-style-head">Theme Primary:</p>
                    <div class="flex switcher-style space-x-3 rtl:space-x-reverse">
                        <div class="ti-form-radio switch-select">
                            <input class="ti-form-radio color-input color-primary-1" type="radio" name="theme-primary"
                                id="switcher-primary" checked>
                        </div>
                        <div class="ti-form-radio switch-select">
                            <input class="ti-form-radio color-input color-primary-2" type="radio" name="theme-primary"
                                id="switcher-primary1">
                        </div>
                        <div class="ti-form-radio switch-select">
                            <input class="ti-form-radio color-input color-primary-3" type="radio"
                                name="theme-primary" id="switcher-primary2">
                        </div>
                        <div class="ti-form-radio switch-select">
                            <input class="ti-form-radio color-input color-primary-4" type="radio"
                                name="theme-primary" id="switcher-primary3">
                        </div>
                        <div class="ti-form-radio switch-select">
                            <input class="ti-form-radio color-input color-primary-5" type="radio"
                                name="theme-primary" id="switcher-primary4">
                        </div>
                        <div class="ti-form-radio switch-select ps-0 mt-1 color-primary-light">
                            <div class="theme-container-primary"></div>
                            <div class="pickr-container-primary"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ti-offcanvas-footer sm:flex justify-between">

            <a href="javascript:void(0);" id="reset-all" class="w-full ti-btn ti-btn-danger-full m-1">Reset</a>
        </div>
    </div>
    <!-- END SWITCHER -->

    <!-- PAGE -->
    <div class="landing-page-wrapper relative">

        <!-- HEADER -->


        <header class="app-header">

            <!-- Start::main-header-container -->
            <div class="main-header-container container-fluid">

                <!-- Start::header-content-left -->
                <div class="header-content-left">

                    <!-- Start::header-element -->
                    <div class="header-element">
                        <div class="horizontal-logo">
                            <a href="{{ route('user.index') }}" class="header-logo">
                                <img src="{{ asset('assets/images/brand-logos/favicon.png') }}" alt="logo"
                                    class="toggle-logo">
                                <img src="{{ asset('assets/images/brand-logos/favicon.png') }}" alt="logo"
                                    class="toggle-dark">
                            </a>
                        </div>
                    </div>
                    <!-- End::header-element -->
                    <!-- Start::header-element -->
                    <div class="header-element">
                        <!-- Start::header-link -->
                        <a aria-label="anchor" href="javascript:void(0);" class="sidemenu-toggle header-link">
                            <span class="open-toggle">
                                <i class="ri-menu-3-line text-xl"></i>
                            </span>
                        </a>
                        <!-- End::header-link -->
                    </div>
                    <!-- End::header-element -->

                </div>
                <!-- End::header-content-left -->

                <!-- Start::header-content-right -->
                <div class="header-content-right">

                    <!-- Start::header-element -->
                    <div class="header-element !items-center">
                        <!-- Start::header-link|switcher-icon -->
                        @if (!session()->has('loggedInUser'))
                            <div class="lg:hidden block">
                                <a href="{{ route('user.signin') }}" class="ti-btn ti-btn-primary !m-0">
                                    Sign Up
                                </a>
                                <a aria-label="anchor" href="javascript:void(0);"
                                    class="ti-btn m-0 p-2 px-3 ti-btn-success"
                                    data-hs-overlay="#hs-overlay-switcher"><i
                                        class="ri-settings-3-line animate-spin-slow"></i></a>
                            </div>
                        @endif
                        @if (session()->has('loggedInUser'))
                            <div class="lg:hidden block">
                                <a href="{{ route('user.logout') }}" class="ti-btn ti-btn-primary !m-0">
                                    Logout
                                </a>
                                <a aria-label="anchor" href="javascript:void(0);"
                                    class="ti-btn m-0 p-2 px-3 ti-btn-success"
                                    data-hs-overlay="#hs-overlay-switcher"><i
                                        class="ri-settings-3-line animate-spin-slow"></i></a>
                            </div>
                        @endif
                        <!-- End::header-link|switcher-icon -->
                    </div>
                    <!-- End::header-element -->

                </div>
                <!-- End::header-content-right -->

            </div>
            <!-- End::main-header-container -->

        </header>
        <!-- END HEADER -->

        <!-- SIDEBAR -->





        @extends('User.Layouts.nav')

        <!-- END SIDEBAR -->
        {{-- <div class="main-content !p-0 landing-main dark:text-defaulttextcolor/70"> --}}
