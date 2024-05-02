<!DOCTYPE html>
<html lang="en" dir="ltr" data-nav-layout="vertical" class="light" data-header-styles="light" data-menu-styles="dark">


<!-- Mirrored from php.spruko.com/tailwind/ynex/ynex/pages/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Mar 2024 10:00:08 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>

    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Author" content="Spruko Technologies Private Limited">
    <meta name="Description" content="Ynex - PHP Tailwind CSS Admin & Dashboard Template">
    <meta name="keywords"
        content="admin template, admin dashboard, php admin panel, admin, tailwind css dashboard, php admin dashboard, tailwind admin template, tailwind template, php dashboard, dashboard, tailwind, tailwind dashboard, tailwind css, tailwind css template">

    <!-- TITLE -->
    <title> @yield('title') </title>

    <!-- FAVICON -->
    <link rel="icon" href="https://php.spruko.com/tailwind/ynex/ynex/assets/images/brand-logos/favicon.ico"
        type="image/x-icon">   

    <!-- ICONS CSS -->
    <link href="{{asset('assets/css/icons.css') }}" rel="stylesheet">

    <!-- STYLE CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- SIMPLEBAR CSS -->
    <link rel="stylesheet" href="assets/libs/simplebar/simplebar.min.css">

    <!-- COLOR PICKER CSS -->
    <link rel="stylesheet" href="assets/libs/%40simonwep/pickr/themes/nano.min.css">

    <!-- MAIN JS -->
    <script src="assets/js/main.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>



    <style>
        body {
       background-color: rgb(var(--body-bg));
   }
   </style>


</head>

