<style>
    .nav-menu-center {
        justify-content: center;
    }

    .col-span-12.header-menu {
        position: sticky;
        top: 0;
        z-index: 2;
    }

    .header-menu .box {
        border-radius: 0;
        margin: 0;
    }

</style>

<div class="col-span-12 header-menu">
    <div class="box">
        <div class="box-body">
            <header
                class="relative flex flex-wrap sm:justify-start sm:flex-nowrap w-full bg-white text-sm dark:bg-bodybg">
                <nav class="w-full mx-auto px-4 sm:flex sm:items-center sm:justify-between" aria-label="Global">
                    <div class="flex items-center justify-between">
                        <a href="index.html" class="header-logo">
                            <img src="{{asset('assets/images/brand-logos/favicon.png')}}" alt="logo"
                                class="dark:hidden block">
                            <img src="{{asset('assets/images/brand-logos/favicon.png')}}" alt="logo"
                                class="hidden dark:block">
                        </a>
                        <div class="sm:hidden">
                            <button type="button"
                                class="hs-collapse-toggle p-2 inline-flex justify-center items-center gap-2 rounded-sm border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:outline-none focus:ring-0 focus:ring-offset-0 focus:ring-offset-white focus:ring-primary transition-all text-sm dark:bg-bodybg dark:hover:bg-black/20 dark:border-white/10 dark:text-[#8c9097] dark:text-white/50 dark:hover:text-white dark:focus:ring-offset-white/10"
                                data-hs-collapse="#navbar-with-mega-menu" aria-controls="navbar-with-mega-menu"
                                aria-label="Toggle navigation">
                                <svg class="hs-collapse-open:hidden w-4 h-4" width="16" height="16"
                                    fill="currentColor" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                                </svg>
                                <svg class="hs-collapse-open:block hidden w-4 h-4" width="16" height="16"
                                    fill="currentColor" viewBox="0 0 16 16">
                                    <path
                                        d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div id="navbar-with-mega-menu"
                        class="hs-collapse hidden overflow-hidden transition-all duration-300 basis-full grow sm:block ">
                        <div
                            class="flex flex-col gap-5 mt-5 sm:flex-row sm:items-center sm:justify-end sm:mt-0 ltr:sm:ps-5 rtl:sm:pe-5 nav-menu-center">
                            <a class="font-medium text-primary" href="{{ route('user.index') }}" aria-current="page">Home</a>
                            <div class="hs-dropdown [--strategy:static] sm:[--strategy:fixed] [--adaptive:none]">
                                <button id="hs-mega-menu-basic-dr" type="button"
                                    class="flex items-center w-full text-gray-600 hover:text-gray-400 font-medium dark:text-gray-400 dark:hover:text-gray-500 ">
                                    Product
                                    <svg class="ltr:ml-2 rtl:mr-2 w-2.5 h-2.5 text-gray-600" width="16"
                                        height="16" viewBox="0 0 16 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"></path>
                                    </svg>
                                </button>
                                <div class="hs-dropdown-menu transition-[opacity,margin] duration-[0.1ms] sm:duration-[150ms] hs-dropdown-open:opacity-100 opacity-0 sm:w-48 z-10 bg-white sm:shadow-md rounded-lg p-2 dark:bg-bodybg sm:dark:border dark:border-white/10 dark:divide-gray-700 before:absolute top-full sm:border before:-top-5 before:left-0 before:w-full before:h-5 hidden"
                                    style="">


                                    <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 focus:ring-0 focus:ring-primary dark:text-gray-400 dark:hover:bg-bodybg2 dark:hover:text-gray-300"
                                        href="javascript:void(0);">
                                        TTB VPN Shield
                                    </a>
                                    <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 focus:ring-0 focus:ring-primary dark:text-gray-400 dark:hover:bg-bodybg2 dark:hover:text-gray-300"
                                        href="javascript:void(0);">
                                        TTB Antivirus
                                    </a>
                                    <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 focus:ring-0 focus:ring-primary dark:text-gray-400 dark:hover:bg-bodybg2 dark:hover:text-gray-300"
                                        href="javascript:void(0);">
                                        TTB Total Security
                                    </a>
                                </div>
                            </div>
                            <div class="hs-dropdown [--strategy:static] sm:[--strategy:fixed] [--adaptive:none]">
                                <button id="hs-mega-menu-basic-dr" type="button"
                                    class="flex items-center w-full text-gray-600 hover:text-gray-400 font-medium dark:text-gray-400 dark:hover:text-gray-500 ">
                                    Solutions
                                    <svg class="ltr:ml-2 rtl:mr-2 w-2.5 h-2.5 text-gray-600" width="16"
                                        height="16" viewBox="0 0 16 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"></path>
                                    </svg>
                                </button>
                                <div class="hs-dropdown-menu transition-[opacity,margin] duration-[0.1ms] sm:duration-[150ms] hs-dropdown-open:opacity-100 opacity-0 sm:w-48 z-10 bg-white sm:shadow-md rounded-lg p-2 dark:bg-bodybg sm:dark:border dark:border-white/10 dark:divide-gray-700 before:absolute top-full sm:border before:-top-5 before:left-0 before:w-full before:h-5 hidden"
                                    style="">
                                    <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 focus:ring-0 focus:ring-primary dark:text-gray-400 dark:hover:bg-bodybg2 dark:hover:text-gray-300"
                                        href="javascript:void(0);">
                                        Commercial
                                    </a>
                                    <div
                                        class="hs-dropdown relative [--strategy:static] sm:[--strategy:absolute] [--adaptive:none]">
                                        <button type="button"
                                            class="flex justify-between w-full items-center text-sm text-gray-800 rounded-md py-2 px-3 hover:bg-gray-100 focus:ring-0 focus:ring-primary dark:text-gray-400 dark:hover:bg-bodybg2 dark:hover:text-gray-300">
                                            Enterprise
                                            <svg class="sm:-rotate-90 ml-2 w-2.5 h-2.5 text-gray-600" width="16"
                                                height="16" viewBox="0 0 16 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round">
                                                </path>
                                            </svg>
                                        </button>

                                        <div
                                            class="hs-dropdown-menu transition-[opacity,margin] duration-[0.1ms] sm:duration-[150ms] hs-dropdown-open:opacity-100 opacity-0 sm:w-48 hidden z-10 sm:mt-2 bg-white sm:shadow-md rounded-lg p-2 dark:bg-bodybg sm:dark:border dark:border-white/10 dark:divide-gray-700 before:absolute sm:border before:-right-5 before:top-0 before:h-full before:w-5 top-0 ltr:right-full rtl:left-full !mx-[10px]">
                                            <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 focus:ring-0 focus:ring-primary dark:text-gray-400 dark:hover:bg-bodybg2 dark:hover:text-gray-300"
                                                href="javascript:void(0);">
                                                Endpoint Protection
                                            </a>
                                            <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 focus:ring-0 focus:ring-primary dark:text-gray-400 dark:hover:bg-bodybg2 dark:hover:text-gray-300"
                                                href="javascript:void(0);">
                                                Network Protection
                                            </a>

                                        </div>
                                        {{-- <button type="button"
                                            class="flex justify-between w-full items-center text-sm text-gray-800 rounded-md py-2 px-3 hover:bg-gray-100 focus:ring-0 focus:ring-primary dark:text-gray-400 dark:hover:bg-bodybg2 dark:hover:text-gray-300">
                                            Threat Intelligence
                                            <svg class="sm:-rotate-90 ml-2 w-2.5 h-2.5 text-gray-600" width="16"
                                                height="16" viewBox="0 0 16 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round">
                                                </path>
                                            </svg>
                                        </button> --}}
                                    </div>

                                <div
                                    class="hs-dropdown relative [--strategy:static] sm:[--strategy:absolute] [--adaptive:none]">
                                    <button type="button"
                                        class="flex justify-between w-full items-center text-sm text-gray-800 rounded-md py-2 px-3 hover:bg-gray-100 focus:ring-0 focus:ring-primary dark:text-gray-400 dark:hover:bg-bodybg2 dark:hover:text-gray-300">
                                        Threat Intelligence
                                        <svg class="sm:-rotate-90 ml-2 w-2.5 h-2.5 text-gray-600" width="16"
                                            height="16" viewBox="0 0 16 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round">
                                            </path>
                                        </svg>
                                    </button>

                                    <div
                                        class="hs-dropdown-menu transition-[opacity,margin] duration-[0.1ms] sm:duration-[150ms] hs-dropdown-open:opacity-100 opacity-0 sm:w-48 hidden z-10 sm:mt-2 bg-white sm:shadow-md rounded-lg p-2 dark:bg-bodybg sm:dark:border dark:border-white/10 dark:divide-gray-700 before:absolute sm:border before:-right-5 before:top-0 before:h-full before:w-5 top-0 ltr:right-full rtl:left-full !mx-[10px]">
                                        <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 focus:ring-0 focus:ring-primary dark:text-gray-400 dark:hover:bg-bodybg2 dark:hover:text-gray-300"
                                            href="javascript:void(0);">
                                            Threat Protection
                                        </a>
                                        <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 focus:ring-0 focus:ring-primary dark:text-gray-400 dark:hover:bg-bodybg2 dark:hover:text-gray-300"
                                            href="javascript:void(0);">
                                            Behavioral Protection
                                        </a>
                                        <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 focus:ring-0 focus:ring-primary dark:text-gray-400 dark:hover:bg-bodybg2 dark:hover:text-gray-300"
                                            href="javascript:void(0);">
                                            Enhanced Firewall
                                        </a>
                                        <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 focus:ring-0 focus:ring-primary dark:text-gray-400 dark:hover:bg-bodybg2 dark:hover:text-gray-300"
                                            href="javascript:void(0);">
                                            Malware Detection
                                        </a>
                                        <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 focus:ring-0 focus:ring-primary dark:text-gray-400 dark:hover:bg-bodybg2 dark:hover:text-gray-300"
                                            href="javascript:void(0);">
                                            Real Time Anti-phishing
                                        </a>



                                    </div>
                                </div> 

                                </div>
                            </div>
                            <div class="hs-dropdown [--strategy:static] sm:[--strategy:fixed] [--adaptive:none]">
                                <button id="hs-mega-menu-basic-dr" type="button"
                                    class="flex items-center w-full text-gray-600 hover:text-gray-400 font-medium dark:text-gray-400 dark:hover:text-gray-500 ">
                                    Resources
                                    <svg class="ltr:ml-2 rtl:mr-2 w-2.5 h-2.5 text-gray-600" width="16"
                                        height="16" viewBox="0 0 16 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"></path>
                                    </svg>
                                </button>
                                <div class="hs-dropdown-menu transition-[opacity,margin] duration-[0.1ms] sm:duration-[150ms] hs-dropdown-open:opacity-100 opacity-0 sm:w-48 z-10 bg-white sm:shadow-md rounded-lg p-2 dark:bg-bodybg sm:dark:border dark:border-white/10 dark:divide-gray-700 before:absolute top-full sm:border before:-top-5 before:left-0 before:w-full before:h-5 hidden"
                                    style="">
                                    <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 focus:ring-0 focus:ring-primary dark:text-gray-400 dark:hover:bg-bodybg2 dark:hover:text-gray-300"
                                        href="javascript:void(0);">
                                        News
                                    </a>
                                  
                                    <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 focus:ring-0 focus:ring-primary dark:text-gray-400 dark:hover:bg-bodybg2 dark:hover:text-gray-300"
                                        href="javascript:void(0);">
                                        Blog
                                    </a>
                                </div>
                            </div>
                            <div class="hs-dropdown [--strategy:static] sm:[--strategy:fixed] [--adaptive:none]">
                                <button id="hs-mega-menu-basic-dr" type="button"
                                    class="flex items-center w-full text-gray-600 hover:text-gray-400 font-medium dark:text-gray-400 dark:hover:text-gray-500 ">
                                    Company
                                    <svg class="ltr:ml-2 rtl:mr-2 w-2.5 h-2.5 text-gray-600" width="16"
                                        height="16" viewBox="0 0 16 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"></path>
                                    </svg>
                                </button>
                                <div class="hs-dropdown-menu transition-[opacity,margin] duration-[0.1ms] sm:duration-[150ms] hs-dropdown-open:opacity-100 opacity-0 sm:w-48 z-10 bg-white sm:shadow-md rounded-lg p-2 dark:bg-bodybg sm:dark:border dark:border-white/10 dark:divide-gray-700 before:absolute top-full sm:border before:-top-5 before:left-0 before:w-full before:h-5 hidden"
                                    style="">
                                         

                                    <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 focus:ring-0 focus:ring-primary dark:text-gray-400 dark:hover:bg-bodybg2 dark:hover:text-gray-300"
                                        href="javascript:void(0);">
                                        About Us
                                    </a>
                                    <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 focus:ring-0 focus:ring-primary dark:text-gray-400 dark:hover:bg-bodybg2 dark:hover:text-gray-300"
                                        href="javascript:void(0);">
                                        Contact Us
                                    </a>
                                </div>
                            </div>
                            @if (session()->has('loggedInUser'))
                                <div class="hs-dropdown [--strategy:static] sm:[--strategy:fixed] [--adaptive:none]">
                                    <button id="hs-mega-menu-basic-dr" type="button"
                                        class="flex items-center w-full text-gray-600 hover:text-gray-400 font-medium dark:text-gray-400 dark:hover:text-gray-500 ">
                                        My Account
                                        <svg class="ltr:ml-2 rtl:mr-2 w-2.5 h-2.5 text-gray-600" width="16"
                                            height="16" viewBox="0 0 16 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"></path>
                                        </svg>
                                    </button>
                                    <div class="hs-dropdown-menu transition-[opacity,margin] duration-[0.1ms] sm:duration-[150ms] hs-dropdown-open:opacity-100 opacity-0 sm:w-48 z-10 bg-white sm:shadow-md rounded-lg p-2 dark:bg-bodybg sm:dark:border dark:border-white/10 dark:divide-gray-700 before:absolute top-full sm:border before:-top-5 before:left-0 before:w-full before:h-5 hidden"
                                        style="">
                                        <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 focus:ring-0 focus:ring-primary dark:text-gray-400 dark:hover:bg-bodybg2 dark:hover:text-gray-300"
                                            href="{{ route('user.myprofile') }}">
                                            My Profile
                                        </a>


                                        {{-- <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 focus:ring-0 focus:ring-primary dark:text-gray-400 dark:hover:bg-bodybg2 dark:hover:text-gray-300"
                                        href="javascript:void(0);">
                                        Sign Out
                                    </a> --}}

                                    </div>
                                </div>
                            @endif
                            {{-- @if (session()->has('loggedInUser'))
                            <li class="slide">
                                <a href="{{route('user.myprofile')}}" class="sidemenubar">
                                    <span class="side-menu__label">My Profile</span>
                                </a>
                            </li>
                            @endif --}}
                        </div>
                    </div>
                    <div class="flex items-center justify-between setting-menu">
                        @if (!session()->has('loggedInUser'))
                            <div class="lg:flex hidden space-x-2 rtl:space-x-reverse">
                                <a href="{{ route('user.signin') }}"
                                    class="ti-btn w-[6.375rem] ti-btn-primary-full m-0 p-2">Sign
                                    Up</a>
                                <a aria-label="anchor" href="javascript:void(0);"
                                    class="ti-btn m-0 p-2 px-3 ti-btn-light !font-medium"
                                    data-hs-overlay="#hs-overlay-switcher"><i
                                        class="ri-settings-3-line animate-spin-slow"></i></a>
                            </div>
                        @endif
                        @if (session()->has('loggedInUser'))
                            <div class="lg:flex hidden space-x-2 rtl:space-x-reverse">
                                <a href="{{ route('user.logout') }}"
                                    class="ti-btn w-[6.375rem] ti-btn-primary-full m-0 p-2">Logout
                                </a>
                                <a aria-label="anchor" href="javascript:void(0);"
                                    class="ti-btn m-0 p-2 px-3 ti-btn-light !font-medium"
                                    data-hs-overlay="#hs-overlay-switcher"><i
                                        class="ri-settings-3-line animate-spin-slow"></i></a>
                            </div>
                        @endif
                    </div>
                </nav>
            </header>
        </div>
    </div>
</div>