<body>

    <!-- SWITCHER -->


    <div id="hs-overlay-switcher" class="hs-overlay hidden ti-offcanvas ti-offcanvas-right" tabindex="-1">
        <div class="ti-offcanvas-header z-10 relative">
            <h5 class="ti-offcanvas-title">
                Switcher
            </h5>
            <button type="button"
                class="ti-btn flex-shrink-0 p-0  transition-none text-defaulttextcolor dark:text-defaulttextcolor/70 hover:text-gray-700 focus:ring-gray-400 focus:ring-offset-white  dark:hover:text-white/80 dark:focus:ring-white/10 dark:focus:ring-offset-white/10"
                data-hs-overlay="#hs-overlay-switcher">
                <span class="sr-only">Close modal</span>
                <i class="ri-close-circle-line leading-none text-lg"></i>
            </button>
        </div>
        <div class="ti-offcanvas-body !p-0 !border-b dark:border-white/10 z-10 relative !h-auto">
            <div class="flex rtl:space-x-reverse" aria-label="Tabs" role="tablist">
                <button type="button"
                    class="hs-tab-active:bg-success/20 w-full !py-2 !px-4 hs-tab-active:border-b-transparent text-defaultsize border-0 hs-tab-active:text-success dark:hs-tab-active:bg-success/20 dark:hs-tab-active:border-b-white/10 dark:hs-tab-active:text-success -mb-px bg-white font-semibold text-center  text-defaulttextcolor dark:text-defaulttextcolor/70 rounded-none hover:text-gray-700 dark:bg-bodybg dark:border-white/10  active"
                    id="switcher-item-1" data-hs-tab="#switcher-1" aria-controls="switcher-1" role="tab">
                    Theme Style
                </button>
                <button type="button"
                    class="hs-tab-active:bg-success/20 w-full !py-2 !px-4 hs-tab-active:border-b-transparent text-defaultsize border-0 hs-tab-active:text-success dark:hs-tab-active:bg-success/20 dark:hs-tab-active:border-b-white/10 dark:hs-tab-active:text-success -mb-px  bg-white font-semibold text-center  text-defaulttextcolor dark:text-defaulttextcolor/70 rounded-none hover:text-gray-700 dark:bg-bodybg dark:border-white/10  dark:hover:text-gray-300"
                    id="switcher-item-2" data-hs-tab="#switcher-2" aria-controls="switcher-2" role="tab">
                    Theme Colors
                </button>
            </div>
        </div>
        <div class="ti-offcanvas-body" id="switcher-body">
            <div id="switcher-1" role="tabpanel" aria-labelledby="switcher-item-1" class="">
                <div class="">
                    <p class="switcher-style-head">Theme Color Mode:</p>
                    <div class="grid grid-cols-3 switcher-style">
                        <div class="flex items-center">
                            <input type="radio" name="theme-style" class="ti-form-radio" id="switcher-light-theme"
                                checked>
                            <label for="switcher-light-theme"
                                class="text-defaultsize text-defaulttextcolor dark:text-defaulttextcolor/70 ms-2  font-semibold">Light</label>
                        </div>
                        <div class="flex items-center">
                            <input type="radio" name="theme-style" class="ti-form-radio" id="switcher-dark-theme">
                            <label for="switcher-dark-theme"
                                class="text-defaultsize text-defaulttextcolor dark:text-defaulttextcolor/70 ms-2  font-semibold">Dark</label>
                        </div>
                    </div>
                </div>
                <div>
                    <p class="switcher-style-head">Directions:</p>
                    <div class="grid grid-cols-3  switcher-style">
                        <div class="flex items-center">
                            <input type="radio" name="direction" class="ti-form-radio" id="switcher-ltr" checked>
                            <label for="switcher-ltr"
                                class="text-defaultsize text-defaulttextcolor dark:text-defaulttextcolor/70 ms-2  font-semibold">LTR</label>
                        </div>
                        <div class="flex items-center">
                            <input type="radio" name="direction" class="ti-form-radio" id="switcher-rtl">
                            <label for="switcher-rtl"
                                class="text-defaultsize text-defaulttextcolor dark:text-defaulttextcolor/70 ms-2  font-semibold">RTL</label>
                        </div>
                    </div>
                </div>
                <div>
                    <p class="switcher-style-head">Navigation Styles:</p>
                    <div class="grid grid-cols-3  switcher-style">
                        <div class="flex items-center">
                            <input type="radio" name="navigation-style" class="ti-form-radio" id="switcher-vertical"
                                checked>
                            <label for="switcher-vertical"
                                class="text-defaultsize text-defaulttextcolor dark:text-defaulttextcolor/70 ms-2  font-semibold">Vertical</label>
                        </div>
                        <div class="flex items-center">
                            <input type="radio" name="navigation-style" class="ti-form-radio" id="switcher-horizontal">
                            <label for="switcher-horizontal"
                                class="text-defaultsize text-defaulttextcolor dark:text-defaulttextcolor/70 ms-2  font-semibold">Horizontal</label>
                        </div>
                    </div>
                </div>
                <div>
                    <p class="switcher-style-head">Navigation Menu Style:</p>
                    <div class="grid grid-cols-2 gap-2 switcher-style">
                        <div class="flex">
                            <input type="radio" name="navigation-data-menu-styles" class="ti-form-radio"
                                id="switcher-menu-click" checked>
                            <label for="switcher-menu-click"
                                class="text-defaultsize text-defaulttextcolor dark:text-defaulttextcolor/70 ms-2  font-semibold">Menu
                                Click</label>
                        </div>
                        <div class="flex">
                            <input type="radio" name="navigation-data-menu-styles" class="ti-form-radio"
                                id="switcher-menu-hover">
                            <label for="switcher-menu-hover"
                                class="text-defaultsize text-defaulttextcolor dark:text-defaulttextcolor/70 ms-2  font-semibold">Menu
                                Hover</label>
                        </div>
                        <div class="flex">
                            <input type="radio" name="navigation-data-menu-styles" class="ti-form-radio"
                                id="switcher-icon-click">
                            <label for="switcher-icon-click"
                                class="text-defaultsize text-defaulttextcolor dark:text-defaulttextcolor/70 ms-2  font-semibold">Icon
                                Click</label>
                        </div>
                        <div class="flex">
                            <input type="radio" name="navigation-data-menu-styles" class="ti-form-radio"
                                id="switcher-icon-hover">
                            <label for="switcher-icon-hover"
                                class="text-defaultsize text-defaulttextcolor dark:text-defaulttextcolor/70 ms-2  font-semibold">Icon
                                Hover</label>
                        </div>
                    </div>
                    <div class="px-4 text-secondary text-xs"><b class="me-2">Note:</b>Works same for both Vertical and
                        Horizontal
                    </div>
                </div>
                <div class=" sidemenu-layout-styles">
                    <p class="switcher-style-head">Sidemenu Layout Syles:</p>
                    <div class="grid grid-cols-2 gap-2 switcher-style">
                        <div class="flex">
                            <input type="radio" name="sidemenu-layout-styles" class="ti-form-radio"
                                id="switcher-default-menu" checked>
                            <label for="switcher-default-menu"
                                class="text-defaultsize text-defaulttextcolor dark:text-defaulttextcolor/70 ms-2  font-semibold ">Default
                                Menu</label>
                        </div>
                        <div class="flex">
                            <input type="radio" name="sidemenu-layout-styles" class="ti-form-radio"
                                id="switcher-closed-menu">
                            <label for="switcher-closed-menu"
                                class="text-defaultsize text-defaulttextcolor dark:text-defaulttextcolor/70 ms-2  font-semibold ">
                                Closed
                                Menu</label>
                        </div>
                        <div class="flex">
                            <input type="radio" name="sidemenu-layout-styles" class="ti-form-radio"
                                id="switcher-icontext-menu">
                            <label for="switcher-icontext-menu"
                                class="text-defaultsize text-defaulttextcolor dark:text-defaulttextcolor/70 ms-2  font-semibold ">Icon
                                Text</label>
                        </div>
                        <div class="flex">
                            <input type="radio" name="sidemenu-layout-styles" class="ti-form-radio"
                                id="switcher-icon-overlay">
                            <label for="switcher-icon-overlay"
                                class="text-defaultsize text-defaulttextcolor dark:text-defaulttextcolor/70 ms-2  font-semibold ">Icon
                                Overlay</label>
                        </div>
                        <div class="flex">
                            <input type="radio" name="sidemenu-layout-styles" class="ti-form-radio"
                                id="switcher-detached">
                            <label for="switcher-detached"
                                class="text-defaultsize text-defaulttextcolor dark:text-defaulttextcolor/70 ms-2  font-semibold ">Detached</label>
                        </div>
                        <div class="flex">
                            <input type="radio" name="sidemenu-layout-styles" class="ti-form-radio"
                                id="switcher-double-menu">
                            <label for="switcher-double-menu"
                                class="text-defaultsize text-defaulttextcolor dark:text-defaulttextcolor/70 ms-2  font-semibold">Double
                                Menu</label>
                        </div>
                    </div>
                    <div class="px-4 text-secondary text-xs"><b class="me-2">Note:</b>Navigation menu styles won't work
                        here.</div>
                </div>
                <div>
                    <p class="switcher-style-head">Page Styles:</p>
                    <div class="grid grid-cols-3  switcher-style">
                        <div class="flex">
                            <input type="radio" name="data-page-styles" class="ti-form-radio" id="switcher-regular"
                                checked>
                            <label for="switcher-regular"
                                class="text-defaultsize text-defaulttextcolor dark:text-defaulttextcolor/70 ms-2  font-semibold">Regular</label>
                        </div>
                        <div class="flex">
                            <input type="radio" name="data-page-styles" class="ti-form-radio" id="switcher-classic">
                            <label for="switcher-classic"
                                class="text-defaultsize text-defaulttextcolor dark:text-defaulttextcolor/70 ms-2  font-semibold">Classic</label>
                        </div>
                        <div class="flex">
                            <input type="radio" name="data-page-styles" class="ti-form-radio" id="switcher-modern">
                            <label for="switcher-modern"
                                class="text-defaultsize text-defaulttextcolor dark:text-defaulttextcolor/70 ms-2  font-semibold">
                                Modern</label>
                        </div>
                    </div>
                </div>
                <div>
                    <p class="switcher-style-head">Layout Width Styles:</p>
                    <div class="grid grid-cols-3 switcher-style">
                        <div class="flex">
                            <input type="radio" name="layout-width" class="ti-form-radio" id="switcher-full-width"
                                checked>
                            <label for="switcher-full-width"
                                class="text-defaultsize text-defaulttextcolor dark:text-defaulttextcolor/70 ms-2  font-semibold">FullWidth</label>
                        </div>
                        <div class="flex">
                            <input type="radio" name="layout-width" class="ti-form-radio" id="switcher-boxed">
                            <label for="switcher-boxed"
                                class="text-defaultsize text-defaulttextcolor dark:text-defaulttextcolor/70 ms-2  font-semibold">Boxed</label>
                        </div>
                    </div>
                </div>
                <div>
                    <p class="switcher-style-head">Menu Positions:</p>
                    <div class="grid grid-cols-3  switcher-style">
                        <div class="flex">
                            <input type="radio" name="data-menu-positions" class="ti-form-radio"
                                id="switcher-menu-fixed" checked>
                            <label for="switcher-menu-fixed"
                                class="text-defaultsize text-defaulttextcolor dark:text-defaulttextcolor/70 ms-2  font-semibold">Fixed</label>
                        </div>
                        <div class="flex">
                            <input type="radio" name="data-menu-positions" class="ti-form-radio"
                                id="switcher-menu-scroll">
                            <label for="switcher-menu-scroll"
                                class="text-defaultsize text-defaulttextcolor dark:text-defaulttextcolor/70 ms-2  font-semibold">Scrollable
                            </label>
                        </div>
                    </div>
                </div>
                <div>
                    <p class="switcher-style-head">Header Positions:</p>
                    <div class="grid grid-cols-3 switcher-style">
                        <div class="flex">
                            <input type="radio" name="data-header-positions" class="ti-form-radio"
                                id="switcher-header-fixed" checked>
                            <label for="switcher-header-fixed"
                                class="text-defaultsize text-defaulttextcolor dark:text-defaulttextcolor/70 ms-2  font-semibold">
                                Fixed</label>
                        </div>
                        <div class="flex">
                            <input type="radio" name="data-header-positions" class="ti-form-radio"
                                id="switcher-header-scroll">
                            <label for="switcher-header-scroll"
                                class="text-defaultsize text-defaulttextcolor dark:text-defaulttextcolor/70 ms-2  font-semibold">Scrollable
                            </label>
                        </div>
                    </div>
                </div>
                <div class="">
                    <p class="switcher-style-head">Loader:</p>
                    <div class="grid grid-cols-3 switcher-style">
                        <div class="flex">
                            <input type="radio" name="page-loader" class="ti-form-radio" id="switcher-loader-enable"
                                checked>
                            <label for="switcher-loader-enable"
                                class="text-defaultsize text-defaulttextcolor dark:text-defaulttextcolor/70 ms-2  font-semibold">
                                Enable</label>
                        </div>
                        <div class="flex">
                            <input type="radio" name="page-loader" class="ti-form-radio" id="switcher-loader-disable">
                            <label for="switcher-loader-disable"
                                class="text-defaultsize text-defaulttextcolor dark:text-defaulttextcolor/70 ms-2  font-semibold">Disable
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div id="switcher-2" class="hidden" role="tabpanel" aria-labelledby="switcher-item-2">
                <div class="theme-colors">
                    <p class="switcher-style-head">Menu Colors:</p>
                    <div class="flex switcher-style space-x-3 rtl:space-x-reverse">
                        <div class="hs-tooltip ti-main-tooltip ti-form-radio switch-select ">
                            <input class="hs-tooltip-toggle ti-form-radio color-input color-white" type="radio"
                                name="menu-colors" id="switcher-menu-light" checked>
                            <span
                                class="hs-tooltip-content ti-main-tooltip-content !py-1 !px-2 !bg-black text-xs font-medium !text-white shadow-sm dark:!bg-black"
                                role="tooltip">
                                Light Menu
                            </span>
                        </div>
                        <div class="hs-tooltip ti-main-tooltip ti-form-radio switch-select ">
                            <input class="hs-tooltip-toggle ti-form-radio color-input color-dark" type="radio"
                                name="menu-colors" id="switcher-menu-dark" checked>
                            <span
                                class="hs-tooltip-content ti-main-tooltip-content !py-1 !px-2 !bg-black text-xs font-medium !text-white shadow-sm dark:!bg-black"
                                role="tooltip">
                                Dark Menu
                            </span>
                        </div>
                        <div class="hs-tooltip ti-main-tooltip ti-form-radio switch-select ">
                            <input class="hs-tooltip-toggle ti-form-radio color-input color-primary" type="radio"
                                name="menu-colors" id="switcher-menu-primary">
                            <span
                                class="hs-tooltip-content ti-main-tooltip-content !py-1 !px-2 !bg-black text-xs font-medium !text-white shadow-sm dark:!bg-black"
                                role="tooltip">
                                Color Menu
                            </span>
                        </div>
                        <div class="hs-tooltip ti-main-tooltip ti-form-radio switch-select ">
                            <input class="hs-tooltip-toggle ti-form-radio color-input color-gradient" type="radio"
                                name="menu-colors" id="switcher-menu-gradient">
                            <span
                                class="hs-tooltip-content ti-main-tooltip-content !py-1 !px-2 !bg-black text-xs font-medium !text-white shadow-sm dark:!bg-black"
                                role="tooltip">
                                Gradient Menu
                            </span>
                        </div>
                        <div class="hs-tooltip ti-main-tooltip ti-form-radio switch-select ">
                            <input class="hs-tooltip-toggle ti-form-radio color-input color-transparent" type="radio"
                                name="menu-colors" id="switcher-menu-transparent">
                            <span
                                class="hs-tooltip-content ti-main-tooltip-content !py-1 !px-2 !bg-black text-xs font-medium !text-white shadow-sm dark:!bg-black"
                                role="tooltip">
                                Transparent Menu
                            </span>
                        </div>
                    </div>
                    <div class="px-4 text-[#8c9097] dark:text-white/50 text-[.6875rem]"><b class="me-2">Note:</b>If you
                        want to change color Menu
                        dynamically
                        change from below Theme Primary color picker.</div>
                </div>
                <div class="theme-colors">
                    <p class="switcher-style-head">Header Colors:</p>
                    <div class="flex switcher-style space-x-3 rtl:space-x-reverse">
                        <div class="hs-tooltip ti-main-tooltip ti-form-radio switch-select ">
                            <input class="hs-tooltip-toggle ti-form-radio color-input color-white !border" type="radio"
                                name="header-colors" id="switcher-header-light" checked>
                            <span
                                class="hs-tooltip-content ti-main-tooltip-content !py-1 !px-2 !bg-black text-xs font-medium !text-white shadow-sm dark:!bg-black"
                                role="tooltip">
                                Light Header
                            </span>
                        </div>
                        <div class="hs-tooltip ti-main-tooltip ti-form-radio switch-select ">
                            <input class="hs-tooltip-toggle ti-form-radio color-input color-dark" type="radio"
                                name="header-colors" id="switcher-header-dark">
                            <span
                                class="hs-tooltip-content ti-main-tooltip-content !py-1 !px-2 !bg-black text-xs font-medium !text-white shadow-sm dark:!bg-black"
                                role="tooltip">
                                Dark Header
                            </span>
                        </div>
                        <div class="hs-tooltip ti-main-tooltip ti-form-radio switch-select ">
                            <input class="hs-tooltip-toggle ti-form-radio color-input color-primary" type="radio"
                                name="header-colors" id="switcher-header-primary">
                            <span
                                class="hs-tooltip-content ti-main-tooltip-content !py-1 !px-2 !bg-black text-xs font-medium !text-white shadow-sm dark:!bg-black"
                                role="tooltip">
                                Color Header
                            </span>
                        </div>
                        <div class="hs-tooltip ti-main-tooltip ti-form-radio switch-select ">
                            <input class="hs-tooltip-toggle ti-form-radio color-input color-gradient" type="radio"
                                name="header-colors" id="switcher-header-gradient">
                            <span
                                class="hs-tooltip-content ti-main-tooltip-content !py-1 !px-2 !bg-black text-xs font-medium !text-white shadow-sm dark:!bg-black"
                                role="tooltip">
                                Gradient Header
                            </span>
                        </div>
                        <div class="hs-tooltip ti-main-tooltip ti-form-radio switch-select ">
                            <input class="hs-tooltip-toggle ti-form-radio color-input color-transparent" type="radio"
                                name="header-colors" id="switcher-header-transparent">
                            <span
                                class="hs-tooltip-content ti-main-tooltip-content !py-1 !px-2 !bg-black text-xs font-medium !text-white shadow-sm dark:!bg-black"
                                role="tooltip">
                                Transparent Header
                            </span>
                        </div>
                    </div>
                    <div class="px-4 text-[#8c9097] dark:text-white/50 text-[.6875rem]"><b class="me-2">Note:</b>If you
                        want to change color
                        Header dynamically
                        change from below Theme Primary color picker.</div>
                </div>
                <div class="theme-colors">
                    <p class="switcher-style-head">Theme Primary:</p>
                    <div class="flex switcher-style space-x-3 rtl:space-x-reverse">
                        <div class="ti-form-radio switch-select">
                            <input class="ti-form-radio color-input color-primary-1" type="radio" name="theme-primary"
                                id="switcher-primary">
                        </div>
                        <div class="ti-form-radio switch-select">
                            <input class="ti-form-radio color-input color-primary-2" type="radio" name="theme-primary"
                                id="switcher-primary1">
                        </div>
                        <div class="ti-form-radio switch-select">
                            <input class="ti-form-radio color-input color-primary-3" type="radio" name="theme-primary"
                                id="switcher-primary2">
                        </div>
                        <div class="ti-form-radio switch-select">
                            <input class="ti-form-radio color-input color-primary-4" type="radio" name="theme-primary"
                                id="switcher-primary3">
                        </div>
                        <div class="ti-form-radio switch-select">
                            <input class="ti-form-radio color-input color-primary-5" type="radio" name="theme-primary"
                                id="switcher-primary4">
                        </div>
                        <div class="ti-form-radio switch-select ps-0 mt-1 color-primary-light">
                            <div class="theme-container-primary"></div>
                            <div class="pickr-container-primary"></div>
                        </div>
                    </div>
                </div>
                <div class="theme-colors">
                    <p class="switcher-style-head">Theme Background:</p>
                    <div class="flex switcher-style space-x-3 rtl:space-x-reverse">
                        <div class="ti-form-radio switch-select">
                            <input class="ti-form-radio color-input color-bg-1" type="radio" name="theme-background"
                                id="switcher-background">
                        </div>
                        <div class="ti-form-radio switch-select">
                            <input class="ti-form-radio color-input color-bg-2" type="radio" name="theme-background"
                                id="switcher-background1">
                        </div>
                        <div class="ti-form-radio switch-select">
                            <input class="ti-form-radio color-input color-bg-3" type="radio" name="theme-background"
                                id="switcher-background2">
                        </div>
                        <div class="ti-form-radio switch-select">
                            <input class="ti-form-radio color-input color-bg-4" type="radio" name="theme-background"
                                id="switcher-background3">
                        </div>
                        <div class="ti-form-radio switch-select">
                            <input class="ti-form-radio color-input color-bg-5" type="radio" name="theme-background"
                                id="switcher-background4">
                        </div>
                        <div class="ti-form-radio switch-select ps-0 mt-1 color-bg-transparent">
                            <div class="theme-container-background hidden"></div>
                            <div class="pickr-container-background"></div>
                        </div>
                    </div>
                </div>
                <div class="menu-image theme-colors">
                    <p class="switcher-style-head">Menu With Background Image:</p>
                    <div class="flex switcher-style space-x-3 rtl:space-x-reverse flex-wrap gap-3">
                        <div class="ti-form-radio switch-select">
                            <input class="ti-form-radio bgimage-input bg-img1" type="radio" name="theme-images"
                                id="switcher-bg-img">
                        </div>
                        <div class="ti-form-radio switch-select">
                            <input class="ti-form-radio bgimage-input bg-img2" type="radio" name="theme-images"
                                id="switcher-bg-img1">
                        </div>
                        <div class="ti-form-radio switch-select">
                            <input class="ti-form-radio bgimage-input bg-img3" type="radio" name="theme-images"
                                id="switcher-bg-img2">
                        </div>
                        <div class="ti-form-radio switch-select">
                            <input class="ti-form-radio bgimage-input bg-img4" type="radio" name="theme-images"
                                id="switcher-bg-img3">
                        </div>
                        <div class="ti-form-radio switch-select">
                            <input class="ti-form-radio bgimage-input bg-img5" type="radio" name="theme-images"
                                id="switcher-bg-img4">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ti-offcanvas-footer sm:flex justify-between">
            <a href="https://themeforest.net/item/ynex-php-tailwind-css-admin-dashboard-template/49911130"
                target="_blank" class="w-full ti-btn ti-btn-primary-full m-1">Buy Now</a>
            <a href="https://themeforest.net/user/spruko/portfolio" target="_blank"
                class="w-full ti-btn ti-btn-secondary-full m-1">Our Portfolio</a>
            <a href="javascript:void(0);" id="reset-all" class="w-full ti-btn ti-btn-danger-full m-1">Reset</a>
        </div>
    </div>
    <!-- END SWITCHER -->

    <!-- LOADER -->
    <div id="loader">
        <img src="https://php.spruko.com/tailwind/ynex/ynex/assets/images/media/loader.svg" alt="">
    </div>
    <!-- END LOADER -->

    <!-- PAGE -->
    <div class="page">

        <header class="app-header">
            <nav class="main-header !h-[3.75rem]" aria-label="Global">
                <div class="main-header-container ps-[0.725rem] pe-[1rem] ">

                    <div class="header-content-left">
                        <!-- Start::header-element -->
                        <div class="header-element">
                            <div class="horizontal-logo">
                                <a href="index.html" class="header-logo">
                                    <img src="assets/images/brand-logos/desktop-logo.png" alt="logo"
                                        class="desktop-logo">
                                    <img src="assets/images/brand-logos/toggle-logo.png" alt="logo" class="toggle-logo">
                                    <img src="assets/images/brand-logos/desktop-dark.png" alt="logo"
                                        class="desktop-dark">
                                    <img src="assets/images/brand-logos/toggle-dark.png" alt="logo" class="toggle-dark">
                                    <img src="assets/images/brand-logos/desktop-white.png" alt="logo"
                                        class="desktop-white">
                                    <img src="assets/images/brand-logos/toggle-white.png" alt="logo"
                                        class="toggle-white">
                                </a>
                            </div>
                        </div>
                        <!-- End::header-element -->

                        <!-- Start::header-element -->
                        <div class="header-element md:px-[0.325rem] !items-center">
                            <!-- Start::header-link -->
                            <a aria-label="Hide Sidebar"
                                class="sidemenu-toggle animated-arrow  hor-toggle horizontal-navtoggle inline-flex items-center"
                                href="javascript:void(0);"><span></span></a>
                            <!-- End::header-link -->
                        </div>
                        <!-- End::header-element -->
                    </div>

                    <div class="header-content-right">

                        <div class="header-element py-[1rem] md:px-[0.65rem] px-2 header-search">
                            <button aria-label="button" type="button" data-hs-overlay="#search-modal"
                                class="inline-flex flex-shrink-0 justify-center items-center gap-2  rounded-full font-medium focus:ring-offset-0 focus:ring-offset-white transition-all text-xs dark:bg-bgdark dark:hover:bg-black/20 dark:text-[#8c9097] dark:text-white/50 dark:hover:text-white dark:focus:ring-white/10 dark:focus:ring-offset-white/10">
                                <i class="bx bx-search-alt-2 header-link-icon"></i>
                            </button>
                        </div>

                        <!-- start header country -->
                        <div
                            class="header-element py-[1rem] md:px-[0.65rem] px-2  header-country hs-dropdown ti-dropdown  hidden sm:block [--placement:bottom-left]">
                            <button id="dropdown-flag" type="button"
                                class="hs-dropdown-toggle ti-dropdown-toggle !p-0 flex-shrink-0  !border-0 !rounded-full !shadow-none">
                                <img src="assets/images/flags/us_flag.jpg" alt="flag-img"
                                    class="h-[1.25rem] w-[1.25rem] rounded-full">
                            </button>

                            <div class="hs-dropdown-menu ti-dropdown-menu min-w-[10rem] hidden !-mt-3"
                                aria-labelledby="dropdown-flag">
                                <div class="ti-dropdown-divider divide-y divide-gray-200 dark:divide-white/10">
                                    <div class="py-2 first:pt-0 last:pb-0">
                                        <div class="ti-dropdown-item !p-[0.65rem] ">
                                            <div class="flex items-center space-x-2 rtl:space-x-reverse w-full">
                                                <div class="h-[1.375rem] flex items-center w-[1.375rem] rounded-full">
                                                    <img src="assets/images/flags/us_flag.jpg" alt="flag-img"
                                                        class="h-[1rem] w-[1rem] rounded-full">
                                                </div>
                                                <div>
                                                    <p class="!text-[0.8125rem] font-medium">
                                                        English
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ti-dropdown-item !p-[0.65rem]">
                                            <div class="flex items-center space-x-2 rtl:space-x-reverse w-full">
                                                <div class="h-[1.375rem] w-[1.375rem] flex items-center rounded-full">
                                                    <img src="assets/images/flags/spain_flag.jpg" alt="flag-img"
                                                        class="h-[1rem] w-[1rem] rounded-full">
                                                </div>
                                                <div>
                                                    <p class="!text-[0.8125rem] font-medium">
                                                        Spanish
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ti-dropdown-item !p-[0.65rem]">
                                            <div class="flex items-center space-x-2 rtl:space-x-reverse w-full">
                                                <div class="h-[1.375rem] w-[1.375rem] flex items-center rounded-full">
                                                    <img src="assets/images/flags/french_flag.jpg" alt="flag-img"
                                                        class="h-[1rem] w-[1rem] rounded-full">
                                                </div>
                                                <div>
                                                    <p class="!text-[0.8125rem] font-medium">
                                                        French
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ti-dropdown-item !p-[0.65rem]">
                                            <div class="flex items-center space-x-2 rtl:space-x-reverse w-full">
                                                <div class="h-[1.375rem] w-[1.375rem] flex items-center rounded-full">
                                                    <img src="assets/images/flags/germany_flag.jpg" alt="flag-img"
                                                        class="h-[1rem] w-[1rem] rounded-full">
                                                </div>
                                                <div>
                                                    <p class="!text-[0.8125rem] font-medium">
                                                        German
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ti-dropdown-item !p-[0.65rem]">
                                            <div class="flex items-center space-x-2 rtl:space-x-reverse w-full">
                                                <div class="h-[1.375rem] w-[1.375rem] flex items-center rounded-full">
                                                    <img src="assets/images/flags/italy_flag.jpg" alt="flag-img"
                                                        class="h-[1rem] w-[1rem] rounded-full">
                                                </div>
                                                <div>
                                                    <p class="!text-[0.8125rem] font-medium">
                                                        Italian
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ti-dropdown-item !p-[0.65rem]">
                                            <div class="flex items-center space-x-2 rtl:space-x-reverse w-full">
                                                <div class="h-[1.375rem] w-[1.375rem] flex items-center  rounded-sm">
                                                    <img src="assets/images/flags/russia_flag.jpg" alt="flag-img"
                                                        class="h-[1rem] w-[1rem] rounded-full">
                                                </div>
                                                <div>
                                                    <p class="!text-[0.8125rem] font-medium">
                                                        Russian
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end header country -->

                        <!-- light and dark theme -->
                        <div
                            class="header-element header-theme-mode hidden !items-center sm:block !py-[1rem] md:!px-[0.65rem] px-2">
                            <a aria-label="anchor"
                                class="hs-dark-mode-active:hidden flex hs-dark-mode group flex-shrink-0 justify-center items-center gap-2  rounded-full font-medium transition-all text-xs dark:bg-bgdark dark:hover:bg-black/20 dark:text-[#8c9097] dark:text-white/50 dark:hover:text-white dark:focus:ring-white/10 dark:focus:ring-offset-white/10"
                                href="javascript:void(0);" data-hs-theme-click-value="dark">
                                <i class="bx bx-moon header-link-icon"></i>
                            </a>
                            <a aria-label="anchor"
                                class="hs-dark-mode-active:flex hidden hs-dark-mode group flex-shrink-0 justify-center items-center gap-2  rounded-full font-medium text-defaulttextcolor  transition-all text-xs dark:bg-bodybg dark:bg-bgdark dark:hover:bg-black/20 dark:text-[#8c9097] dark:text-white/50 dark:hover:text-white dark:focus:ring-white/10 dark:focus:ring-offset-white/10"
                                href="javascript:void(0);" data-hs-theme-click-value="light">
                                <i class="bx bx-sun header-link-icon"></i>
                            </a>
                        </div>
                        <!-- End light and dark theme -->

                        <!-- Header Cart item -->
                        <div
                            class="header-element cart-dropdown hs-dropdown ti-dropdown md:!block !hidden py-[1rem] md:px-[0.65rem] px-2 [--placement:bottom-left]">
                            <button id="dropdown-cart" type="button"
                                class="hs-dropdown-toggle relative ti-dropdown-toggle !p-0 !border-0 flex-shrink-0  !rounded-full !shadow-none align-middle text-xs">
                                <i class="bx bx-cart header-link-icon"></i>
                                <span class="flex absolute h-5 w-5 -top-[0.25rem] end-0 -me-[0.6rem]">
                                    <span
                                        class="relative inline-flex rounded-full h-[14.7px] w-[14px] text-[0.625rem] bg-primary text-white justify-center items-center"
                                        id="cart-icon-badge">5</span>
                                </span>
                            </button>

                            <div class="main-header-dropdown bg-white !-mt-3 !p-0 hs-dropdown-menu ti-dropdown-menu w-[22rem] border-0 border-defaultborder hidden"
                                aria-labelledby="dropdown-cart">

                                <div
                                    class="ti-dropdown-header !bg-transparent flex justify-between items-center !m-0 !p-4">
                                    <p
                                        class="text-defaulttextcolor  !text-[1.0625rem] dark:text-[#8c9097] dark:text-white/50 font-semibold">
                                        Cart Items</p>
                                    <a href="javascript:void(0)"
                                        class="font-[600] py-[0.25/2rem] px-[0.45rem] rounded-[0.25rem] bg-success/10 text-success text-[0.75em] "
                                        id="cart-data">5 Items</a>
                                </div>
                                <div>
                                    <hr class="dropdown-divider dark:border-white/10">
                                </div>
                                <ul class="list-none mb-0" id="header-cart-items-scroll">
                                    <li
                                        class="ti-dropdown-item border-b dark:border-defaultborder/10 border-defaultborder ">
                                        <div class="flex items-start cart-dropdown-item">

                                            <img src="assets/images/ecommerce/jpg/1.jpg" alt="img"
                                                class="!h-[1.75rem] !w-[1.75rem] leading-[1.75rem] text-[0.65rem] rounded-[50%] br-5 me-3">

                                            <div class="grow">
                                                <div class="flex items-start justify-between mb-0">
                                                    <div
                                                        class="mb-0 !text-[0.8125rem] text-[#232323] font-semibold dark:text-[#8c9097] dark:text-white/50">
                                                        <a href="cart.html">Some Thing Phone</a>
                                                    </div>

                                                    <div class="inline-flex">
                                                        <span
                                                            class="text-black mb-1 dark:text-white !font-medium">$1,299.00</span>
                                                        <a aria-label="anchor" href="javascript:void(0);"
                                                            class="header-cart-remove ltr:float-right rtl:float-left dropdown-item-close"><i
                                                                class="ti ti-trash"></i></a>
                                                    </div>
                                                </div>
                                                <div class="min-w-fit flex  items-start justify-between">
                                                    <ul class="header-product-item dark:text-white/50 flex">
                                                        <li>Metallic Blue</li>
                                                        <li>6gb Ram</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    <li
                                        class="ti-dropdown-item border-b dark:border-defaultborder/10 border-defaultborder">
                                        <div class="flex items-start cart-dropdown-item">
                                            <img src="assets/images/ecommerce/jpg/3.jpg" alt="img"
                                                class="!h-[1.75rem] !w-[1.75rem] leading-[1.75rem] text-[0.65rem]  rounded-[50%] br-5 me-3">
                                            <div class="grow">
                                                <div class="flex items-start justify-between mb-0">
                                                    <div
                                                        class="mb-0 text-[0.8125rem] text-[#232323] dark:text-[#8c9097] dark:text-white/50 font-semibold">
                                                        <a href="cart.html">Stop Watch</a>
                                                    </div>
                                                    <div class="inline-flex">
                                                        <span
                                                            class="text-black dark:text-white !font-medium mb-1">$179.29</span>
                                                        <a aria-label="anchor" href="javascript:void(0);"
                                                            class="header-cart-remove ltr:float-right rtl:float-left dropdown-item-close"><i
                                                                class="ti ti-trash"></i></a>
                                                    </div>
                                                </div>
                                                <div class="min-w-fit flex items-start justify-between">
                                                    <ul class="header-product-item">
                                                        <li>Analog</li>
                                                        <li><span
                                                                class="font-[600] py-[0.25rem] px-[0.45rem] rounded-[0.25rem] bg-pink/10 text-pink text-[0.625rem]">Free
                                                                shipping</span></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li
                                        class="ti-dropdown-item border-b dark:border-defaultborder/10 border-defaultborder">
                                        <div class="flex items-start cart-dropdown-item">
                                            <img src="assets/images/ecommerce/jpg/5.jpg" alt="img"
                                                class="!h-[1.75rem] !w-[1.75rem] leading-[1.75rem] text-[0.65rem]  rounded-[50%] br-5 me-3">
                                            <div class="grow">
                                                <div class="flex items-start justify-between mb-0">
                                                    <div
                                                        class="mb-0 text-[0.8125rem] text-[#232323] font-semibold dark:text-[#8c9097] dark:text-white/50">
                                                        <a href="cart.html">Photo Frame</a>
                                                    </div>
                                                    <div class="inline-flex">
                                                        <span
                                                            class="text-black !font-medium mb-1 dark:text-white">$29.00</span>
                                                        <a aria-label="anchor" href="javascript:void(0);"
                                                            class="header-cart-remove ltr:float-right rtl:float-left dropdown-item-close"><i
                                                                class="ti ti-trash"></i></a>
                                                    </div>
                                                </div>
                                                <div class="min-w-fit flex items-start justify-between">
                                                    <ul class="header-product-item flex">
                                                        <li>Decorative</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li
                                        class="ti-dropdown-item border-b dark:border-defaultborder/10 border-defaultborder">
                                        <div class="flex items-start cart-dropdown-item">
                                            <img src="assets/images/ecommerce/jpg/4.jpg" alt="img"
                                                class="!h-[1.75rem] !w-[1.75rem] leading-[1.75rem] text-[0.65rem]  rounded-[50%] br-5 me-3">
                                            <div class="grow">
                                                <div class="flex items-start justify-between mb-0">
                                                    <div
                                                        class="mb-0 text-[0.8125rem] text-[#232323] font-semibold dark:text-[#8c9097] dark:text-white/50">
                                                        <a href="cart.html">Kikon Camera</a>
                                                    </div>
                                                    <div class="inline-flex">
                                                        <span
                                                            class="text-black !font-medium mb-1 dark:text-white">$4,999.00</span>
                                                        <a aria-label="anchor" href="javascript:void(0);"
                                                            class="header-cart-remove ltr:float-right rtl:float-left dropdown-item-close"><i
                                                                class="ti ti-trash"></i></a>
                                                    </div>
                                                </div>
                                                <div class="min-w-fit flex items-start justify-between">
                                                    <ul class="header-product-item flex">
                                                        <li>Black</li>
                                                        <li>50MM</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="ti-dropdown-item">
                                        <div class="flex items-start cart-dropdown-item">
                                            <img src="assets/images/ecommerce/jpg/6.jpg" alt="img"
                                                class="!h-[1.75rem] !w-[1.75rem] leading-[1.75rem] text-[0.65rem]  rounded-[50%] br-5 me-3">
                                            <div class="grow">
                                                <div class="flex items-start justify-between mb-0">
                                                    <div
                                                        class="mb-0 text-[0.8125rem] text-[#232323] font-semibold dark:text-[#8c9097] dark:text-white/50">
                                                        <a href="cart.html">Canvas Shoes</a>
                                                    </div>
                                                    <div class="inline-flex">
                                                        <span
                                                            class="text-black !font-medium mb-1 dark:text-white">$129.00</span>
                                                        <a aria-label="anchor" href="javascript:void(0);"
                                                            class="header-cart-remove ltr:float-right rtl:float-left dropdown-item-close"><i
                                                                class="ti ti-trash"></i></a>
                                                    </div>
                                                </div>
                                                <div class="flex items-start justify-between">
                                                    <ul class="header-product-item flex">
                                                        <li>Gray</li>
                                                        <li>Sports</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <div class="p-3 empty-header-item border-t">
                                    <div class="grid">
                                        <a href="checkout.html" class="w-full ti-btn ti-btn-primary-full p-2">Proceed to
                                            checkout</a>
                                    </div>
                                </div>
                                <div class="p-[3rem] empty-item hidden">
                                    <div class="text-center">
                                        <span
                                            class="!w-[4rem] !h-[4rem] !leading-[4rem] rounded-[50%] avatar bg-warning/10 !text-warning">
                                            <i class="ri-shopping-cart-2-line text-[2rem]"></i>
                                        </span>
                                        <h6
                                            class="font-bold mb-1 mt-3 text-[1rem] text-defaulttextcolor dark:text-[#8c9097] dark:text-white/50">
                                            Your Cart is Empty</h6>
                                        <span
                                            class="mb-3 !font-normal text-[0.8125rem] block text-defaulttextcolor dark:text-[#8c9097] dark:text-white/50">Add
                                            some items to make me happy :)</span>
                                        <a href="products.html"
                                            class="ti-btn ti-btn-primary btn-wave ti-btn-wave btn-sm m-1 !text-[0.75rem] !py-[0.25rem] !px-[0.5rem]"
                                            data-abc="true">continue shopping <i class="bi bi-arrow-right ms-1"></i></a>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!--End Header cart item  -->

                        <!--Header Notifictaion -->
                        <div
                            class="header-element py-[1rem] md:px-[0.65rem] px-2 notifications-dropdown header-notification hs-dropdown ti-dropdown !hidden md:!block [--placement:bottom-left]">
                            <button id="dropdown-notification" type="button"
                                class="hs-dropdown-toggle relative ti-dropdown-toggle !p-0 !border-0 flex-shrink-0  !rounded-full !shadow-none align-middle text-xs">
                                <i class="bx bx-bell header-link-icon  text-[1.125rem]"></i>
                                <span class="flex absolute h-5 w-5 -top-[0.25rem] end-0  -me-[0.6rem]">
                                    <span
                                        class="animate-slow-ping absolute inline-flex -top-[2px] -start-[2px] h-full w-full rounded-full bg-secondary/40 opacity-75"></span>
                                    <span
                                        class="relative inline-flex justify-center items-center rounded-full  h-[14.7px] w-[14px] bg-secondary text-[0.625rem] text-white"
                                        id="notification-icon-badge">5</span>
                                </span>
                            </button>
                            <div class="main-header-dropdown !-mt-3 !p-0 hs-dropdown-menu ti-dropdown-menu bg-white !w-[22rem] border-0 border-defaultborder hidden !m-0"
                                aria-labelledby="dropdown-notification">

                                <div
                                    class="ti-dropdown-header !m-0 !p-4 !bg-transparent flex justify-between items-center">
                                    <p
                                        class="mb-0 text-[1.0625rem] text-defaulttextcolor font-semibold dark:text-[#8c9097] dark:text-white/50">
                                        Notifications</p>
                                    <span
                                        class="text-[0.75em] py-[0.25rem/2] px-[0.45rem] font-[600] rounded-sm bg-secondary/10 text-secondary"
                                        id="notifiation-data">5 Unread</span>
                                </div>
                                <div class="dropdown-divider"></div>
                                <ul class="list-none !m-0 !p-0 end-0" id="header-notification-scroll">
                                    <li class="ti-dropdown-item dropdown-item ">
                                        <div class="flex items-start">
                                            <div class="pe-2">
                                                <span
                                                    class="inline-flex text-primary justify-center items-center !w-[2.5rem] !h-[2.5rem] !leading-[2.5rem] !text-[0.8rem] !bg-primary/10 !rounded-[50%]"><i
                                                        class="ti ti-gift text-[1.125rem]"></i></span>
                                            </div>
                                            <div class="grow flex items-center justify-between">
                                                <div>
                                                    <p
                                                        class="mb-0 text-defaulttextcolor dark:text-[#8c9097] dark:text-white/50 text-[0.8125rem] font-semibold">
                                                        <a href="notifications.html">Your Order Has Been Shipped</a></p>
                                                    <span
                                                        class="text-[#8c9097] dark:text-white/50 font-normal text-[0.75rem] header-notification-text">Order
                                                        No: 123456
                                                        Has Shipped To Your Delivery Address</span>
                                                </div>
                                                <div>
                                                    <a aria-label="anchor" href="javascript:void(0);"
                                                        class="min-w-fit text-[#8c9097] dark:text-white/50 me-1 dropdown-item-close1"><i
                                                            class="ti ti-x text-[1rem]"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="ti-dropdown-item dropdown-item !flex-none">
                                        <div class="flex items-start">
                                            <div class="pe-2">
                                                <span
                                                    class="inline-flex text-secondary justify-center items-center !w-[2.5rem] !h-[2.5rem] !leading-[2.5rem] !text-[0.8rem]  bg-secondary/10 rounded-[50%]"><i
                                                        class="ti ti-discount-2 text-[1.125rem]"></i></span>
                                            </div>
                                            <div class="grow flex items-center justify-between">
                                                <div>
                                                    <p
                                                        class="mb-0 text-defaulttextcolor dark:text-[#8c9097] dark:text-white/50 text-[0.8125rem]  font-semibold">
                                                        <a href="notifications.html">Discount Available</a></p>
                                                    <span
                                                        class="text-[#8c9097] dark:text-white/50 font-normal text-[0.75rem] header-notification-text">Discount
                                                        Available On Selected Products</span>
                                                </div>
                                                <div>
                                                    <a aria-label="anchor" href="javascript:void(0);"
                                                        class="min-w-fit  text-[#8c9097] dark:text-white/50 me-1 dropdown-item-close1"><i
                                                            class="ti ti-x text-[1rem]"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="ti-dropdown-item dropdown-item">
                                        <div class="flex items-start">
                                            <div class="pe-2">
                                                <span
                                                    class="inline-flex text-pink justify-center items-center !w-[2.5rem] !h-[2.5rem] !leading-[2.5rem] !text-[0.8rem]  bg-pink/10 rounded-[50%]"><i
                                                        class="ti ti-user-check text-[1.125rem]"></i></span>
                                            </div>
                                            <div class="grow flex items-center justify-between">
                                                <div>
                                                    <p
                                                        class="mb-0 text-defaulttextcolor dark:text-[#8c9097] dark:text-white/50 text-[0.8125rem]  font-semibold">
                                                        <a href="notifications.html">Account Has Been Verified</a></p>
                                                    <span
                                                        class="text-[#8c9097] dark:text-white/50 font-normal text-[0.75rem] header-notification-text">Your
                                                        Account Has
                                                        Been Verified Sucessfully</span>
                                                </div>
                                                <div>
                                                    <a aria-label="anchor" href="javascript:void(0);"
                                                        class="min-w-fit text-[#8c9097] dark:text-white/50 me-1 dropdown-item-close1"><i
                                                            class="ti ti-x text-[1rem]"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="ti-dropdown-item dropdown-item">
                                        <div class="flex items-start">
                                            <div class="pe-2">
                                                <span
                                                    class="inline-flex text-warning justify-center items-center !w-[2.5rem] !h-[2.5rem] !leading-[2.5rem] !text-[0.8rem]  bg-warning/10 rounded-[50%]"><i
                                                        class="ti ti-circle-check text-[1.125rem]"></i></span>
                                            </div>
                                            <div class="grow flex items-center justify-between">
                                                <div>
                                                    <p
                                                        class="mb-0 text-defaulttextcolor dark:text-[#8c9097] dark:text-white/50  text-[0.8125rem]  font-semibold">
                                                        <a href="notifications.html">Order Placed <span
                                                                class="text-warning">ID: #1116773</span></a></p>
                                                    <span
                                                        class="text-[#8c9097] dark:text-white/50 font-normal text-[0.75rem] header-notification-text">Order
                                                        Placed
                                                        Successfully</span>
                                                </div>
                                                <div>
                                                    <a aria-label="anchor" href="javascript:void(0);"
                                                        class="min-w-fit text-[#8c9097] dark:text-white/50 me-1 dropdown-item-close1"><i
                                                            class="ti ti-x text-[1rem]"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="ti-dropdown-item dropdown-item">
                                        <div class="flex items-start">
                                            <div class="pe-2">
                                                <span
                                                    class="inline-flex text-success justify-center items-center !w-[2.5rem] !h-[2.5rem] !leading-[2.5rem] !text-[0.8rem]  bg-success/10 rounded-[50%]"><i
                                                        class="ti ti-clock text-[1.125rem]"></i></span>
                                            </div>
                                            <div class="grow flex items-center justify-between">
                                                <div>
                                                    <p
                                                        class="mb-0 text-defaulttextcolor dark:text-[#8c9097] dark:text-white/50  text-[0.8125rem]  font-semibold">
                                                        <a href="notifications.html">Order Delayed <span
                                                                class="text-success">ID: 7731116</span></a></p>
                                                    <span
                                                        class="text-[#8c9097] dark:text-white/50 font-normal text-[0.75rem] header-notification-text">Order
                                                        Delayed
                                                        Unfortunately</span>
                                                </div>
                                                <div>
                                                    <a aria-label="anchor" href="javascript:void(0);"
                                                        class="min-w-fit text-[#8c9097] dark:text-white/50 me-1 dropdown-item-close1"><i
                                                            class="ti ti-x text-[1rem]"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>

                                <div class="p-4 empty-header-item1 border-t mt-2">
                                    <div class="grid">
                                        <a href="notifications.html"
                                            class="ti-btn ti-btn-primary-full !m-0 w-full p-2">View All</a>
                                    </div>
                                </div>
                                <div class="p-[3rem] empty-item1 hidden">
                                    <div class="text-center">
                                        <span
                                            class="!h-[4rem]  !w-[4rem] avatar !leading-[4rem] !rounded-full !bg-secondary/10 !text-secondary">
                                            <i class="ri-notification-off-line text-[2rem]  "></i>
                                        </span>
                                        <h6
                                            class="font-semibold mt-3 text-defaulttextcolor dark:text-[#8c9097] dark:text-white/50 text-[1rem]">
                                            No New Notifications</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End Header Notifictaion -->

                        <!-- Related Apps -->
                        <div
                            class="header-element header-apps dark:text-[#8c9097] dark:text-white/50 py-[1rem] md:px-[0.65rem] px-2 hs-dropdown ti-dropdown md:!block !hidden [--placement:bottom-left]">

                            <button aria-label="button" id="dropdown-apps" type="button"
                                class="hs-dropdown-toggle ti-dropdown-toggle !p-0 !border-0 flex-shrink-0  !rounded-full !shadow-none text-xs">
                                <i class="bx bx-grid-alt header-link-icon text-[1.125rem]"></i>
                            </button>

                            <div class="main-header-dropdown !-mt-3 hs-dropdown-menu ti-dropdown-menu !w-[22rem] border-0 border-defaultborder   hidden"
                                aria-labelledby="dropdown-apps">

                                <div class="p-4">
                                    <div class="flex items-center justify-between">
                                        <p
                                            class="mb-0 text-defaulttextcolor text-[1.0625rem] dark:text-[#8c9097] dark:text-white/50 font-semibold">
                                            Related Apps</p>
                                    </div>
                                </div>
                                <div class="dropdown-divider mb-0"></div>
                                <div class="ti-dropdown-divider divide-y divide-gray-200 dark:divide-white/10 main-header-shortcuts p-2"
                                    id="header-shortcut-scroll">
                                    <div class="grid grid-cols-3 gap-2">
                                        <div class="">
                                            <a href="javascript:void(0);"
                                                class="p-4 items-center related-app block text-center rounded-sm hover:bg-gray-50 dark:hover:bg-black/20">
                                                <div>
                                                    <img src="assets/images/apps/figma.png" alt="figma"
                                                        class="!h-[1.75rem] !w-[1.75rem] text-2xl text-primary flex justify-center items-center mx-auto">
                                                    <div
                                                        class="text-[0.75rem] text-defaulttextcolor dark:text-[#8c9097] dark:text-white/50">
                                                        Figma</div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="">
                                            <a href="javascript:void(0);"
                                                class="p-4 items-center related-app block text-center rounded-sm hover:bg-gray-50 dark:hover:bg-black/20">
                                                <img src="assets/images/apps/microsoft-powerpoint.png" alt="miscrosoft"
                                                    class="leading-[1.75] text-2xl !h-[1.75rem] !w-[1.75rem] align-middle flex justify-center mx-auto">
                                                <div
                                                    class="text-[0.75rem] text-defaulttextcolor dark:text-[#8c9097] dark:text-white/50">
                                                    Power Point</div>
                                            </a>
                                        </div>
                                        <div class="">
                                            <a href="javascript:void(0);"
                                                class="p-4 items-center related-app block text-center rounded-sm hover:bg-gray-50 dark:hover:bg-black/20">
                                                <img src="assets/images/apps/microsoft-word.png" alt="miscrodoftword"
                                                    class="leading-none
                                                    text-2xl !h-[1.75rem] !w-[1.75rem] align-middle flex justify-center mx-auto">
                                                <div
                                                    class="text-[0.75rem] text-defaulttextcolor dark:text-[#8c9097] dark:text-white/50">
                                                    MS Word</div>
                                            </a>
                                        </div>
                                        <div class="">
                                            <a href="javascript:void(0);"
                                                class="p-4 items-center related-app block text-center rounded-sm hover:bg-gray-50 dark:hover:bg-black/20">
                                                <img src="assets/images/apps/calender.png" alt="calander"
                                                    class="leading-none text-2xl !h-[1.75rem] !w-[1.75rem] align-middle flex justify-center mx-auto">
                                                <div
                                                    class="text-[0.75rem] text-defaulttextcolor dark:text-[#8c9097] dark:text-white/50">
                                                    Calendar</div>
                                            </a>
                                        </div>
                                        <div class="">
                                            <a href="javascript:void(0);"
                                                class="p-4 items-center related-app block text-center rounded-sm hover:bg-gray-50 dark:hover:bg-black/20">
                                                <img src="assets/images/apps/sketch.png" alt="apps"
                                                    class="leading-none text-2xl !h-[1.75rem] !w-[1.75rem] align-middle flex justify-center mx-auto">
                                                <div
                                                    class="text-[0.75rem] text-defaulttextcolor dark:text-[#8c9097] dark:text-white/50">
                                                    Sketch</div>
                                            </a>
                                        </div>
                                        <div class="">
                                            <a href="javascript:void(0);"
                                                class="p-4 items-center related-app block text-center rounded-sm hover:bg-gray-50 dark:hover:bg-black/20">
                                                <img src="assets/images/apps/google-docs.png" alt="docs"
                                                    class="leading-none text-2xl !h-[1.75rem] !w-[1.75rem] align-middle flex justify-center mx-auto">
                                                <div
                                                    class="text-[0.75rem] text-defaulttextcolor dark:text-[#8c9097] dark:text-white/50">
                                                    Docs</div>
                                            </a>
                                        </div>
                                        <div class="">
                                            <a href="javascript:void(0);"
                                                class="p-4 items-center related-app block text-center rounded-sm hover:bg-gray-50 dark:hover:bg-black/20">
                                                <img src="assets/images/apps/google.png" alt="google"
                                                    class="leading-none text-2xl !h-[1.75rem] !w-[1.75rem] align-middle flex justify-center mx-auto">
                                                <div
                                                    class="text-[0.75rem] text-defaulttextcolor dark:text-[#8c9097] dark:text-white/50">
                                                    Google</div>
                                            </a>
                                        </div>
                                        <div class="">
                                            <a href="javascript:void(0);"
                                                class="p-4 items-center related-app block text-center rounded-sm hover:bg-gray-50 dark:hover:bg-black/20">
                                                <img src="assets/images/apps/translate.png" alt="translate"
                                                    class="leading-none text-2xl !h-[1.75rem] !w-[1.75rem] align-middle flex justify-center mx-auto">
                                                <div
                                                    class="text-[0.75rem] text-defaulttextcolor dark:text-[#8c9097] dark:text-white/50">
                                                    Translate</div>
                                            </a>
                                        </div>
                                        <div class="">
                                            <a href="javascript:void(0);"
                                                class="p-4 items-center related-app block text-center rounded-sm hover:bg-gray-50 dark:hover:bg-black/20">
                                                <img src="assets/images/apps/google-sheets.png" alt="sheets"
                                                    class="leading-none text-2xl !h-[1.75rem] !w-[1.75rem] align-middle flex justify-center mx-auto">
                                                <div
                                                    class="text-[0.75rem] text-defaulttextcolor dark:text-[#8c9097] dark:text-white/50">
                                                    Sheets</div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-4 first:pt-0 border-t">
                                    <a class="w-full ti-btn ti-btn-primary-full p-2 !m-0" href="javascript:void(0);">
                                        View All
                                    </a>
                                </div>

                            </div>
                        </div>
                        <!--End Related Apps -->

                        <!-- Fullscreen -->
                        <div class="header-element header-fullscreen py-[1rem] md:px-[0.65rem] px-2">
                            <!-- Start::header-link -->
                            <a aria-label="anchor" onclick="openFullscreen();" href="javascript:void(0);"
                                class="inline-flex flex-shrink-0 justify-center items-center gap-2  !rounded-full font-medium dark:hover:bg-black/20 dark:text-[#8c9097] dark:text-white/50 dark:hover:text-white dark:focus:ring-white/10 dark:focus:ring-offset-white/10">
                                <i class="bx bx-fullscreen full-screen-open header-link-icon"></i>
                                <i class="bx bx-exit-fullscreen full-screen-close header-link-icon hidden"></i>
                            </a>
                            <!-- End::header-link -->
                        </div>
                        <!-- End Full screen -->

                        <!-- Header Profile -->
                        <div
                            class="header-element md:!px-[0.65rem] px-2 hs-dropdown !items-center ti-dropdown [--placement:bottom-left]">

                            <button id="dropdown-profile" type="button"
                                class="hs-dropdown-toggle ti-dropdown-toggle !gap-2 !p-0 flex-shrink-0 sm:me-2 me-0 !rounded-full !shadow-none text-xs align-middle !border-0 !shadow-transparent ">
                                <img class="inline-block rounded-full " src="assets/images/faces/9.jpg" width="32"
                                    height="32" alt="Image Description">
                            </button>
                            <div class="md:block hidden dropdown-profile">
                                <p class="font-semibold mb-0 leading-none text-[#536485] text-[0.813rem] ">Json Taylor
                                </p>
                                <span class="opacity-[0.7] font-normal text-[#536485] block text-[0.6875rem] ">Web
                                    Designer</span>
                            </div>
                            <div class="hs-dropdown-menu ti-dropdown-menu !-mt-3 border-0 w-[11rem] !p-0 border-defaultborder hidden main-header-dropdown  pt-0 overflow-hidden header-profile-dropdown dropdown-menu-end"
                                aria-labelledby="dropdown-profile">

                                <ul class="text-defaulttextcolor font-medium dark:text-[#8c9097] dark:text-white/50">
                                    <li>
                                        <a class="w-full ti-dropdown-item !text-[0.8125rem] !gap-x-0  !p-[0.65rem] !inline-flex"
                                            href="profile.html">
                                            <i class="ti ti-user-circle text-[1.125rem] me-2 opacity-[0.7]"></i>Profile
                                        </a>
                                    </li>
                                    <li>
                                        <a class="w-full ti-dropdown-item !text-[0.8125rem] !gap-x-0  !p-[0.65rem] !inline-flex"
                                            href="mail.html"><i
                                                class="ti ti-inbox text-[1.125rem] me-2 opacity-[0.7]"></i>Inbox <span
                                                class="!py-1 !px-[0.45rem] !font-semibold !rounded-sm text-success text-[0.75em] bg-success/10 ms-auto">25</span>
                                        </a>
                                    </li>
                                    <li><a class="w-full ti-dropdown-item !text-[0.8125rem] !gap-x-0 !p-[0.65rem] !inline-flex"
                                            href="todo.html"><i
                                                class="ti ti-clipboard-check text-[1.125rem] me-2 opacity-[0.7]"></i>Task
                                            Manager</a></li>
                                    <li><a class="w-full ti-dropdown-item !text-[0.8125rem] !gap-x-0 !p-[0.65rem] !inline-flex"
                                            href="mail-settings.html"><i
                                                class="ti ti-adjustments-horizontal text-[1.125rem] me-2 opacity-[0.7]"></i>Settings</a>
                                    </li>
                                    <li><a class="w-full ti-dropdown-item !text-[0.8125rem] !gap-x-0 !p-[0.65rem] !inline-flex "
                                            href="javascript:void(0);"><i
                                                class="ti ti-wallet text-[1.125rem] me-2 opacity-[0.7]"></i>Bal:
                                            $7,12,950</a></li>
                                    <li><a class="w-full ti-dropdown-item !text-[0.8125rem] !p-[0.65rem] !gap-x-0 !inline-flex"
                                            href="chat.html"><i
                                                class="ti ti-headset text-[1.125rem] me-2 opacity-[0.7]"></i>Support</a>
                                    </li>
                                    <li><a class="w-full ti-dropdown-item !text-[0.8125rem] !p-[0.65rem] !gap-x-0 !inline-flex"
                                            href="{{route('admin.logout')}}"><i
                                                class="ti ti-logout text-[1.125rem] me-2 opacity-[0.7]"></i>Log Out</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- End Header Profile -->

                        <!-- Switcher Icon -->
                        <div class="header-element md:px-[0.48rem]">
                            <button aria-label="button" type="button"
                                class="hs-dropdown-toggle switcher-icon inline-flex flex-shrink-0 justify-center items-center gap-2  rounded-full font-medium  align-middle transition-all text-xs dark:text-[#8c9097] dark:text-white/50 dark:hover:text-white dark:focus:ring-white/10 dark:focus:ring-offset-white/10"
                                data-hs-overlay="#hs-overlay-switcher">
                                <i class="bx bx-cog header-link-icon animate-spin-slow"></i>
                            </button>
                        </div>
                        <!-- Switcher Icon -->

                    </div>
                    <!-- End::header-element -->
                </div>
            </nav>
        </header>

    @extends('Admin.Layouts.nav')
       
  
